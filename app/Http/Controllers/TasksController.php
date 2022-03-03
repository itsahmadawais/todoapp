<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class TasksController extends Controller
{
    public function home(){
        $timezone = 'America/New_York';
        try{
            $guest_info = file_get_contents('http://ip-api.com/json/' . $_SERVER['REMOTE_ADDR']);
            $guest_info = json_decode($guest_info);
            $timezone = $guest_info->timezone;
        } catch(Throwable $e){
            $timezone = 'America/New_York';
        }
        $tasks = Tasks::paginate(2);
        return view('pages.index')->with('tasks',$tasks)->with('timezone',$timezone);
    }
    public function index(){
        $user_id = Auth::id();
        $tasks = Tasks::where('user_id',$user_id)->get();
        return view('pages.tasks.tasks')->with('tasks',$tasks)->with('timezone',Auth::user()->timezone);
    }
    public function add(){
        return view('pages.tasks.add');
    }
    public function create(Request $request){
        $user_id = Auth::id();
        $tasks = Tasks::create([
            'title' => $request->task_title,
            'deadline' => $request->deadline,
            'user_id' => $user_id
        ]);
        return redirect('tasks/'.$tasks->id);
    }
    public function edit($id){
        $task = Tasks::findOrFail($id);
        return view('pages.tasks.edit')->with('task',$task);
    }
    public function update(Request $request, $id){
        $task = Tasks::findOrFail($id);
        $task->title = $request->task_title;
        $task->deadline =  $request->deadline;
        $task->update();
        return redirect()->back();
    }
    public function delete(Request $request, $id){
        $task = Tasks::findOrFail($id);
        $task->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Models;
use Illuminate\Support\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'deadline',
        'user_id'
    ];
    public function getLocalTime($required_timezone=null,$task_timezone){
        $deadline = Carbon::createFromFormat('Y-m-d H:i:s', $this->deadline, $task_timezone);
        if($required_timezone!=null){
            $deadline->setTimezone($required_timezone);
        }
        $deadline = $deadline->format('Y-m-d, g:i a');
        return $deadline;
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}

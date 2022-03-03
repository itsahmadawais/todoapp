@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Task</h3>
                </div>
                <div class="card-body">
                    <form class="forms-sample" action="{{url('tasks/'.$task->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="taskTitle">Task Title</label>
                            <input type="text" class="form-control" id="taskTitle" placeholder="Task Title" name="task_title" value="{{$task->title}}">
                        </div>
                        <div class="form-group">
                            <p>Select Date and Time</p>
                            <input class="form-control" type="datetime-local" name="deadline" value="{{$task->deadline}}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
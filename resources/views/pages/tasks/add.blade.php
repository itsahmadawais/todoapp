@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Create Task</h3>
                </div>
                <div class="card-body">
                    <form class="forms-sample" action="{{url('tasks')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="taskTitle">Task Title</label>
                            <input type="text" class="form-control" id="taskTitle" placeholder="Task Title" name="task_title">
                        </div>
                        <div class="form-group">
                                <p>Select Date</p>
                                <input class="form-control" type="datetime-local" name="deadline" >
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
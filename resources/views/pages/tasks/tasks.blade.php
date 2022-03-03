@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header row">
            <div class="col col-sm-3">
            </div>
            <div class="col col-sm-6">
                <div class="card-search with-adv-search dropdown">
                    <form action="">
                        <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required>
                        <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col col-sm-3">
            </div>
        </div>
        <div class="card-body">
            <table id="data_table" class="table">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Deadline</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($tasks)>0)
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->title}}</td>
                                <td>{{$task->getLocalTime(null,$timezone)}}</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a href="{{url('tasks/'.$task->id)}}" class="btn btn-success text-white mr-2"><i class="ik ik-edit-2"></i></a>
                                        <form action="{{url('tasks/'.$task->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="ik ik-trash-2"></i></button>
                                        </form>
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection
@extends('layouts.public')

@section('content')
    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto my-5">
                    @if(count($tasks)>0)
                        @foreach($tasks as $task)
                            <div class="card mb-2 task-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$task->title}} - Deadline: <span class="deadline" data-datetime="{{$task->deadline}}" data-timezone="{{$task->user->timezone}}"></span> </h5>
                                    <p><b>Timezone:</b> <span class="timezone"></span></p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center">
                            <p>No content found! Create your first task <a href="{{url('tasks/add')}}">Click to create</a></p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="custom-pagination">
                        {{ $tasks->onEachSide(5)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
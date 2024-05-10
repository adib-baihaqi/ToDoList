@extends('layouts.app')

@section('content')
<h1>Task List</h1>

    @foreach($tasks as $task)
        <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px;">
            <div class="card-body">
                <p>{{$task->description}}</p>
                <form action="/{{$task->id}}" method="POST">
                    @method('PATCH')
                    @csrf
                    @if(!$task->isCompleted())
                        <button class="btn btn-light col-12" input="submit">Complete</button>
                    @else
                        <form action="/{{$task->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger col-12" input="submit">Remove</button>
                        </form>
                    @endif
                </form>
            </div>
        </div>
    @endforeach
    <a href="/create" class="btn btn-primary btn-lg col-12">New Task  </a>
@endsection
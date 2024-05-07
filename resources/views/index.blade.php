@extends('layouts.app')

@section('content')
<h1>Task List</h1>

    @foreach($tasks as $task)
        <div class="card" style="margin-bottom: 20px;">
            <div class="card-body">
                @if($task->isCompleted())
                <button type="button" class="btn btn-outline-success">Success</button>
                @endif
                <p>{{$task->description}}</p>
                <form action="/{{$task->id}}" method="POST">
                    @method('PATCH')
                    @csrf
                    @if(!$task->isCompleted())
                        <button class="btn btn-light btn-block" input="submit">Complete</button>
                    @endif
                </form>
            </div>
        </div>
    @endforeach
    <a href="/create" class="btn btn-primary btn-lg btn-block">New Task  </a>
@endsection
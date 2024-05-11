@extends('layouts.app')

@section('content')
    <h1>Completed Task</h1>
    @foreach($tasks as $task)
        <div class="card">
            <div class="card-body">
                <p>{{$task->description}}</p>
            </div>
        </div>
    @endforeach
@endsection
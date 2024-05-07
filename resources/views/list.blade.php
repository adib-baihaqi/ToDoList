@extends('layouts.app')
@section('content')
    <form method="POST" action="/">
        <div class="mb-3">
            @csrf
            <label for="exampleInputEmail1" class="form-label">Task Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
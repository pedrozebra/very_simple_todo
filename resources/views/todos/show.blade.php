@extends('layouts.app')

@section('title')
    Todo Detail {{ $todo->name }}
@endsection

@section('content')
<h1 class="text-center my-5">
        {{ $todo->name }}
</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
            <div class="card card-default">
                    <div class="card-header">
                        Details
                    </div>
                    <div class="card-body">
                        {{ $todo->description }}
                    </div>
                   
                </div>
                <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
                <form action="/todos/{{ $todo->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
    </div>
</div>  
@endsection
        

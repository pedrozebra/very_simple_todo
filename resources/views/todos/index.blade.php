@extends('layouts.app')

@section('title')
    Todos List
@endsection

@section('content')
    <h1 class="text-center my-5">Todos List</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <card class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ( $todos as $todo )
                            <li class="list-group-item">
                                {{ $todo->name }}
                                
                                <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info  btn-sm float-right">Edit</a>
                                @if(!$todo->completed)
                                    <a href="/todos/{{ $todo->id }}/complete" class="btn btn-warning mr-1 btn-sm float-right">Complete</a>
                                @endif
                                <a href="/todos/{{ $todo->id }}" class="btn btn-primary mr-1 btn-sm float-right">View</a>
                            </li>                            
                        @endforeach
                    </ul>
                </div>
            </card>
        </div>
    </div>
  @endsection
@extends('layout')
@section('content')

    <div class="container">

        <h3>Edit task {{$task->title}}</h3>
        @include('errors')
        <div class="row">

            <div class="col-md-12">
                {!! Form::open(['route'=>['task.update', $task->id], 'method'=>'PUT'])!!}
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{$task->title}}">
                    <br>
                    <textarea name="content" id="" cols="30" rows="30" class="form-control">{{$task->content}}</textarea>
                    <br>
                    <button class="btn btn-warning">Update</button>
                </div>

                {!! Form::close() !!}
            </div>

        </div>
    </div>


@endsection
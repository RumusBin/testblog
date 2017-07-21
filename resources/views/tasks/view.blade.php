@extends('layout')
@section('content')

    <div class="container">

        <h3>View of {{$task->title}} with id # {{$task->id}}</h3>

        <div class="row">

            <div class="col-md-12">

                <div class="form-group">
                    <h2>{{$task->title}}</h2>
                    <br>
                    <div><p>
                            {{$task->content}}
                        </p>
                    </div>
                    <br>
                    <a  href="/">
                       <button class="btn btn-success">Back</button>
                    </a>
                    <a href="{{route('task.edit', $task->id)}}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </div>


            </div>

        </div>
    </div>


@endsection
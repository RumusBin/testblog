@extends('layout')
@section('content')

    <div class="container">

        <h3>Create tasks</h3>
     @include('errors')

        <div class="row">

            <div class="col-md-12">

                <div class="form-group">
                    <form method="post" action="/tasks/store" >
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                   Title:  <input type="text" class="form-control" name="title" value="">
                    <br>
                   Content article:  <textarea name="content" id="mytextarea" cols="30" rows="30" class="form-control"></textarea>
                    <br>
                    <button class="btn btn-success">Submit</button>
                    </form>
                </div>


            </div>


        </div>
    </div>


@endsection
@extends('layouts.app')

@section('content')
{{--    {{$id}}--}}
{{--    {{$user}}--}}

    <div class="d-flex justify-content-center ">

        <form method="post" action="/comments_home/{{$id->id}}/{{$id->user_id}}">
            <h1  style="margin-left:90px; margin-top: 70px">Add Command</h1>
            {{csrf_field()}}
            <div class="form-group" style="width: 400px; margin-top: 70px">
                <textarea type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Command ..."> </textarea>
            </div>

            <button type="submit" style=" margin-left: 150px" class="btn btn-primary">Add Command</button>
        </form>
    </div>


@endsection

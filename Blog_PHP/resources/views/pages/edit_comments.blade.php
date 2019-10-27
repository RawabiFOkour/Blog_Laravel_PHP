@extends('layouts.app')

@section('content')
{{$comments}}
    <div class="d-flex justify-content-center ">

        <form method="post" action="/commands/{{$comments->id}}">
            <h1  style="margin-left:90px; margin-top: 70px">Edit Comments</h1>
            @method('PATCH')
            @csrf
            <div class="form-group" style="width: 400px; margin-top: 70px">
                <textarea type="text" name="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Edit Comment ..."> {{$comments->text}}</textarea>
            </div>

            <button type="submit" style=" margin-left: 150px" class="btn btn-primary">Edit Comment</button>
        </form>
    </div>



@endsection

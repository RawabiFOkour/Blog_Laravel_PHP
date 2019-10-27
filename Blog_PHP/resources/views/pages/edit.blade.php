@extends('layouts.app')

@section('content')
{{$post->id}}
    <div class="d-flex justify-content-center ">

        <form method="post" action="/posts/{{$post->id}}" >
            @method('PATCH')
            @csrf
            <h1  style="margin-left:90px; margin-top: 70px">Edit Post</h1>

            <div class="form-group" style="width: 400px; margin-top: 70px">
                <textarea type="text" name="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Edit Post ...">

                  {{$post->text}}
                </textarea>
            </div>

            <button type="submit" style=" margin-left: 150px" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection()

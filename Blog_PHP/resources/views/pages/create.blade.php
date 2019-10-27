@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center ">

        <form method="post" action="/posts">
            <h1  style="margin-left:90px; margin-top: 70px">Create Post</h1>
            {{csrf_field()}}
            <div class="form-group" style="width: 400px; margin-top: 70px">
                <textarea type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Post ..." maxlength="600"> </textarea>
            </div>

            <button type="submit" style=" margin-left: 150px" class="btn btn-primary">Create Post</button>
        </form>
    </div>



@endsection

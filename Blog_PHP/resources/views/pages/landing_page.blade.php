@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
{{--        {{$users}}--}}
{{--        {{$posts}}--}}
        @foreach($posts as $post)
        <div class="col-2" style="background-color: #f66d9b; margin-bottom: 15px; margin-left: 20px;">

            <div class="form-group ml-5 mr-5">

                <label for="exampleFormControlTextarea1" style="color: darkblue;font-weight: bold;font-size: 20px;">
                    User_id( {{$post->user_id}})
                </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$post->text}}</textarea>
            </div>
            @foreach($post->comments as $command)
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 100px;height: 30px" > {{$command->text}}</textarea>
                </div>
            @endforeach
            <div class="d-flex justify-content-end mr-2 mb-2">
                <button type="submit" name="create" class="btn btn-info"  > <a href="/add/{{$post->id}}/{{$post->user_id}}"  style="color: white"> Add Command</a>  </button>
            </div>

        </div>

        <div class="col-1" >

        </div>
        @endforeach
    </div>
</div>

@endsection()

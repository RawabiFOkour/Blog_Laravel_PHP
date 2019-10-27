@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mr-4 mb-4">
    <button type="submit" name="create" class="btn btn-primary"  > <a href="/posts/create" style="color: white"> Create Post</a>  </button>
</div>
{{--{{$posts}}--}}
{{--{{$user_id}}--}}

<form>
    @foreach($posts as $post)
{{--        {{$post->comments}}--}}
    <div class="form-group ml-5 mr-5">
        <label for="exampleFormControlTextarea1">Post {{$post->id}}</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$post->text}}</textarea>
        <div class="d-flex justify-content-end ">
            <form method="POST" action="posts/{{$post->id}}" >
                @method('DELETE')
                @csrf
            <button type="submit" name="create" class="btn btn-danger" style="margin-right: 10px; margin-top: 10px"  > <a style="color: white"> Delete Post</a>  </button>
            </form>
            <button type="submit" name="create" class="btn btn-info" style="margin-right: 10px; margin-top: 10px" > <a href="posts/{{$post->id}}/edit" style="color: white"> Edit Post</a>  </button>
            <button type="submit" name="create" class="btn btn-success" style="margin-right: 10px; margin-top: 10px"  > <a href="/add_command/{{$post->id}}" style="color: white"> Add Command</a>  </button>
        </div>

    </div>
        <h6 style="margin-left: 40px; font-weight: bold">Comments</h6>

        @foreach($post->comments as $command)

{{--            @if($command->post_id == $post->id)--}}
            <div class="form-group ml-5 mr-5 w-50">
{{--                <label for="exampleFormControlTextarea1">command {{$command->id}}</label>--}}
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 600px;height: 60px" >{{$command->text}}</textarea>
                <div class="d-flex justify-content-end">
                    <form method="POST" action="commands/{{$command->id}}" >
                        @method('DELETE')
                        @csrf
                    <button type="submit" name="create" class="btn btn-danger" style="margin-right: 10px; margin-top: 10px"  > <a style="color: white"> Delete Comment</a>  </button>
                    <form/>
                    <button type="submit" name="create" class="btn btn-info" style="margin-right: 10px; margin-top: 10px" > <a href="commands/{{$command->id}}/edit" style="color: white"> Edit Comment</a>  </button>
                </div>
            </div>
{{--            @endif--}}
        @endforeach


        <hr style="border-color: #f66d9b"/>
        <hr style="border-color: #f66d9b"/>
    @endforeach
</form>



@endsection

@extends('layouts.main')
@section('content')
<a href="{{route('posts.index')}}"><img src="https://cdn-icons-png.flaticon.com/512/17/17699.png" style="width:30px" alt="back"></a>
<hr>
<h3>{{$post->id}}. {{$post->title}}</h3>
<div>{{$post->content}}</div>
<hr>
@can('view',$post)
<a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}" style="margin-bottom: 15px">EDIT post</a>
<form action="{{route('posts.destroy',$post->id)}}" method="post">
    @csrf
    @method('delete')
    <button class="btn btn-danger" type="submit">DELETE post</button>
</form>
<hr>
@endcan
@endsection
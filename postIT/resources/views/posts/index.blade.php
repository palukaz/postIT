@extends('layouts.main')
@section('content')
<div class="list-group">
@foreach($posts as $post)
<a href="{{route('posts.show',$post->id)}}" class="list-group-item list-group-item-action"><h3>{{$post->id}}. {{$post->title}}</h3>
<small>category: {{$post->category->title}} | {{isset($post->user->name)?'author: '.$post->user->name:''}} 
</small></a>
@endforeach
</div>
<div style="margin-top: 10px">
    {{$posts->links()}}
</div>
@endsection
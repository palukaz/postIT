@extends('layouts.main')
@section('content')
<a href="{{route('posts.show',$post->id)}}"><img src="https://cdn-icons-png.flaticon.com/512/17/17699.png" style="width:30px" alt="back"></a>
<form action="{{ route('posts.update',$post->id) }}" method="post">
@csrf
@method('patch')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
    @error('title')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <label for="content" class="form-label">Content</label>
    <textarea type="text" class="form-control" id="content" name="content">{{$post->content}}</textarea>
    @error('content')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <label for="category" class="form-label">Category</label>
    <select class="form-select" id="category" name="category_id">
      @foreach($categories as $category)
    <option {{$category->id===$post->category_id?'selected':''}} 
      {{old('category_id')==$category->id?'selected':''}} value="{{$category->id}}">{{$category->title}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Posts</h1>
      <hr>
      <form method="POST" action="{{ route('posts.store')}}">
        <div class="form-group">
          <label for="usr">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" required>
        </div>
        <div class="form-group">
          <label for="pwd">Content</label>
          <textarea class="form-control" rows="5" id="content" name="content"  required>{{$post->content}}</textarea>
        </div>
        <button class="btn btn-success btn-lg btn-block" type="submit">Create Post</button>
      </form>
    </div>
  </div>

</div>
@endsection

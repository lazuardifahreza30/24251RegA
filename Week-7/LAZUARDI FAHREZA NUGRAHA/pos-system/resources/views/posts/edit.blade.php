@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Edit Post</h1>

    <form action="/posts/{{ $id }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] }}" required />
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body" required>{{ $post['body'] }}</textarea>
      </div>
      <button type="submit" class="btn btn-warning">Update</button>
    </form>
  </div>
@endsection

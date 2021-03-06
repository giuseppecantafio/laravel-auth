@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        @method('POST')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="title" class="form-control" id="title" placeholder="Enter title" name="title" value="{{old('title')}}">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea type="content" class="form-control" id="content" placeholder="Enter content" name="content">{{old('content')}}</textarea>
  </div>
  <div class="form-check">
      <input type="checkbox" name="published" class="form-check-input" id="published">
      <label class="form-check-label" {{old('published') ? 'checked' : ''}}  for="published">Pubblicato?</label>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
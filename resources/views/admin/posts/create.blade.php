@extends('layouts.app')

@section('content')

  @if(count($errors) > 0 )
    <ul class="list-group">
      @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">
          {{ $error }}
        </li>
      @endforeach
    </ul>
  @endif

  <div class="div panel panel-default">
    <div class="panel-heading">
      <h4>Create a new post</h4>
    </div>
    <br>

    <div class="panel-body">
      <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" name="featured" class="form-control">
        </div>
        <div class="form-group">
          <label for="category">Select a Category</label>
          <select name="category_id" id="category" class="form-control">
            @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="tags">Select Tags</label>
          @foreach($tags as $tag)
            <div class="checkbox">
              <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }}</label>
            </div>
          @endforeach
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="content" cols="7" rows="7" class="form-control content"></textarea>
        </div>

          <div class="form-group">
            <div class="text-center">
              <button class="btn btn-success" type="submit">Store post</button>
            </div>
          </div>
      </form>
    </div>
  </div>
@stop

{{--  @section('styles')
  <!-- summernote.css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
@stop  --}}

@section('scripts')
  <!-- summernote.js -->
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=mj6f5bbjybqupfl2yk8amrml742kqn8x0n82dxcsnwbahbqz"></script>
  <script>tinymce.init({ selector:'textarea.content' });</script>
  </script>
@stop

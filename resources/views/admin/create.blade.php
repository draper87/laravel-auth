@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h2>Crea il tuo post</h2>

        <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="">
            <label>Title</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
          </div>
          <div class="">
            <label>Content</label><br>
            <textarea name="content" rows="8" cols="80" value="{{ old('content') }}"></textarea>
          </div>
          <div class="">
            <label>Content</label><br>
            <input type="file" name="image_url" accept="image/*">
          </div>
          <input type="submit" name="" value="Crea post">

        </form>



      </div>

    </div>
  </div>
@endsection

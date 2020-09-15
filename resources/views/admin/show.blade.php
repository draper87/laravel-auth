@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h2>{{ $post->title }}</h2>

        <h3>Author</h3>

        <ul>
          <li>{{ $post->user->name }}</li>
          <li>{{ $post->user->email }}</li>
        </ul>

        <div>
          <img src="{{ $post->image_url }}" alt="">
        </div>

        <div>
          <p>{{ $post->content }}</p>
        </div>

      </div>

    </div>
  </div>
@endsection

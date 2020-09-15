@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h2>Benvenuto nella lista dei post</h2>

        <ul>
          @foreach ($posts as $post)
            <li>{{$post->title}}</li>
            <div>
              <a class="btn btn-primary" href="{{ route('show', $post) }}">Visualizza</a>
            </div>
          @endforeach
        </ul>


      </div>

    </div>
  </div>
@endsection

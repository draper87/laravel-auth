@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h2>Benvenuto {{ $user->name }} nella lista dei post</h2>

        <ul>
          @foreach ($posts as $post)
            <li>{{$post->title}}</li><span>Autore: {{$post->user->name}} </span>
            <div>
              <a class="btn btn-primary" href="{{ route('posts.show', $post) }}">Visualizza</a>
            </div>
          @endforeach
        </ul>


      </div>

    </div>
  </div>
@endsection

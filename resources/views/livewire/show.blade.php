@extends('layouts.main')

@section('content')
   <div class="card">
       <h2>{{ Str::ucfirst($article->title) }}</h2>
       <hr>
       <p>{{ Str::ucfirst($article->body) }}</p>
   </div>
   <a href="{{ route('articles.articles') }}"><small>Go back</small></a>
@endsection

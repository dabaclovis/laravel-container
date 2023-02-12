@extends('layouts.main')

@section('content')
<div class=" d-flex justify-content-end">
   <button class=" btn btn-info" data-toggle="modal" data-target="#createarticle">create </button>
</div><hr>
    @if (count($articles)>0)
        @foreach ($articles as $article)
            <div class="list-group">
                <a href="{{ route('blogs.show', $article->id) }}" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ Str::ucfirst($article->title) }}</h5>
                        <small>{{ $article->created_at }}</small>
                    </div>
                    <p class="mb-1">{{ Str::ucfirst($article->body) }}</p>
                    <small>paragraph footer</small>
                </a>
            </div>
        @endforeach
    @endif
@include('partials.modal')
@endsection

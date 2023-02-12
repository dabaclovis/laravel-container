@extends('layouts.main')

@section('content')
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Heading</h5>
                <small>small</small>
            </div>
            <p class="mb-1">Paragraph</p>
            <small>paragraph footer</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Heading</h5>
                <small>small</small>
            </div>
            <p class="mb-1">Paragraph</p>
            <small>paragraph footer</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Heading</h5>
                <small>small</small>
            </div>
            <p class="mb-1">Paragraph</p>
            <small>paragraph footer</small>
        </a>
    </div>

@endsection

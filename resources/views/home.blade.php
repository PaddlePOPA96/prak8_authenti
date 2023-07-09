@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-person-circle me-3 fs-1"></div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in as') }} {{ Auth::user()->name }}!
            </div>
        </div>
    </div>
@endsection

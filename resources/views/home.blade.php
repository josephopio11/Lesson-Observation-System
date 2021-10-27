@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-left">
                        {{ __('Dashboard') }}
                    </h4>
                    <div class="float-right">
                        <a href="{{ route('lesson.create') }}" class="btn btn-outline-warning">New Observation</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">

                        {{ __('Number of teachers observed') }}
                    </h1>

                    <h2 class="display-1 text-center">
                        {{ $lessons->count() }}
                    </h2>
                    <div>
                        <hr>
                        <h2 class="text-center">Teachers observed</h2>
                        <hr>
                    </div>
                    <div class="row text-center">
                        @foreach ($lessons as $lesson)
                        <div class="col-sm-3">
                            <a href="{{ route('lesson.observed', $lesson->id) }}" class="btn btn-outline-danger btn-block mb-1">
                                {{ $lesson->name }}
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

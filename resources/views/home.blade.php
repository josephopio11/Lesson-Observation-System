@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
                        <div class="col-sm-4">
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

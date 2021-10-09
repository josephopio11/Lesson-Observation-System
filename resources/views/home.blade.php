@extends('layouts.app')

@section('content')
<div class="">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"
        style="position: absolute; top: 0; right: 0;">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1 class="text-center">
                        {{ __('Number of teachers observed') }}
                    </h1>

                    <h2 class="text-center display-1">
                        {{ $lessons->count() }}
                    </h2>
                    <div>
                        <hr>
                        <h2 class="text-center">Teachers observed</h2>
                        <hr>
                    </div>
                    <div class="text-center row">
                        @foreach ($lessons as $lesson)
                        <div class="col-sm-4">
                            <a href="{{ route('lesson.observed', $lesson->id) }}"
                                class="mb-1 btn btn-outline-danger btn-block">
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
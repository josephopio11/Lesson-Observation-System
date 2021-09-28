@extends('layouts.app')

@section('content')
<div class="container">
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

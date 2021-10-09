@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="card">
                <div class="card-header card-title">
                    <h4>
                        {{ __('Make an Observation') }}
                    </h4>
                </div>

                <div class="card-body">
                    <article class="mx-auto card-body" style="max-width: 600px">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ $user->name }}" placeholder="Full Name" required
                                    autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $user->email }}" placeholder="cool@mailserver.com" required
                                    autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        placeholder="Repeat Password" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option value="{{ $user->role }}" selected>
                                        @if ($user->role === 0)
                                        <span class="badge badge-danger">Admin</span>
                                        @elseif ($user->role === 1)
                                        <span class="badge badge-info">Principal</span>
                                        @elseif ($user->role === 2)
                                        <span class="badge badge-primary">Head of Secondary</span>
                                        @elseif ($user->role === 3)
                                        <span class="badge badge-warning">Head of Primary</span>
                                        @elseif ($user->role === 4)
                                        <span class="badge badge-primary">Head of Department</span>
                                        @elseif ($user->role === 5)
                                        <span class="badge badge-success">Teacher</span>
                                        @else
                                        <span class="badge badge-secondary">User type not defined</span>
                                        @endif
                                    </option>
                                    <option value="5">Teacher</option>
                                    <option value="4">Head of Department</option>
                                    <option value="3">Head of Primary</option>
                                    <option value="2">Head of Secondary</option>
                                    <option value="1">Principal</option>
                                    <option value="0">Admin</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-block"> Submit Observation </button>
                            </div> <!-- form-group// -->
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
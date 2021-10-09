@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"
        style="position: absolute; top: 0; right: 0;">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="justify-content-center">
        <div class="card">
            <div class="card-header">
                <h4 class="float-left">
                    {{ __('Lessons') }}
                </h4>
                <div class="float-right">
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
                </div>
            </div>

            <div class="card-body">


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->role === 0)
                                <span class="badge badge-danger">Admin</span>
                                @else
                                <span class="badge badge-success">User</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">

                                    {{ __('Details') }}

                                </a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <br>
                            </td>
                        </tr>
                        @endforeach
                </table>
                <div class="container">
                    {{-- {{ $users->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
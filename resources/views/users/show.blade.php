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

                <table class="table">
                    <tr>
                        <th style="text-align: right">Name:</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th style="text-align: right">Email:</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th style="text-align: right">User Role:</th>
                        <td>
                            @if ($user->role === 0)
                            <span class="badge badge-danger">Admin</span>
                            @elseif ($user->role === 1)
                            <span class="badge badge-danger">Principal</span>
                            @elseif ($user->role === 2)
                            <span class="badge badge-danger">Head of Secondary</span>
                            @elseif ($user->role === 3)
                            <span class="badge badge-danger">Head of Primary</span>
                            @elseif ($user->role === 4)
                            <span class="badge badge-danger">Head of Department</span>
                            @elseif ($user->role === 5)
                            <span class="badge badge-danger">Teacher</span>
                            @else
                            <span class="badge badge-success">User type not defined</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: right">Date Added:</th>
                        <td>{{ Carbon\Carbon::parse($user->created_at) }}</td>
                    </tr>
                </table>

                <a href="{{ route('users.edit', $user->id) }}">Edit User</a>


                <table class="table table-hover">
                    
                <div class="container">
                    {{-- {{ $users->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
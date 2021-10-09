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
                    <a href="{{ route('lesson.create') }}" class="btn btn-primary">New Observation</a>
                </div>
            </div>

            <div class="card-body">


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Teacher</th>
                            <th scope="col">Class</th>
                            <th scope="col" class="text-center">Total Score</th>
                            <th scope="col" class="text-center">Percentage Score</th>
                            <th scope="col">Software</th>
                            <th scope="col">Observer</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ $i = 0 }} --}}
                        @foreach ($lessons as $lesson)
                        <tr>
                            <th scope="row"> {{ $numbering++ }} </th>
                            <td>{{ $lesson->name }}</td>
                            <td>Year {{ $lesson->class }}</td>
                            <td class="text-center">{{ $lesson->total }}/150</td>
                            <td class="text-center">{{  number_format($lesson->percentage,1) }}%</td>
                            {{-- Remember to add colours according to the score --}}
                            <td>{{ $lesson->verdict }}</td>
                            <td>{{ $lesson->sys_desc }}</td>

                            <td>
                                <a href="{{ route('lesson.observed', $lesson->id) }}" class="btn btn-warning btn-sm">

                                    {{ __('Details') }}

                                </a>
                                <a href="{{ route('lesson.edit', $lesson->id) }}"
                                    class="btn btn-success btn-sm">Edit</a>
                                <br>
                            </td>
                        </tr>
                        @endforeach
                </table>
                <div class="container">
                    {{ $lessons->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
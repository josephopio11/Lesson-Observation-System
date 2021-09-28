@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">
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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Teacher Name</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th>
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>
                                    <th scope="col">11</th>
                                    <th scope="col">12</th>
                                    <th scope="col">13</th>
                                    <th scope="col">14</th>
                                    <th scope="col">15</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lessons as $lesson)
                                    <tr>
                                        <th scope="row">{{ $lesson->id }}</th>
                                        <td>{{ $lesson->name }}</td>
                                        <td>Y {{ $lesson->class }}</td>
                                        <td>{{ $lesson->objcommnclearly }}</td>
                                        <td>{{ $lesson->inclusion }}</td>
                                        <td>{{ $lesson->reviewed }}</td>
                                        <td>{{ $lesson->thrknow }}</td>
                                        <td>{{ $lesson->subjmat }}</td>
                                        <td>{{ $lesson->knowrel }}</td>
                                        <td>{{ $lesson->ideaexp }}</td>
                                        <td>{{ $lesson->actandqn }}</td>
                                        <td>{{ $lesson->praise }}</td>
                                        <td>{{ $lesson->poorbehave }}</td>
                                        <td>{{ $lesson->fairness }}</td>
                                        <td>{{ $lesson->recmiscon }}</td>
                                        <td>{{ $lesson->studengaged }}</td>
                                        <td>{{ $lesson->timeutil }}</td>
                                        <td>{{ $lesson->goodprac }}</td>

                                        <td>{{ __('No total') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('lesson.show', $lesson->id) }}">

                                                {{ __('Details') }}

                                            </a>
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
    </div>
@endsection

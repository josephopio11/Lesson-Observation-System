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
                        <article class="card-body mx-auto" style="max-width: 600px">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('lesson.store') }}" method="POST">
                                @csrf
                                <fieldset class="form-group p-3" style="border: 1px solid black;">
                                    <legend>Key Info</legend>
                                    <div class="form-group input-group">
                                        <input name="name" class="form-control" placeholder="Teacher's Name" type="text"
                                            required>
                                    </div>

                                    <div class="form-group input-group">
                                        <select class="form-control" name="class" required>
                                            <option selected="" value="">Class</option>
                                            <option value="13">Year 13</option>
                                            <option value="12">Year 12</option>
                                            <option value="11">Year 11</option>
                                            <option value="10">Year 10</option>
                                            <option value="9">Year 9</option>
                                            <option value="8">Year 8</option>
                                            <option value="7">Year 7</option>
                                        </select>
                                    </div>
                                </fieldset>

                                <fieldset class="form-group p-3" style="border: 1px solid black;">
                                    <legend>Assessment Areas</legend>
                                    <div class="list-group">
                                        <div class="form-group list-group-item list-group-item-action">
                                            <label for="">1. Objectives were communicated clearly at the start of the lesson
                                            </label>
                                            <input name="objcommnclearly" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group list-group-item list-group-item-action list-group-item-primary">
                                            <label for="">2. The learning needs of all levels of students were incorporated
                                                in the teacher's planning</label>
                                            <input name="inclusion" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group list-group-item list-group-item-action list-group-item-secondary">
                                            <label for="">3. Lesson was reviewed at the end</label>
                                            <input name="reviewed" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group list-group-item list-group-item-action list-group-item-success">
                                            <label for="">4. Teacher had thorough knowledge of the subject content</label>
                                            <input name="thrknow" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group list-group-item list-group-item-action list-group-item-danger">
                                            <label for="">5. Subject material was appropriate for the lesson</label>
                                            <input name="subjmat" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group list-group-item list-group-item-action list-group-item-warning">
                                            <label for="">6. Knowledge was made relevant and interesting for the
                                                learners</label>
                                            <input name="knowrel" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-info">
                                            <label for="">7. The ideas and experiences of students were drawn upon</label>
                                            <input name="ideaexp" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-dark">
                                            <label for="">8. A variety of activities and questioning techniques were
                                                used</label>
                                            <input name="actandqn" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group list-group-item list-group-item-action list-group-item-success">
                                            <label for="">9. Students were praised regularly for their good effort and
                                                achievement</label>
                                            <input name="praise" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group list-group-item list-group-item-action list-group-item-warning">
                                            <label for="">10. Prompt action was taken to address poor behaviour</label>
                                            <input name="poorbehave" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group list-group-item list-group-item-action list-group-item-danger">
                                            <label for="">11. Students were treated fairly with equal emphasis on work for
                                                boys and girls of all abilities</label>
                                            <input name="fairness" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div class="form-group form-group list-group-item list-group-item-action">
                                            <label for="">12. Mistakes/misconceptions were recognised and used
                                                constructively to facilitate learning</label>
                                            <input name="recmiscon" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group form-group list-group-item list-group-item-action list-group-item-primary">
                                            <label for="">13. Students remained fully engaged throughout the lesson and
                                                their understanding was assessed by using the teacher's questions</label>
                                            <input name="studengaged" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group form-group list-group-item list-group-item-action list-group-item-secondary">
                                            <label for="">14. Time was well utilised and learning was maintained for the
                                                full time available</label>
                                            <input name="timeutil" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                        <div
                                            class="form-group form-group list-group-item list-group-item-action list-group-item-warning">
                                            <label for="">15. A good pace was maintained throughout the lesson</label>
                                            <input name="goodprac" type="range" class="form-control-range"
                                                id="formControlRange" min="0" max="10" value="old('name')">
                                        </div>
                                    </div>

                                </fieldset>

                                <fieldset class="form-group p-3" style="border: 1px solid black;">
                                    <legend>Assessment Areas</legend>
                                    <div class="form-group">
                                        <label for="">According to you, how was the lesson?</label>
                                        <div>
                                            <div class="float-left">Poor</div>
                                            <div class="float-right">Excellent</div>
                                        </div>
                                        <input name="descriptor" type="range" class="form-control-range"
                                            id="formControlRange" min="1" max="5" value="old('name')">
                                    </div>
                                    <div class="form-group">
                                        <label for="editor">Observer Comment</label>
                                        <textarea name="comment" class="form-control" id="editor" rows="5"></textarea>
                                    </div>

                                </fieldset>
                                
                                {{-- id 
name
class
objcommnclearly
inclusion
reviewed
thrknow
subjmat
knowrel
ideaexp
actandqn
praise
poorbehave
fairness
recmiscon
studengaged
timeutil
goodprac
descriptor
comment
user_id --}}



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
    </div>

    @include('layouts.editor')
@endsection

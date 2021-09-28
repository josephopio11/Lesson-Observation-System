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
                        {{-- This is where I should enter the text --}}
                        {{-- <form>
                            <div class="form-group">
                                <label for="formControlRange">Objectives were communicated clearly at the start of the
                                    lesson</label>
                                <input type="range" class="form-control-range" id="formControlRange" min="0" max="10"
                                    value="0">
                            </div>
                        </form> --}}



                        <article class="card-body mx-auto" style="max-width: 600px">

                            <form>
                                <fieldset class="form-group p-3" style="border: 1px solid black;">
                                    <legend>Key Info</legend>
                                    <div class="form-group input-group">
                                        <input name="" class="form-control" placeholder="Teacher's name" type="text">
                                    </div>

                                    <div class="form-group input-group">
                                        <select class="form-control" name="class">
                                            <option selected="">Class</option>
                                            <option value="13">Year 13</option>
                                            <option value="12">Year 12</option>
                                            <option value="11">Year 11</option>
                                            <option value="10">Year 10</option>
                                            <option value="9">Year 9</option>
                                            <option value="8">Year 8</option>
                                            <option value="7">Year 7</option>
                                            {{-- <option value="6">Year 6</option>
                                            <option value="5">Year 5</option>
                                            <option value="4">Year 4</option>
                                            <option value="3">Year 3</option>
                                            <option value="2">Year 2</option>
                                            <option value="1">Year 1</option> --}}
                                        </select>
                                    </div>
                                </fieldset>


                                <fieldset class="form-group p-3" style="border: 1px solid black;">
                                    <legend>Assessment Areas</legend>
                                    <div class="list-group">

                                        <div class="form-group list-group-item list-group-item-action">
                                            <label for="">Objectives were communicated clearly at the start of the lesson </label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-primary">
                                            <label for="">2. The learning needs of all levels of students were incorporated
                                                in the teacher's planning</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-secondary">
                                            <label for="">3. Lesson was reviewed at the end</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-success">
                                            <label for="">4. Teacher had thorough knowledge of the subject content</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-danger">
                                            <label for="">5. Subject material was appropriate for the lesson</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-warning">
                                            <label for="">6. Knowledge was made relevant and interesting for the
                                                learners</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-info">
                                            <label for="">7. The ideas and experiences of students were drawn upon</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-dark">
                                            <label for="">8. A variety of activities and questioning techniques were
                                                used</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group list-group-item list-group-item-action list-group-item-success">
                                            <label for="">9. Students were praised regularly for their good effort and
                                                achievement</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="">10. Prompt action was taken to address poor behaviour</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="">11. Students were treated fairly with equal emphasis on work for
                                                boys and girls of all abilities</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="">7. The ideas and experiences of students were drawn upon</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="">7. The ideas and experiences of students were drawn upon</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="">7. The ideas and experiences of students were drawn upon</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="">7. The ideas and experiences of students were drawn upon</label>
                                            <input type="range" class="form-control-range" id="formControlRange" min="0"
                                                max="10" value="0">
                                        </div>
                                    </div>

                                </fieldset>


                                <div class="form-group input-group">
                                    <select class="form-control">
                                        <option selected=""> Select job type</option>
                                        <option>Designer</option>
                                        <option>Manager</option>
                                        <option>Accaunting</option>
                                    </select>
                                </div> <!-- form-group end.// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input class="form-control" placeholder="Create password" type="password">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input class="form-control" placeholder="Repeat password" type="password">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                                </div> <!-- form-group// -->
                                <p class="text-center">Have an account? <a href="">Log In</a> </p>
                            </form>
                        </article>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@extends('layouts.report')

@section('content')
    <div class="">
        <div class="">
                        <div class="    ">
        <div id="">
            <div class="invoice overflow-auto">
                <div style="min-width: 600px">
                    {{-- <div> --}}
                    <header>
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('logo.png') }}" width="300px" alt="">
                            </div>
                            <div class="col company-details">
                                <div>Avenue du Large, Kinindo</div>
                                <div>P. O. Box 2073, Bujumbura, Burundi</div>
                                <div>+257 22 28 02 88/+257 71 43 03 91</div>
                                <div>info@cubahirointernational.com</div>
                            </div>
                        </div>
                    </header>
                    <main>
                        <div class="row contacts">
                            <table>
                                <tr>
                                    <td>
                                        {{-- <div class="col invoice-to float-left"> --}}
                                            <div class="text-gray-light">TEACHER'S NAME:</div>
                                            <h2 class="to">{{ $lesson->name }}</h2>
                                            <div class="address">Class Observed: <strong>Year
                                                    {{ $lesson->class }}</strong>
                                            </div>
                                            <div class="email">
                                                Observed by: <strong>{{ $lesson->user->name }}</strong>
                                            </div>
                                        {{-- </div> --}}
                                    </td>
                                    <td>
                                        {{-- <div class="col invoice-details float-right"> --}}
                                            <h1 class="invoice-id">Lesson Observation</h1>
                                            <div class="date">Date of Observation: <strong>
                                                    {{ Carbon\Carbon::parse($lesson->created_at)->setTimezone('Africa/Bujumbura') }}</strong>
                                            </div>
                                            <div class="date">Printing Date:
                                                <strong>{{ Carbon\Carbon::now('Africa/Bujumbura') }}</strong>
                                            </div>
                                        {{-- </div> --}}

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-left">ASSESSMENT AREA</th>
                                    <th class="text-right">SCORE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="no">01</td>
                                    <td class="text-left">
                                        <h3>
                                            Objectives were communicated clearly at the start of the lesson
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->objcommnclearly }}</td>
                                </tr>
                                <tr>
                                    <td class="no">02</td>
                                    <td class="text-left">
                                        <h3>
                                            The learning needs of all levels of students were incorporated in the teacher's
                                            planning
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->inclusion }}</td>
                                </tr>
                                <tr>
                                    <td class="no">03</td>
                                    <td class="text-left">
                                        <h3>
                                            Lesson was reviewed at the end
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->reviewed }}</td>
                                </tr>
                                <tr>
                                    <td class="no">04</td>
                                    <td class="text-left">
                                        <h3>
                                            Teacher had thorough knowledge of the subject content
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->thrknow }}</td>
                                </tr>
                                <tr>
                                    <td class="no">05</td>
                                    <td class="text-left">
                                        <h3>
                                            Subject material was appropriate for the lesson
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->subjmat }}</td>
                                </tr>
                                <tr>
                                    <td class="no">06</td>
                                    <td class="text-left">
                                        <h3>
                                            Knowledge was made relevant and interesting for the learners
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->knowrel }}</td>
                                </tr>
                                <tr>
                                    <td class="no">07</td>
                                    <td class="text-left">
                                        <h3>
                                            The ideas and experiences of students were drawn upon
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->ideaexp }}</td>
                                </tr>
                                <tr>
                                    <td class="no">08</td>
                                    <td class="text-left">
                                        <h3>
                                            A variety of activities and questioning techniques were used
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->actandqn }}</td>
                                </tr>
                                <tr>
                                    <td class="no">09</td>
                                    <td class="text-left">
                                        <h3>
                                            Students were praised regularly for their good effort and achievement
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->praise }}</td>
                                </tr>
                                <tr>
                                    <td class="no">10</td>
                                    <td class="text-left">
                                        <h3>
                                            Prompt action was taken to address poor behaviour
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->poorbehave }}</td>
                                </tr>
                                <tr>
                                    <td class="no">11</td>
                                    <td class="text-left">
                                        <h3>
                                            Students were treated fairly with equal emphasis on work for boys and girls of
                                            all
                                            abilities
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->fairness }}</td>
                                </tr>
                                <tr>
                                    <td class="no">12</td>
                                    <td class="text-left">
                                        <h3>
                                            Mistakes/misconceptions were recognised and used constructively to facilitate
                                            learning
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->recmiscon }}</td>
                                </tr>
                                <tr>
                                    <td class="no">13</td>
                                    <td class="text-left">
                                        <h3>
                                            Students remained fully engaged throughout the lesson and their understanding
                                            was
                                            assessed by using the teacher's questions
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->studengaged }}</td>
                                </tr>
                                <tr>
                                    <td class="no">14</td>
                                    <td class="text-left">
                                        <h3>
                                            Time was well utilised and learning was maintained for the full time available
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->timeutil }}</td>
                                </tr>
                                <tr>
                                    <td class="no">15</td>
                                    <td class="text-left">
                                        <h3>
                                            A good pace was maintained throughout the lesson
                                        </h3>
                                    </td>
                                    <td class="unit">{{ $lesson->goodprac }}</td>
                                </tr>
                            </tbody>
                            <tfoot>

                                <tr>
                                    <td></td>
                                    <td>Total Score</td>
                                    <td>{{ $total }}/150</td>
                                </tr>
                                {{-- <tr>
                                    <td></td>
                                    <td>Total Score</td>
                                    <td>{{ __('100') }}/150</td>
                                </tr> --}}
                            </tfoot>
                        </table>

                        <table class="joseph">
                            <tr>
                                <th scope="col">
                                    <h4>Verdict:</h4>
                                </th>
                                <th scope="col">Supervisor: <strong>
                                        @if ($verdict <= 1.5)
                                            {{ __('Poor') }}
                                    @elseif ($verdict <= 2.5) {{ __('Unsatisfactory') }} @elseif ($verdict <=3.5)
                                        {{ __('Satisfactory') }} @elseif ($verdict <=4.5) {{ __('Good') }}
                                    @elseif ($verdict <=5.5) {{ __('Very Good') }} @else
                                        {{ __('Wrong Data Entered') }} @endif
                            </strong></th>
                        <th scope="col">Software: <strong>
                                @if ($verdict <= 1.5)
                                    {{ __('Poor') }}
                            @elseif ($verdict <= 2.5) {{ __('Unsatisfactory') }} @elseif ($verdict <=3.5)
                                {{ __('Satisfactory') }} @elseif ($verdict <=4.5) {{ __('Good') }}
                            @elseif ($verdict <=5.5) {{ __('Very Good') }} @else
                                {{ __('Wrong Data Entered') }} @endif
                    </strong>

                </th>
            </tr>

        </table>

        <div class="thanks">&nbsp;</div>
        <div class="notices">
            <div>
                <h2>Comments:</h2>
                <hr>
            </div>
            <div class="notice">{{ $lesson->comment }}</div>
        </div>
    </main>
    <footer>Created by <a href="https://www.josephopio.com" target="joseph">Joseph Opio</a>
    </footer>
</div>
<!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
<div></div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
    function auto_print() {
        window.print()
    }
    setTimeout(auto_print, 1000);
</script>



@endsection

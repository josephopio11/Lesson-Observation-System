<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use PDF;

class LessonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::paginate(50);

        return view('lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = auth()->user()->id;
        // dd($request);
        $validated = $request->validate([
            'name'            => 'required',
            'class'           => 'required|numeric|max:14',
            'objcommnclearly' => 'required|numeric|max:10',
            'inclusion'       => 'required|numeric|max:10',
            'reviewed'        => 'required|numeric|max:10',
            'thrknow'         => 'required|numeric|max:10',
            'subjmat'         => 'required|numeric|max:10',
            'knowrel'         => 'required|numeric|max:10',
            'ideaexp'         => 'required|numeric|max:10',
            'actandqn'        => 'required|numeric|max:10',
            'praise'          => 'required|numeric|max:10',
            'poorbehave'      => 'required|numeric|max:10',
            'fairness'        => 'required|numeric|max:10',
            'recmiscon'       => 'required|numeric|max:10',
            'studengaged'     => 'required|numeric|max:10',
            'timeutil'        => 'required|numeric|max:10',
            'goodprac'        => 'required|numeric|max:10',
            'descriptor'      => 'required|numeric|max:10',
            'comment'         => 'required',
            'user_id'         => 'required',
        ]);

        if ($validated) {
            Lesson::create($validated);

            return redirect()->route('dashboard')->with('message','The teacher observation record was made successfully');
        }else {
            return redirect()->back()->withErrors($validator)->with('message', 'For sure you have done nothing. Try again!');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('lessons.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['user_id'] = auth()->user()->id;

        $new_lesson = $request->validate([
            'name'            => 'required',
            'class'           => 'required|numeric|max:14',
            'objcommnclearly' => 'required|numeric|max:10',
            'inclusion'       => 'required|numeric|max:10',
            'reviewed'        => 'required|numeric|max:10',
            'thrknow'         => 'required|numeric|max:10',
            'subjmat'         => 'required|numeric|max:10',
            'knowrel'         => 'required|numeric|max:10',
            'ideaexp'         => 'required|numeric|max:10',
            'actandqn'        => 'required|numeric|max:10',
            'praise'          => 'required|numeric|max:10',
            'poorbehave'      => 'required|numeric|max:10',
            'fairness'        => 'required|numeric|max:10',
            'recmiscon'       => 'required|numeric|max:10',
            'studengaged'     => 'required|numeric|max:10',
            'timeutil'        => 'required|numeric|max:10',
            'goodprac'        => 'required|numeric|max:10',
            'descriptor'      => 'required|numeric|max:10',
            'comment'         => 'required',
            'user_id'         => 'required',
        ]);

        $lesson = Lesson::findOrFail($id);

        $lesson->update($new_lesson);
        
        return redirect()->route('lesson.index')->with('message', 'Lesson observation updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        return view('lessons.show', ['lesson' => $lesson]);
    }

    public function singleLesson($id)
    {
        $lesson = Lesson::findOrFail($id);

        $total = $lesson->objcommnclearly + $lesson->reviewed + $lesson->inclusion +
        $lesson->thrknow + $lesson->subjmat + $lesson->knowrel +
        $lesson->ideaexp + $lesson->actandqn + $lesson->praise +
        $lesson->poorbehave + $lesson->fairness + $lesson->recmiscon +
        $lesson->studengaged + $lesson->timeutil + $lesson->goodprac;

        $percentage = ($total / 150) * 100;

        $verdict  = $this->create_verdict($percentage);
        $sys_desc = $this->create_verdict(($lesson->descriptor) * 20);

        return view('lessons.report', compact('lesson', 'total', 'verdict', 'sys_desc'));
    }

    public function printLesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        $total  = $lesson->objcommnclearly + $lesson->reviewed + $lesson->inclusion +
        $lesson->thrknow + $lesson->subjmat + $lesson->knowrel +
        $lesson->ideaexp + $lesson->actandqn + $lesson->praise +
        $lesson->poorbehave + $lesson->fairness + $lesson->recmiscon +
        $lesson->studengaged + $lesson->timeutil + $lesson->goodprac;

        $percentage = ($total / 150) * 100;

        $verdict  = $this->create_verdict($percentage);
        $sys_desc = $this->create_verdict(($lesson->descriptor) * 20);

        return view('lessons.print', compact('lesson', 'total', 'verdict', 'sys_desc'));
    }

    public function downloadLesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        $total  = $lesson->objcommnclearly + $lesson->reviewed + $lesson->inclusion +
        $lesson->thrknow + $lesson->subjmat + $lesson->knowrel +
        $lesson->ideaexp + $lesson->actandqn + $lesson->praise +
        $lesson->poorbehave + $lesson->fairness + $lesson->recmiscon +
        $lesson->studengaged + $lesson->timeutil + $lesson->goodprac;

        $percentage = ($total / 150) * 100;

        $verdict  = $this->create_verdict($percentage);
        $sys_desc = $this->create_verdict(($lesson->descriptor) * 20);

        // return view('')

        $pdf = PDF::loadView('lessons.print', compact('lesson', 'total', 'verdict', 'sys_desc'));

        return $pdf->stream($lesson->name . '.pdf');

        //        return view('lessons.print', compact('lesson', 'total', 'verdict'));
    }

    public function create_verdict($item)
    {
        if ($item > 90) {
            return 'Excellent';
        } elseif ($item >= 80) {
            return 'Very Good';
        } elseif ($item > 60) {
            return 'Good';
        } elseif ($item > 40) {
            return 'Satisfactory';
        } elseif ($item > 20) {
            return 'Unsatisfactory';
        } elseif ($item > 0) {
            return 'Poor';
        } else {
            return 'Error 0190: Wrong data entered';
        }
    }
}

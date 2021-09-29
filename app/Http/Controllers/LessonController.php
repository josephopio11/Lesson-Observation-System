<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use PDF;
use Illuminate\Http\Request;

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
        // $total = Lesson::getTotal();

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
            'name' => 'required',
            'class' => 'required|numeric|max:14',
            'objcommnclearly' => 'required|numeric|max:10',
            'inclusion' => 'required|numeric|max:10',
            'reviewed' => 'required|numeric|max:10',
            'thrknow' => 'required|numeric|max:10',
            'subjmat' => 'required|numeric|max:10',
            'knowrel' => 'required|numeric|max:10',
            'ideaexp' => 'required|numeric|max:10',
            'actandqn' => 'required|numeric|max:10',
            'praise' => 'required|numeric|max:10',
            'poorbehave' => 'required|numeric|max:10',
            'fairness' => 'required|numeric|max:10',
            'recmiscon' => 'required|numeric|max:10',
            'studengaged' => 'required|numeric|max:10',
            'timeutil' => 'required|numeric|max:10',
            'goodprac' => 'required|numeric|max:10',
            'descriptor' => 'required|numeric|max:10',
            'comment' => 'required',
            'user_id' => 'required'
        ]);

        // dd($validated);

        // Lesson::create([
        //     'name' => $validated['name']
        // ]);

        // $user_id = Auth::user()->id;

        Lesson::create($validated);

        return redirect()->route('dashboard');
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
        $total =    $lesson->objcommnclearly + $lesson->reviewed + $lesson->inclusion +
            $lesson->thrknow + $lesson->subjmat + $lesson->knowrel +
            $lesson->ideaexp + $lesson->actandqn + $lesson->praise +
            $lesson->poorbehave + $lesson->fairness + $lesson->recmiscon +
            $lesson->studengaged + $lesson->timeutil + $lesson->goodprac;
        $verdict = $total / 30;

        return view('lessons.report', compact('lesson', 'total', 'verdict'));
    }

    public function printLesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        $total =    $lesson->objcommnclearly + $lesson->reviewed + $lesson->inclusion +
            $lesson->thrknow + $lesson->subjmat + $lesson->knowrel +
            $lesson->ideaexp + $lesson->actandqn + $lesson->praise +
            $lesson->poorbehave + $lesson->fairness + $lesson->recmiscon +
            $lesson->studengaged + $lesson->timeutil + $lesson->goodprac;
        $verdict = $total / 30;

        return view('lessons.print', compact('lesson', 'total', 'verdict'));
    }

    public function downloadLesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        $total =    $lesson->objcommnclearly + $lesson->reviewed + $lesson->inclusion +
            $lesson->thrknow + $lesson->subjmat + $lesson->knowrel +
            $lesson->ideaexp + $lesson->actandqn + $lesson->praise +
            $lesson->poorbehave + $lesson->fairness + $lesson->recmiscon +
            $lesson->studengaged + $lesson->timeutil + $lesson->goodprac;
        $verdict = $total / 30;

        // return view('')

        $pdf = PDF::loadView('lessons.print', compact('lesson', 'total', 'verdict'));

        return $pdf->stream($lesson->name . '.pdf');

        //        return view('lessons.print', compact('lesson', 'total', 'verdict'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class LessonController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::paginate(20);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        // $lesson = Lesson::findOrFail($lesson);
        // $total =    $lesson->objcommnclearly + $lesson->reviewed + $lesson->inclusion +
        //             $lesson->thrknow + $lesson->subjmat + $lesson->knowrel +
        //             $lesson->ideaexp + $lesson->actandqn + $lesson->praise +
        //             $lesson->poorbehave + $lesson->fairness + $lesson->recmiscon +
        //             $lesson->studengaged + $lesson->timeutil + $lesson->goodprac;
        // $verdict = $total/30;

        // dd($lesson);

        return view('lessons.show', ['lesson'=>$lesson]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }

    public function singleLesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        $total =    $lesson->objcommnclearly + $lesson->reviewed + $lesson->inclusion +
                    $lesson->thrknow + $lesson->subjmat + $lesson->knowrel +
                    $lesson->ideaexp + $lesson->actandqn + $lesson->praise +
                    $lesson->poorbehave + $lesson->fairness + $lesson->recmiscon +
                    $lesson->studengaged + $lesson->timeutil + $lesson->goodprac;
        $verdict = $total/30;

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
        $verdict = $total/30;

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
        $verdict = $total/30;

        $pdf = PDF::loadView('lessons.print', compact('lesson', 'total', 'verdict'));

        return $pdf->download($lesson->name.'.pdf');

//        return view('lessons.print', compact('lesson', 'total', 'verdict'));
    }


}

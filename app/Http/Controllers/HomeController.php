<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // dd(Auth::user()->role);
        if (Auth::user()->role === 0) {
            # code...
            $lessons = Lesson::all();
        } else {
            $lessons = Lesson::where('user_id', Auth::user()->id)->get();
        }

        return view('home', compact('lessons'));
    }
}

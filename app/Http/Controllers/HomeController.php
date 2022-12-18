<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;

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
        return view('home');
    }

    public function store(Request $request) {
        # validation form
        $request->validate([
            'name' => 'required|min:3|alpha',
            'last_name' => 'required|min:3|alpha',
            'age' => 'required',
            'car' => 'required|alpha',
        ],
        [
            'name.min' => 'Name must have at least 3 letters',
            'last_name.min' => 'Last name must have at least 3 letters',
            ]
    );
        # get values and save to database
        $question_form = new Questionnaire(); 
        $question_form->name = request('name');
        $question_form->last_name = request('last_name');
        $question_form->age = request('age');
        $question_form->car = request('car');
        $question_form->save();
        return redirect('/info');
    }
}

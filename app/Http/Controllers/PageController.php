<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function adminQuestions(){
        $questions = Question::with('options')->latest()->get();
        return view('backend.pages.questions', compact('questions'));
    }
    public function aptitudeTest(){
        return view('frontend.aptitude-test');
    }
    public function takenTests(){
        $tests  = Test::with('user', 'answers')->get();
        return view('backend.pages.taken-tests', compact('tests'));
    }
}

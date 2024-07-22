<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Option;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function startTest()
    {
        $user = Auth::user();

        if ($user->test && $user->test->end_time) {
            return redirect()->route('test.result');
        }

        if (!$user->test) {
            $test = $user->test()->create(['start_time' => now()]);
        } else {
            $test = $user->test;
        }



        $questions = Question::with('options')->inRandomOrder()->get();

        return view('frontend.aptitude-test', compact('test', 'questions'));
    }

    public function submitTest(Request $request)
    {
        $user = Auth::user();
        $test = $user->test;

        if ($test->end_time) {
            return redirect()->route('test.result');
        }

        foreach ($request->answers as $question_id => $answer) {
            $test->answers()->create([
                'question_id' => $question_id,
                'answer' => is_array($answer) ? json_encode($answer) : $answer,
            ]);
        }

        $test->update(['end_time' => now()]);

        return redirect()->route('test.result');
    }

    public function result()
    {
        $user = Auth::user();
        $test = $user->test;

        if (!$test || !$test->end_time) {
            return redirect()->route('test.start');
        };

        return view('frontend.test-completed');
    }

    public function showTest(Test $test)
    {
        $questions = Question::with('options')->get();

        // Map each question to include the answer
        $questionsWithAnswers = $questions->map(function ($question) use ($test) {
            $answer = $test->answers->firstWhere('question_id', $question->id);
            $question->answer = $answer ? $answer->answer : null;
            return $question;
        });

        return view('frontend.show', compact('test', 'questionsWithAnswers'));

        // $questions = Question::with('options')->get();

        // // Fetch answers related to the test
        // $answers = $test->answers->pluck('answer', 'question_id');

        // // Pass the test, questions, and answers to the view
        // return view('frontend.show', compact('test', 'questions', 'answers'));
        // $questions = Question::with('options')->get();

        // $questionsWithAnswers = $questions->map(function ($question) use ($test) {
        //     $answer = $test->answers->firstWhere('question_id', $question->id);
        //     $question->answer = $answer ? $answer->answer : null;
        //     return $question;
        // });

        // return view('frontend.show', compact('questionsWithAnswers'));
        // $test->load('answers.question.options');
        // return view('frontend.show', compact('test'));
    }

}

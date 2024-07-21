<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function addQuestion(Request $request){
        // return $request->options;
        $request->validate([
            'question' => 'required|string',
        'question_type' => 'required|string|in:multiple_choice,multiple_selection,text',
        'options' => 'required_if:question_type,multiple_choice,multiple_selection|array',
        'options.*' => 'nullable|string',
        ]);

        if (in_array($request->input('question_type'), ['multiple_choice', 'multiple_selection'])) {
            $request->validate([
                'options' => 'array|min:2',
            ]);
        }

        $question = Question::create([
            'question' => $request->input('question'),
            'type' => $request->input('question_type'),
        ]);

        if (in_array($request->input('question_type'), ['multi-choice', 'multi-selection']) && $request->has('options')) {
            foreach ($request->input('options') as $optionText) {
                if (!empty($optionText)) {
                    Option::create([
                        'question_id' => $question->id,
                        'option_text' => $optionText,
                    ]);
                }
            }
        }

        return redirect()->route('admin.questions')->with('success', 'Question created successfully.');
    }
}

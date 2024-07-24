<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class QuestionController extends Controller
{
    //
    public function addQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'question_type' => 'required|string|in:multiple_choice,multiple_selection,text',
            'options' => 'required_if:question_type,multiple_choice,multiple_selection|array',
            'options.*' => 'nullable|string',
        ]);

        if (in_array($request->input('question_type'), ['multiple_choice', 'multiple_selection'])) {
            $request->validate([
                'options' => 'array|min:2',
            ], [
                'options.min' => 'There must be at least 2 options',
                'options.array' => 'Invalid input'
            ]);
        }

        $question = Question::create([
            'question' => $request->input('question'),
            'type' => $request->input('question_type'),
        ]);

        if (in_array($request->input('question_type'), ['multiple_choice', 'multiple_selection']) && $request->has('options')) {
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

    public function data()
    {
        $questions = Question::select(['id', 'question', 'type']);
        return DataTables::of($questions)
            ->addColumn('action', function ($question) {
                return '<a href="javascript:void(0);" data-id="' . $question->id . '" class="btn btn-sm btn-primary btn-edit">Edit</a>';
            })
            ->make(true);
    }

    public function edit($id)
    {
        $question = Question::with('options')->findOrFail($id);
        return response()->json($question);
    }

    public function update(Request $request)
{
    $request->validate([
        'id' => 'required|exists:questions,id',
        'question' => 'required|string',
        'question_type' => 'required|string|in:multiple_choice,multiple_selection,text',
        'options' => 'nullable|array',
        'options.*' => 'nullable|string',
    ]);

    $question = Question::findOrFail($request->input('id'));

    // Update the question text and type
    $question->update([
        'question' => $request->input('question'),
        'type' => $request->input('question_type'),
    ]);

    // Delete existing options if question type is 'text'
    if ($question->type === 'text') {
        $question->options()?->delete();
    }

    // If question type is 'multiple_choice' or 'multiple_selection', handle options
    if (in_array($question->type, ['multiple_choice', 'multiple_selection'])) {
        // Delete existing options to replace with new ones
        $question->options()?->delete();

        // Add new options if provided
        if ($request->has('options')) {
            foreach ($request->input('options') as $optionText) {
                if (!empty($optionText)) {
                    Option::create([
                        'question_id' => $question->id,
                        'option_text' => $optionText,
                    ]);
                }
            }
        }
    }

    return redirect()->route('admin.questions')->with('success', 'Question updated successfully.');
}

}

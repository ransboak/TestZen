<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $question1 = Question::create([
            'question' => 'Have you traveled to any one of the destinations below in the last 21 days?',
            'type' => 'multiple_selection'
        ]);

        Option::create(['question_id' => $question1->id, 'option_text' => 'China']);
        Option::create(['question_id' => $question1->id, 'option_text' => 'South Korea']);
        Option::create(['question_id' => $question1->id, 'option_text' => 'Iran']);
        Option::create(['question_id' => $question1->id, 'option_text' => 'Europe']);
        Option::create(['question_id' => $question1->id, 'option_text' => 'US States']);
        Option::create(['question_id' => $question1->id, 'option_text' => 'None of the above']);


        $question2 = Question::create([
            'question' => 'Have you recently been in contact with a person with Coronavirus?',
            'type' => 'multiple_choice'
        ]);

        Option::create(['question_id' => $question2->id, 'option_text' => 'Yes']);
        Option::create(['question_id' => $question2->id, 'option_text' => 'No']);

        $question3 = Question::create([
            'question' => 'Please describe your current health condition in detail.',
            'type' => 'text'
        ]);

        $question4 = Question::create([
            'question' => 'What was the percentage increase in snowfall in Whistler from November to December?',
            'type' => 'multiple_choice'
        ]);

        Option::create(['question_id' => $question4->id, 'option_text' => '30%']);
        Option::create(['question_id' => $question4->id, 'option_text' => '40%']);
        Option::create(['question_id' => $question4->id, 'option_text' => '50%']);
        Option::create(['question_id' => $question4->id, 'option_text' => '60%']);
    }
}

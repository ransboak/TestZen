<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Results</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 20px auto;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 15px;
        }
        .logo-container img {
            max-width: 150px;
        }
        h1 {
            font-size: 24px;
            color: #4a90e2;
            margin-bottom: 20px;
        }
        .main_question {
            font-size: 18px;
            margin: 15px 0;
            color: #333;
        }
        .container_radio, .container_check {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 10px;
            cursor: pointer;
            font-size: 14px;
            user-select: none;
        }
        .container_radio input, .container_check input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
            border-radius: 50%;
        }
        .container_radio .checkmark {
            border-radius: 50%;
        }
        .container_check .checkmark {
            border-radius: 5px;
        }
        .container_radio input:checked ~ .checkmark, .container_check input:checked ~ .checkmark {
            background-color: #4a90e2;
        }
        .container_radio .checkmark:after, .container_check .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }
        .container_radio input:checked ~ .checkmark:after, .container_check input:checked ~ .checkmark:after {
            display: block;
        }
        .container_radio .checkmark:after {
            left: 7px;
            top: 4px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        .container_check .checkmark:after {
            left: 8px;
            top: 4px;
            width: 4px;
            height: 8px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        .form-control {
            border: 1px solid #4a90e2;
            border-radius: 4px;
            font-size: 14px;
        }
        .unanswered {
            color: #e74c3c;
            font-weight: bold;
            font-size: 14px;
        }
        .step {
            display: none;
        }
        .step.active {
            display: block;
        }
        .wizard-buttons {
            margin-top: 15px;
            text-align: center;
        }
        .wizard-buttons button {
            font-size: 14px;
            padding: 8px 16px;
            display: inline-block;
            margin: 0 5px;
        }
        .wizard-buttons .btn {
            min-width: 100px;
        }
        .test-info {
            text-align: center;
            margin-bottom: 15px;
            font-size: 16px;
            color: #777;
        }
        .test-info strong {
            display: block;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="logo-container">
            <img src="{{ asset('TZ-lg.png') }}" alt="Logo" height="80">
        </div>
        <h1 class="text-center mb-4">Test Results</h1>
        <div class="test-info">
            <strong>{{ $test->user->name }}</strong>
            <span>Date Taken: {{ $test->created_at->format('F j, Y, g:i a') }}</span>
        </div>
        <div id="wrapped">
            <div id="middle-wizard">
                @php
                    $step = 1;
                    $totalQuestions = count($questionsWithAnswers);
                    $questionsPerStep = 3;
                    $steps = ceil($totalQuestions / $questionsPerStep);
                @endphp

                @foreach ($questionsWithAnswers as $index => $question)
                    @if ($index % $questionsPerStep == 0)
                        <div class="step @if($step == 1) active @endif" data-step="{{ $step }}">
                    @endif

                    <div class="question">
                        <h3 class="main_question">{{ $index + 1 }}. {{ $question->question }}</h3>
                        <div class="row">
                            @if($question->type == 'multiple_choice' || $question->type == 'multiple_selection')
                                <div class="col-lg-12">
                                    @foreach ($question->options as $option)
                                        <div class="form-group">
                                            <label class="container_{{ $question->type == 'multiple_choice' ? 'radio' : 'check' }} version_2">
                                                {{ $option->option_text }}
                                                @if($question->answer && ((is_array(json_decode($question->answer, true)) && in_array($option->option_text, json_decode($question->answer, true))) || $option->option_text == $question->answer))
                                                    <input type="{{ $question->type == 'multiple_choice' ? 'radio' : 'checkbox' }}" checked disabled>
                                                @else
                                                    <input type="{{ $question->type == 'multiple_choice' ? 'radio' : 'checkbox' }}" disabled>
                                                @endif
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @elseif($question->type == 'text')
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $question->answer ?? '' }}" placeholder="Unanswered" disabled>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @if(!$question->answer)
                            <p class="unanswered">This question was not answered.</p>
                        @endif
                    </div>

                    @if (($index + 1) % $questionsPerStep == 0 || $index + 1 == $totalQuestions)
                        </div>
                        @php $step++; @endphp
                    @endif
                @endforeach
            </div>
            <div class="wizard-buttons">
                <button type="button" class="btn btn-secondary" id="prevBtn" onclick="changeStep(-1)">Previous</button>
                <button type="button" class="btn btn-primary" id="nextBtn" onclick="changeStep(1)">Next</button>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = {{ $steps }};

        function showStep(step) {
            const steps = document.querySelectorAll('.step');
            steps.forEach((stepElem, index) => {
                stepElem.classList.remove('active');
                if (index + 1 === step) {
                    stepElem.classList.add('active');
                }
            });

            document.getElementById('prevBtn').style.display = step === 1 ? 'none' : 'inline';
            document.getElementById('nextBtn').style.display = step === totalSteps ? 'none' : 'inline';
            document.getElementById('nextBtn').textContent = step === totalSteps ? 'Finish' : 'Next';
        }

        function changeStep(step) {
            currentStep += step;
            if (currentStep < 1) currentStep = 1;
            if (currentStep > totalSteps) currentStep = totalSteps;
            showStep(currentStep);
        }

        document.addEventListener('DOMContentLoaded', () => {
            showStep(currentStep);
        });
    </script>
</body>
</html>

@extends('backend.layouts.main')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12" >
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
                <h4 class="page-title">Questions</h4>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" >
                    <button type="button" class="close" data-dismiss="alert"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{session('success')}}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" >
                    <button type="button" class="close" data-dismiss="alert"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{session('error')}}
                </div>
                @endif

                @if ($errors->any())
                    <ul style="list-style: none">
                        @foreach ($errors->all() as $error)
                        <li>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" >
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{$error}}

                            </div>
                        </li>
                        @endforeach
                    </ul>
                @endif

            </div>

        </div>
    </div>
    <!-- end page title -->



    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <button type="button" class="btn btn-info waves-effect waves-light my-3" data-toggle="modal" data-target=".bs-example-modal-lg">Add Question</button>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Question</th>
                            <th>Type</th>
                            <th>Action</th>
                            {{-- <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th> --}}
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($questions as $question)
                        <tr>

                            <td>{{$question->id}}</td>
                            <td>{{$question->question}}</td>
                            <td>{{$question->type}}</td>


                            <td>61</td>
                            {{-- <td>2011/04/25</td>
                            <td>$320,800</td> --}}
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

     <!--  Modal content for the above example -->
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Add Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    {{-- <form action="{{ route('question.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="questionType">Question Type</label>
                            <select class="form-control" id="questionType" name="question_type">
                                <option value="text">Text</option>
                                <option value="multi-choice">Multi Choice</option>
                                <option value="multi-selection">Multi Selection</option>
                                <!-- Add more types as needed -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Question</label>
                            <div>
                                <textarea name="question" required class="form-control" rows="3"></textarea>
                            </div>
                        </div>



                        <div id="optionsContainer" style="display: none;">
                            <div class="form-group option-field">
                                <label>Option</label>
                                <div class="input-group">
                                    <input type="text" name="options[]" class="form-control" required>
                                    <button type="button" class="btn btn-danger delete-option">Delete</button>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="addOptionButton" class="btn btn-secondary">Add Option</button>

                    </form> --}}
                    <form action="{{ route('question.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="questionType">Question Type</label>
                            <select class="form-control" id="questionType" name="question_type">
                                <option value="text">Text</option>
                                <option value="multiple_choice">Multi Choice</option>
                                <option value="multiple_selection">Multi Selection</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Question</label>
                            <div>
                                <textarea name="question" required class="form-control" rows="3"></textarea>
                            </div>
                        </div>


                        <div id="optionsContainer" style="display: none;">
                            <div class="form-group option-field">
                                <label>Option</label>
                                <div class="input-group">
                                    <input type="text" name="options[]" class="form-control" required>
                                    <button type="button" class="btn btn-danger delete-option">Delete</button>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="addOptionButton" class="btn btn-secondary">Add Option</button>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>
                    </div>
                    </form>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end row -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const questionTypeSelect = document.getElementById('questionType');
            const optionsContainer = document.getElementById('optionsContainer');
            const addOptionButton = document.getElementById('addOptionButton');

            // Function to show or hide options based on question type
            function updateOptions() {
                const selectedType = questionTypeSelect.value;
                if (selectedType === 'multi-choice' || selectedType === 'multi-selection') {
                    optionsContainer.style.display = 'block';
                } else {
                    optionsContainer.style.display = 'none';
                }
            }

            // Function to add a new option field
            function addOptionField() {
                const optionField = document.createElement('div');
                optionField.className = 'form-group option-field';
                optionField.innerHTML = `
                    <label>Option</label>
                    <div class="input-group">
                        <input type="text" name="options[]" class="form-control" required>
                        <button type="button" class="btn btn-danger delete-option">Delete</button>
                    </div>
                `;
                optionsContainer.appendChild(optionField);

                // Add event listener for delete button
                optionField.querySelector('.delete-option').addEventListener('click', function() {
                    optionsContainer.removeChild(optionField);
                });
            }

            // Event listeners
            questionTypeSelect.addEventListener('change', updateOptions);
            addOptionButton.addEventListener('click', addOptionField);

            // Initialize options visibility
            updateOptions();
        });
    </script>
@endsection

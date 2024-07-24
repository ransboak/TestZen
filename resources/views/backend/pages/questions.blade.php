@extends('backend.layouts.main')

@section('content')
<style>
    #preloader {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.8); /* White with transparency */
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}

.spinner {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.loader {
    border: 8px solid #f3f3f3; /* Light grey */
    border-top: 8px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>
<!-- Preloader -->
<div id="preloader" style="display: none;">
    <div class="spinner">
        <div class="loader"></div>
        <!-- Optional text -->
        <span>Loading...</span>
    </div>
</div>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Questions</a></li>
                        {{-- <li class="breadcrumb-item active">Data Tables</li> --}}
                    </ol>
                </div>
                <h4 class="page-title">Questions</h4>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <ul style="list-style: none">
                        @foreach ($errors->all() as $error)
                            <li>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $error }}
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
                <button type="button" class="btn btn-info waves-effect waves-light my-3" data-toggle="modal"
                    data-target=".bs-example-modal-lg">Add Question</button>

                <!-- DataTable -->
                <table id="questions-table" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Question</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be populated by DataTables -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Add Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('question.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="questionType">Question Type</label>
                            <select class="form-control" id="questionType" name="question_type">
                                <option value="text" {{ old('question_type') == 'text' ? 'selected' : '' }}>Text</option>
                                <option value="multiple_choice"
                                    {{ old('question_type') == 'multiple_choice' ? 'selected' : '' }}>Multi Choice
                                </option>
                                <option value="multiple_selection"
                                    {{ old('question_type') == 'multiple_selection' ? 'selected' : '' }}>Multi Selection
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Question</label>
                            <div>
                                <textarea name="question" required class="form-control" rows="3">{{ old('question') }}</textarea>
                            </div>
                        </div>

                        <div id="optionsContainer" style="display: none;">
                            <div class="form-group option-field">
                                <label>Option</label>
                                <div class="input-group">
                                    <input type="text" name="options[]" class="form-control">
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
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
        <!-- /.modal -->

        <!-- Edit Modal -->
<div class="modal fade" id="editQuestionModal" tabindex="-1" role="dialog" aria-labelledby="editQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editQuestionModalLabel">Edit Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="editQuestionForm" action="{{ route('question.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editQuestionId">

                    <div class="form-group">
                        <label for="editQuestionType">Question Type</label>
                        <select class="form-control" id="editQuestionType" name="question_type">
                            <option value="text">Text</option>
                            <option value="multiple_choice">Multi Choice</option>
                            <option value="multiple_selection">Multi Selection</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Question</label>
                        <div>
                            <textarea name="question" id="editQuestionText" required class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div id="editOptionsContainer">
                        <!-- Options will be populated here -->
                    </div>

                    <button type="button" id="editAddOptionButton" class="btn btn-secondary">Add Option</button>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

    
    <!-- end row -->

    <!-- DataTables Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    {{-- <script>
        $(document).ready(function() {
            $('#questions-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('questions.data') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'question',
                        name: 'question'
                    },
                    {
                        data: 'type',
                        name: 'type'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const questionTypeSelect = document.getElementById('questionType');
            const optionsContainer = document.getElementById('optionsContainer');
            const addOptionButton = document.getElementById('addOptionButton');

            // Function to show or hide options based on question type
            function updateOptions() {
                const selectedType = questionTypeSelect.value;
                if (selectedType === 'multiple_choice' || selectedType === 'multiple_selection') {
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
    </script> --}}

{{-- <script>
    $(document).ready(function() {
        $('#questions-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('questions.data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'question', name: 'question' },
                { data: 'type', name: 'type' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        $(document).on('click', '.btn-edit', function() {
            const questionId = $(this).data('id');
            $.get('{{ route('questions.edit', '') }}/' + questionId, function(data) {
                $('#editQuestionId').val(data.id);
                $('#editQuestionType').val(data.type);
                $('#editQuestionText').val(data.question);

                $('#editOptionsContainer').empty();
                data.options.forEach(option => {
                    $('#editOptionsContainer').append(`
                        <div class="form-group option-field">
                            <label>Option</label>
                            <div class="input-group">
                                <input type="text" name="options[]" class="form-control" value="${option.option_text}" required>
                                <button type="button" class="btn btn-danger delete-option">Delete</button>
                            </div>
                        </div>
                    `);
                });

                $('#editQuestionModal').modal('show');
            });
        });

        $('#editAddOptionButton').click(function() {
            const optionField = `
                <div class="form-group option-field">
                    <label>Option</label>
                    <div class="input-group">
                        <input type="text" name="options[]" class="form-control" required>
                        <button type="button" class="btn btn-danger delete-option">Delete</button>
                    </div>
                </div>
            `;
            $('#editOptionsContainer').append(optionField);
        });


        $(document).on('click', '.delete-option', function() {
            $(this).closest('.option-field').remove();
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
            const questionTypeSelect = document.getElementById('questionType');
            const optionsContainer = document.getElementById('optionsContainer');
            const addOptionButton = document.getElementById('addOptionButton');

            function updateOptions() {
                const selectedType = questionTypeSelect.value;
                if (selectedType === 'multiple_choice' || selectedType === 'multiple_selection') {
                    optionsContainer.style.display = 'block';
                } else {
                    optionsContainer.style.display = 'none';
                }
            }

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

                optionField.querySelector('.delete-option').addEventListener('click', function() {
                    optionsContainer.removeChild(optionField);
                });
            }

            questionTypeSelect.addEventListener('change', updateOptions);
            addOptionButton.addEventListener('click', addOptionField);

            updateOptions();
        });
</script> --}}
<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#questions-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('questions.data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'question', name: 'question' },
                { data: 'type', name: 'type' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    
        // Function to show/hide preloader
        function togglePreloader(show) {
            if (show) {
                $('#preloader').show();
            } else {
                $('#preloader').hide();
            }
        }
    
        // Store options temporarily
        let storedOptions = [];
    
        // Edit button click event
        $(document).on('click', '.btn-edit', function() {
            const questionId = $(this).data('id');
    
            // Show preloader
            togglePreloader(true);
    
            // Fetch the question data
            $.get('{{ route('questions.edit', '') }}/' + questionId, function(data) {
                $('#editQuestionId').val(data.id);
                $('#editQuestionType').val(data.type);
                $('#editQuestionText').val(data.question);
    
                $('#editOptionsContainer').empty();
                storedOptions = []; // Reset stored options
                if (data.type === 'multiple_choice' || data.type === 'multiple_selection') {
                    data.options.forEach(option => {
                        $('#editOptionsContainer').append(`
                            <div class="form-group option-field">
                                <label>Option</label>
                                <div class="input-group">
                                    <input type="text" name="options[]" class="form-control" value="${option.option_text}" required>
                                    <button type="button" class="btn btn-danger delete-option">Delete</button>
                                </div>
                            </div>
                        `);
                        // Store options initially
                        storedOptions.push(option.option_text);
                    });
                }
    
                // Hide preloader and show modal
                togglePreloader(false);
                $('#editQuestionModal').modal('show');
            });
        });
    
        // Add option button in edit modal
        $('#editAddOptionButton').click(function() {
            const optionField = `
                <div class="form-group option-field">
                    <label>Option</label>
                    <div class="input-group">
                        <input type="text" name="options[]" class="form-control" required>
                        <button type="button" class="btn btn-danger delete-option">Delete</button>
                    </div>
                </div>
            `;
            $('#editOptionsContainer').append(optionField);
        });
    
        // Delete option button event
        $(document).on('click', '.delete-option', function() {
            $(this).closest('.option-field').remove();
        });
    
        // Show preloader when add or update form is submitted
        $('#editQuestionForm, form[action="{{ route('question.store') }}"]').on('submit', function(e) {
            // Show preloader
            togglePreloader(true);
        });
    
        // Option handling in add modal
        const questionTypeSelect = document.getElementById('questionType');
        const optionsContainer = document.getElementById('optionsContainer');
        const addOptionButton = document.getElementById('addOptionButton');
    
        // Function to show or hide options based on question type
        function updateOptions(container, typeSelect) {
            const selectedType = typeSelect.value;
            if (selectedType === 'multiple_choice' || selectedType === 'multiple_selection') {
                container.style.display = 'block';
                restoreOptions(container); // Restore stored options if any
            } else {
                container.style.display = 'none';
                storeOptions(container); // Store current options before clearing
                $(container).empty(); // Clear options if type is not choice/selection
            }
        }
    
        // Function to add a new option field in add modal
        function addOptionField(container) {
            const optionField = document.createElement('div');
            optionField.className = 'form-group option-field';
            optionField.innerHTML = `
                <label>Option</label>
                <div class="input-group">
                    <input type="text" name="options[]" class="form-control" required>
                    <button type="button" class="btn btn-danger delete-option">Delete</button>
                </div>
            `;
            container.appendChild(optionField);
    
            // Add event listener for delete button
            optionField.querySelector('.delete-option').addEventListener('click', function() {
                container.removeChild(optionField);
            });
        }
    
        // Store current options into the temporary array
        function storeOptions(container) {
            storedOptions = [];
            $(container).find('input[name="options[]"]').each(function() {
                storedOptions.push($(this).val());
            });
        }
    
        // Restore stored options back into the container
        function restoreOptions(container) {
            container.innerHTML = ''; // Clear any existing options
            storedOptions.forEach(optionText => {
                const optionField = document.createElement('div');
                optionField.className = 'form-group option-field';
                optionField.innerHTML = `
                    <label>Option</label>
                    <div class="input-group">
                        <input type="text" name="options[]" class="form-control" value="${optionText}" required>
                        <button type="button" class="btn btn-danger delete-option">Delete</button>
                    </div>
                `;
                container.appendChild(optionField);
                // Add delete event listener
                optionField.querySelector('.delete-option').addEventListener('click', function() {
                    container.removeChild(optionField);
                });
            });
        }
    
        // Event listeners for question type change and add option button click
        questionTypeSelect.addEventListener('change', function() {
            updateOptions(optionsContainer, questionTypeSelect);
        });
        addOptionButton.addEventListener('click', function() {
            addOptionField(optionsContainer);
        });
    
        // Initialize options visibility
        updateOptions(optionsContainer, questionTypeSelect);
    
        // Handle edit modal options display
        $('#editQuestionType').on('change', function() {
            updateOptions(document.getElementById('editOptionsContainer'), this);
        });
    
        // Hide preloader on AJAX complete to handle any request
        $(document).ajaxComplete(function() {
            togglePreloader(false);
        });
    
        // Hide preloader on AJAX error
        $(document).ajaxError(function() {
            togglePreloader(false);
        });
    });
    
</script>

@endsection

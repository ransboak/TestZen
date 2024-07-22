<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TestZen">
    <meta name="author" content="Ransboak">
    <title>TestZen</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('TestZen.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="images/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('frontend/assets/css/custom.css')}}" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="{{asset('frontend/assets/js/modernizr.js')}}')}}"></script>

    <style>
        #timer {
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
        }
        #timer.warning {
            color: red; /* Change color to red when time is running low */
        }
        #timer.blink {
            animation: blink 1s step-start infinite; /* Blink effect */
        }
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>

</head>

<body class="layout_2">

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
        <div class="container-fluid">
            <a href="index.html"><img src="{{asset('TZ-lgg.png')}}" alt=""  height="140" class="d-none d-md-inline"><img src="{{asset('TestZen-sm.png')}}" alt="" width="250" height="200" class="d-inline d-md-none"></a>
            <h1>Aptitude Test</h1>
            <!-- /top_elements -->
        </div>
        <!-- /container -->
    </header>
    <!-- /Header -->

	<div class="container-fluid">
    <div id="form_container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <!-- /top-wizard -->
                    {{-- Time remaining:
                    <div id="timer" style="font-size: 24px; font-weight: bold;"></div> --}}
                    <div id="timer" class="alert alert-primary"></div>

                    {{-- <form id="wrapped" method="post" action="{{ route('test.submit') }}">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                            @foreach($questions as $question)
                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>{{ $question->question }}</h3>
                                    <div class="row">
                                        @if($question->type == 'multiple_choice' || $question->type == 'multiple_selection')
                                            <div class="col-lg-12">
                                                @foreach($question->options as $option)
                                                    <div class="form-group">
                                                        @if($question->type == 'multiple_choice')
                                                            <label class="container_radio version_2">{{ $option->option_text }}
                                                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->option_text }}" class="required">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        @else
                                                            <label class="container_check version_2">{{ $option->option_text }}
                                                                <input type="checkbox" name="answers[{{ $question->id }}][]" value="{{ $option->option_text }}" class="required">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        @elseif($question->type == 'text')
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" name="answers[{{ $question->id }}]" class="form-control required">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step -->
                            @endforeach
                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Please fill with your personal data</h3>
                                <div class="form-group add_top_30">
                                    <label for="name">First and Last Name</label>
                                    <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control required">
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                        <label for="age">Age</label>
                                        <div class="form-group radio_input">
                                            <input type="text" name="age" id="age" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                        <div class="form-group radio_input">
                                            <label class="container_radio mr-3">Male
                                                <input type="radio" name="gender" value="Male" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">Female
                                                <input type="radio" name="gender" value="Female" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->
                            <div class="submit step" id="end">
                                <div class="summary text-center">
                                    <div class="wrapper">
                                        <h3>Thank you for your time<br><span id="name_field"></span>!</h3>
                                        <p>We will contact you shortly at the following email address <strong id="email_field"></strong> and if necessary take measures.</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                                                <input type="checkbox" name="terms" value="Yes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form> --}}
                    {{-- <form id="wrapped" method="post" action="{{ route('test.submit') }}">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                            @foreach($questions as $question)
                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>{{ $question->question }}</h3>
                                    <div class="row">
                                        @if($question->type == 'multiple_choice' || $question->type == 'multiple_selection')
                                            <div class="col-lg-12">
                                                @foreach($question->options as $option)
                                                    <div class="form-group">
                                                        @if($question->type == 'multiple_choice')
                                                            <label class="container_radio version_2">{{ $option->option_text }}
                                                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->option_text }}" class="required">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        @else
                                                            <label class="container_check version_2">{{ $option->option_text }}
                                                                <input type="checkbox" name="answers[{{ $question->id }}][]" value="{{ $option->option_text }}" class="required">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        @elseif($question->type == 'text')
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" name="answers[{{ $question->id }}]" class="form-control required">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step -->
                            @endforeach
                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Please fill with your personal data</h3>
                                <div class="form-group add_top_30">
                                    <label for="name">First and Last Name</label>
                                    <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control required">
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                        <label for="age">Age</label>
                                        <div class="form-group radio_input">
                                            <input type="text" name="age" id="age" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                        <div class="form-group radio_input">
                                            <label class="container_radio mr-3">Male
                                                <input type="radio" name="gender" value="Male" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">Female
                                                <input type="radio" name="gender" value="Female" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->
                            <div class="submit step" id="end">
                                <div class="summary text-center">
                                    <div class="wrapper">
                                        <h3>Thank you for your time<br><span id="name_field"></span>!</h3>
                                        <p>We will contact you shortly at the following email address <strong id="email_field"></strong> and if necessary take measures.</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                                                <input type="checkbox" name="terms" value="Yes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form> --}}
                    <form id="wrapped" method="POST" action="{{ route('test.submit') }}">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        <div id="middle-wizard">
                            @foreach($questions as $question)
                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>{{ $question->question }}</h3>
                                    <div class="row">
                                        @if($question->type == 'multiple_choice' || $question->type == 'multiple_selection')
                                            <div class="col-lg-12">
                                                @foreach($question->options as $option)
                                                    <div class="form-group">
                                                        @if($question->type == 'multiple_choice')
                                                            <label class="container_radio version_2">{{ $option->option_text }}
                                                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->option_text }}">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        @else
                                                            <label class="container_check version_2">{{ $option->option_text }}
                                                                <input type="checkbox" name="answers[{{ $question->id }}][]" value="{{ $option->option_text }}">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        @elseif($question->type == 'text')
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" name="answers[{{ $question->id }}]" class="form-control">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step -->
                            @endforeach
                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Please fill with your personal data</h3>
                                <div class="form-group add_top_30">
                                    <label for="name">First and Last Name</label>
                                    <input type="text" name="name" id="name" class="form-control " onchange="getVals(this, 'name_field');">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control " onchange="getVals(this, 'email_field');">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                                        <label for="age">Age</label>
                                        <div class="form-group radio_input">
                                            <input type="text" name="age" id="age" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-8">
                                        <div class="form-group radio_input">
                                            <label class="container_radio mr-3">Male
                                                <input type="radio" name="gender" value="Male">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">Female
                                                <input type="radio" name="gender" value="Female">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->
                            <div class="submit step" id="end">
                                <div class="summary text-center">
                                    <div class="wrapper">
                                        <h3>Thank you for your time<br><span id="name_field"></span>!</h3>
                                        <p>We will contact you shortly at the following email address <strong id="email_field"></strong> and if necessary take measures.</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                                                <input type="checkbox" name="terms" value="Yes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
</div>
<!-- /container -->

<footer class="footer_in clearfix">
        <div class="container">
            <p>©<script>document.write(new Date().getFullYear())</script> Ransboak</p>
        </div>
</footer>
<!-- /footer -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->
<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('frontend/assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/velocity.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/common_functions.js')}}"></script>

	<!-- Wizard script without branch -->
	<script src="{{asset('frontend/assets/js/wizard.js')}}"></script>
            {{-- <script>
                document.addEventListener('DOMContentLoaded', (event) => {
            const form = document.getElementById('wrapped');
            const startTime = new Date("{{ $test->start_time }}").getTime();
            const serverTime = new Date("{{ now() }}").getTime();
            const clientTime = new Date().getTime();
            const offset = serverTime - clientTime;
            const duration = 80 * 60 * 1000; // 30 minutes in milliseconds

            function checkAndSubmitForm() {
                const adjustedClientTime = new Date().getTime() + offset;
                const timeElapsed = adjustedClientTime - startTime;
                if (timeElapsed >= duration) {
                    form.submit();
                }
            }

            function updateTimer() {
                const adjustedClientTime = new Date().getTime() + offset;
                const timeElapsed = adjustedClientTime - startTime;
                const timeLeft = duration - timeElapsed;

                if (timeLeft <= 0) {
                    form.submit();
                } else {
                    const minutes = Math.floor((timeLeft / 1000) / 60);
                    const seconds = Math.floor((timeLeft / 1000) % 60);
                    const timerElement = document.getElementById('timer');
                    document.getElementById('timer').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                    // Change color to red if 30 seconds or less are left
                    if (timeLeft <= 30 * 1000) {
                        timerElement.classList.remove('alert-primary');
                        timerElement.classList.add('alert-danger');
                    } else {
                        timerElement.classList.remove('alert-danger');
                        timerElement.classList.add('alert-primary');
                    }

                    // Apply blinking effect if less than 10 seconds are left
                    if (timeLeft <= 10 * 1000) {
                        timerElement.classList.add('blink');
                    } else {
                        timerElement.classList.remove('blink');
                    }
                }
            }

            setInterval(updateTimer, 1000);
            checkAndSubmitForm();
        });
            </script> --}}
            <script>
                document.addEventListener('DOMContentLoaded', (event) => {
                    const form = document.getElementById('wrapped');
                    const startTime = new Date("{{ $test->start_time }}").getTime();
                    const serverTime = new Date("{{ now() }}").getTime();
                    const clientTime = new Date().getTime();
                    const offset = serverTime - clientTime;
                    const duration = 97 * 60 * 1000; // 30 minutes in milliseconds
            
                    function checkAndSubmitForm() {
                        const adjustedClientTime = new Date().getTime() + offset;
                        const timeElapsed = adjustedClientTime - startTime;
                        if (timeElapsed >= duration) {
                            form.submit();
                        }
                    }
            
                    function updateTimer() {
                        const adjustedClientTime = new Date().getTime() + offset;
                        const timeElapsed = adjustedClientTime - startTime;
                        const timeLeft = duration - timeElapsed;
            
                        if (timeLeft <= 0) {
                            form.submit();
                        } else {
                            const hours = Math.floor((timeLeft / 1000) / 3600);
                            const minutes = Math.floor(((timeLeft / 1000) % 3600) / 60);
                            const seconds = Math.floor((timeLeft / 1000) % 60);
            
                            let timeString = '';
                            if (hours > 0) {
                                timeString = `${hours}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                            } else {
                                timeString = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                            }
            
                            const timerElement = document.getElementById('timer');
                            timerElement.textContent = timeString;
            
                            // Change color to red if 30 seconds or less are left
                            if (timeLeft <= 30 * 1000) {
                                timerElement.classList.remove('alert-primary');
                                timerElement.classList.add('alert-danger');
                            } else {
                                timerElement.classList.remove('alert-danger');
                                timerElement.classList.add('alert-primary');
                            }
            
                            // Apply blinking effect if less than 10 seconds are left
                            if (timeLeft <= 10 * 1000) {
                                timerElement.classList.add('blink');
                            } else {
                                timerElement.classList.remove('blink');
                            }
                        }
                    }
            
                    setInterval(updateTimer, 1000);
                    checkAndSubmitForm();
                });
            </script>
            
</body></html>

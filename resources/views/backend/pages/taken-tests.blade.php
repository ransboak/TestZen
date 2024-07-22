@extends('backend.layouts.main')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12" >
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Taken Tests</a></li>
                        {{-- <li class="breadcrumb-item active">Data Tables</li> --}}
                    </ol>
                </div>
                <h4 class="page-title">Taken Tests</h4>
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

                


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Candidate</th>
                            {{-- <th>Type</th> --}}
                            <th>Action</th>
                            {{-- <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th> --}}
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($tests as $key => $test)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$test->user->name}}</td>
                            {{-- <td>{{$question->type}}</td> --}}


                            <td><a class="btn-sm btn-info waves-effect waves-light" href="{{route('tests.show', $test->id)}}" >View Test</a></td>
                            {{-- <td>2011/04/25</td>
                            <td>$320,800</td> --}}
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->


@endsection

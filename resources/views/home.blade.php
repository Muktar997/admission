@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enter Student Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="POST" action={{url('/student_details')}}>
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Student Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Student HSC Roll</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class= "form-control" name="hsc_roll" value="{{ old('email') }}" required>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Student Reg No</label>

                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="reg_no" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Session</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="year" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Mathematics</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="math" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Physics</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="physics" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Chemistry</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="chemistry" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">English</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="english" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="links">
            <a href="{{url('/details')}}">Students Details</a>
        </div>
    </div>
</div>
@endsection

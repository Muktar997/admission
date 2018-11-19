@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><part><b><font size="4" color="red"> Enter Student Details</font></b></part></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="POST" action={{url('/student_details')}}>
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><b><font size="4" color="blue"> Student Name</font></b></label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><b><font size="4" color="blue"> Student HSC Roll</font></b></label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class= "form-control" name="hsc_roll" value="{{ old('email') }}" required>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><b><font size="4" color="blue"> Student Reg No</font></b></label>

                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="reg_no" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b><font size="4" color="blue"> Session</font></b></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="year" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b><font size="4" color="blue"> Mathematics</font></b></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="math" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b><font size="4" color="blue"> Physics</font></b></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="physics" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b><font size="4" color="blue"> Chemistry</font></b></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="chemistry" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b><font size="4" color="blue"> English</font></b></label>

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
                            <div class="links">
                                <a href="{{url('/home/upload')}}">
                                    <button type="details" class="btn btn-primary">
                                        Upload form Excel
                                    </button><!--<font size="6" color="red"><u><i>Student Details</i></u></font></a>-->
                            </div>
                        </form>
                </div>

            </div>
        </div>
        <div class="links">
            <a href="{{url('/details')}}">
                <button type="details" class="btn btn-primary">
                    Student Details
                </button><!--<font size="6" color="red"><u><i>Student Details</i></u></font></a>-->
        </div>
    </div>
</div>
@endsection

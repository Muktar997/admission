@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Enter Your Information</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action={{url('/student_details')}}>
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Your HSC Roll</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class= "form-control" name="hsc_roll" value="{{ old('email') }}" required>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Your ID</label>

                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="reg_no" required>

                                </div>
                            </div>
            <div class="links">
                <a href="{{url('/details')}}"><font size="6" color="red"><u><i>Student Details</i></u></font></a>
            </div>
        </div>
    </div>
@endsection

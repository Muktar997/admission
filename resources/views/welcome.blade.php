<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <style>
            body {
                background-color: lightblue;
                background-repeat: repeat-x;
            }
            part {
                background-color: lightyellow;
            }
        </style>

    </head>
    <body>
    <!--<div class="content">
    <b><font size="6" color="blue">Hello World</font></b>
    </div>-->
   <!--<img src="ruet.PNG" alt="RUET" style="width:128px;height:128px;">-->
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   <part><b><font color="green"> RUET</font></b></part> <br>
                    <b><font size="8" color="red"> Admission Test Result</font></b>
                </div>
                <div class="links">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{{url('/login')}}">
                            <button type="button" class="btn btn-primary">
                                <b><font size="4" color="blue">  ADMIN</font></b>
                            </button>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{{url('/result')}}">
                            <button type="button" class="btn btn-primary">
                                <b><font size="4" color="blue">  All Student Result</font></b>
                            </button>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{{url('/individual')}}">
                            <button type="button" class="btn btn-primary">
                                <b><font size="4" color="blue">  Individual Result</font></b>
                            </button>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </body>
</html>

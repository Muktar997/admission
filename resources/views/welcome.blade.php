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
    </head>
    <body>
    <!--<div class="content">
    <b><font size="6" color="blue">Hello World</font></b>
    </div>-->
   <!-- <img src="../../public/ruet.PNG" alt="RUET" style="width:128px;height:128px;">-->
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <b><font color="green"> RUET</font></b>
                    <b><font size="8" color="red"> Admission Test Result</font></b>
                </div>

                <div class="links">
                    <!--<a href="{{url('/home')}}">Home</a>-->
                    <a href="{{url('/login')}}">
                        <button type="admin" class="btn btn-primary">
                            ADMIN
                        </button>
                        <!--<a href="{{url('/register')}}"><font size="4" color="green"> <u><i>Register</i></u></font></a>-->
                        <a href="{{url('/result')}}">
                            <button type="result" class="btn btn-primary">
                                All Student Result
                            </button>
                            <a href="{{url('/individual')}}">
                                <button type="result" class="btn btn-primary">
                                    Individual Result
                                </button>
                </div>
            </div>
        </div>
    </body>
</html>

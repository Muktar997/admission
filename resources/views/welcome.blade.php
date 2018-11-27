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
            background-color: lightgreen;
            background-repeat: repeat-x;


        }
        back {
            background-color: gold;
        }
        part {
            background-color: lightgreen;
        }

    </style>
    <style>
        #ver {
            position: relative;
            cursor: pointer;
        }
    </style><!-- background-image: url("Sgate.jpg");-->

</head>
<body>
<!--<div class="content">
<b><font size="6" color="blue">Hello World</font></b>
</div>-->
<!--<img src="../../public/ruet.PNG" alt="RUET" style="width:128px;height:128px;" +"      "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2))>
     <div class="flex-center position-ref full-height"> </div><img src="{{ URL::to('http://localhost/admission/public/img/ruet.PNG') }}"><img src="ruet.PNG" alt="RUET" width="1350" height="150"><br>-->


<div class="content">

    <img src="ruet.PNG" alt="RUET" class="img_ruet" width="1400" height="150">
    <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        <b><font size="5" color="red">RUET Admission Test Result</font></b>

    </marquee>
    <?php echo(strftime("%r (GMT)")); ?></p>
    <?php echo(strftime("%d %b %Y ")); ?></p>
    <!--<img id="ver" src="ver.JPG">


    <script>
        ver.onclick = function () {
            let start = Date.now();

            let timer = setInterval(function () {
                let timePassed = Date.now() - start;

                ver.style.left = timePassed / 5 + 'px';

                if (timePassed > 900) clearInterval(timer);

            }, 20);
        }
    </script>-->
    <!--<div class="title m-b-md"><part><b><font size="7" color="#00bfff">RUET Admission Test Result</font></b></part><br>
    </div><div class="links"></div><div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4"></div>


</div>-->

    <div class="links">
                <a href="{{url('/login')}}">
                    <button type="button" class="btn btn-primary">
                        <b><font size="5" color="blue"> ADMIN</font></b>
                    </button>
    <!--</div>
    <div class="links">-->
                    <a href="{{url('/result')}}">
                        <button type="button" class="btn btn-primary">
                            <b><font size="5" color="blue"> All Student Result</font></b>
                        </button>
    <!--</div>
    <div class="links">-->
                        <a href="{{url('/individual')}}">
                            <button type="button" class="btn btn-primary">
                                <b><font size="5" color="blue"> Individual Result</font></b>
                            </button>
    </div>

</div>


</body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
        box-sizing: border-box
    }

    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 550px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .prev, .next, .text {
            font-size: 11px
        }
    }
</style>
</head>
<body>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext"><b><font color="#ffd700"> 1/6 </font></div>
        <img src="gate.jpeg" style="width:100%">
        <div class="text"><b><font size="3" color="blue"> RUET gate </font></b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b><font color="#ffd700"> 2/6 </font></div>
        <img src="ShahidMinar.jpeg" style="width:100%">
        <div class="text"><b><font size="3" color="blue"> RUET Shahid Minar </font></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b><font color="#ffd700"> 3/6 </font></div>
        <img src="CSE.jpg" style="width:100%">
        <div class="text"><b><font size="3" color="blue"> CSE Buildings </font></b></div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext"><b><font color="#ffd700"> 4/6 </font></div>
        <img src="GCE.jpg" style="width:100%">
        <div class="text"><b><font size="3" color="blue"> GCE Buildings </font></b></div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext"><b><font color="#ffd700"> 5/6 </font></div>
        <img src="cenlib.jpg" style="width:100%">
        <div class="text"><b><font size="3" color="blue"> RUET Central Library </font></b></div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext"><b><font color="#ffd700"> 6/6 </font></div>
        <img src="plgr.jpg" style="width:100%">
        <div class="text"><b><font size="3" color="blue"> RUET Play-Ground </font></b></div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
</html>

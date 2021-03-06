<!-- this is used to extend from the app layout -->
@extends('layouts.web_template')
<head>
    <style>
        .btn-outline-primary.btn-custom {
            color: #ffd700;
            background-color: transparent;
            background-image: none;
            border-color: #ffd700;
        }

        .btn-outline-primary.btn-custom:hover {
            color: #fff;
            background-image: linear-gradient(to bottom right, #FDEB71, #F8D800);
            background-color: #ffd700;
            border-color: #ffffff;
        }

        .btn-outline-primary.btn-custom:focus, .btn-outline-primary.btn-custom.focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.1);
        }

        .btn-outline-primary.btn-custom.disabled, .btn-outline-primary.btn-custom:disabled {
            color: #fff;
            background-color: transparent;
        }

        .btn-outline-primary.btn-custom:not(:disabled):not(.disabled):active, .btn-outline-primary.btn-custom:not(:disabled):not(.disabled).active,
        .show > .btn-outline-primary.btn-custom.dropdown-toggle {
            color: #fff;
            background-color: #ffd700;
            border-color: #ffd700;
        }

        .btn-outline-primary.btn-custom:not(:disabled):not(.disabled):active:focus, .btn-outline-primary.btn-custom:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-primary.btn-custom.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.1);
        }

        .card-img span {
            position: absolute;
            top: 5%;
            right: 0%;
            background: #ffd700;
            padding: 6px;
            color: #fff;
            font-size: 12px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;

        }
        .card-img span h4{
            font-size: 12px;
            margin:0;
            padding:10px 5px;
            line-height: 0;
        }
        .carousel-item{
            opacity: 0.85;
        }





    </style>
</head>
<!-- this is the content of our index page  ,
    all of the page content must be inside the content section -->
@section('content')
    <!-- Masthead -->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                @if(count($posts)==0)
                    <div class="carousel-item active" style="background-image: url('https://via.placeholder.com/1200x720?text=post+1')">
                    </div>
                    <div class="carousel-item" style="background-image: url('https://via.placeholder.com/1200x720?text=post+2')">
                    </div>
                    <div class="carousel-item" style="background-image: url('https://via.placeholder.com/1200x720?text=post+3')">
                    </div>
                @endif
                <!-- Slide One - Set the background image for this slide in the line below -->
                @if(count($posts)>0)
                    <div class="carousel-item active" style="background-image: url('{{asset('images/PostCover/')}}{{'/'.$posts[0]->cover_image}}')">
                    </div>
                @endif
                <!-- Slide Two - Set the background image for this slide in the line below -->
                @if(count($posts)>1)
                    <div class="carousel-item" style="background-image: url('{{asset('images/PostCover/')}}{{'/'.$posts[1]->cover_image}}')">
                    </div>
                @endif
                <!-- Slide Three - Set the background image for this slide in the line below -->
                @if(count($posts)>2)
                    <div class="carousel-item" style="background-image: url('{{asset('images/PostCover/')}}{{'/'.$posts[2]->cover_image}}')">
                    </div>
                @endif
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <div class="row header" style="text-align: center;margin-top:20px">
        <div style="text-align: center;width:100%">
            <h3 class="title" style="text-align: center">آخر أخبار وحدة الأشبال </h3>
        </div>
        <div style="text-align: center;width:100%">
            <h4 class="title" style="text-align: center;color:grey">شعارنا بكل جهد
            </h4>
        </div>

    </div>
    <div class=" mt-3 ">
        <div class="row">
            @include('includes.news_test')
        </div>
    </div>
    <div class="row header" style="text-align: center;margin-top:40px">
        <div style="text-align: center;width:100%">
            <h3 class="title" style="text-align: center">محطاتنا القادمة </h3>
        </div>
        <div style="text-align: center;width:100%">
            <h4 class="title" style="text-align: center;color:grey">محطاتنا القادمة وانشطتنا المرتقبة</h4>
        </div>
        <div style="text-align: center;width:100%">
            <h4 class="title" style="text-align: center;color:grey"> قريبا </h4>
        </div>
    </div>
    <div class=" mt-3 ">
        <div class="row">
            @include('includes.events')
        </div>
    </div>


@endsection
@section('og')
    <meta property="og:title" content="فوج الفلاح وحدة الأشبال" />
    <meta property="og:image" content="{{ asset('/images/cubs-logo.png') }}" />
    <meta property="og:description" content="تربية النشأ و تحقيق استمرارية الفوج و الأفراد من أجل الانتشار الأوسع في المجتمع من خلال تأسيس كشفية جديدة" />
    <meta property="og:type" content="website" />
@endsection

@section('title')
    <title>فوج الفلاح وحدة الأشبال</title>
    <meta name="description" content="تربية النشأ و تحقيق استمرارية الفوج و الأفراد من أجل الانتشار الأوسع في المجتمع من خلال تأسيس كشفية جديدة">
@endsection
@section('icon')
    <link rel="icon" href="{{{ asset('/images/cubs-logo.png') }}}" >
@endsection
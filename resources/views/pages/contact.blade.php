@extends('layouts.web_template')

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Style the container/contact section */
        .contact-us {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

@section('content')
    <div class="mb-3" style="height: 100px;"></div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('result'))
        <div class="alert alert-success">
            <ul>
                <li>لقد تم الاستلام بنجاح</li>
            </ul>
        </div>
    @endif
<div class="container contact-us">
    <div style="text-align:center">
        <h2>تواصل معنا</h2>
    </div>
    <div class="row">
        <div class="column">
            <div style="width:100%;height:500px;">
                <div class="mapouter"><div class="gmap_canvas"><iframe  style="margin-right:100px" width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Cite%20Yahiaoui&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href=""></a></div><style>.mapouter{text-align:right;height:500px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
            </div>
        </div>
        <div class="column">
            <form action="/contactForm" method="post">
                {{ csrf_field() }}
                <label class="float-right" for="fname" style="text-align:right;color: black">اللقب</label>
                <input type="text" style="text-align:right;" id="fname" required name="name" placeholder="لقبك">
                <label class="float-right" for="lname" style="text-align:right;color: black">الاسم</label>
                <input type="text" style="text-align:right;color: black" id="lname" required name="surname" placeholder="اسمك">
                <label class="float-right" for="subject" style="text-align:right;color: black">الموضوع</label>
                <textarea id="subject" style="text-align:right;color: black" required name="message" placeholder="اكتب هنا ..." style="height:170px"></textarea>
                <input class="float-right" type="submit" value="ارسل">
            </form>
        </div>
    </div>
</div>

<!-- Initialize Google Maps -->
<script>
    function myMap() {
        var myCenter = new google.maps.LatLng(51.508742,-0.120850);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 12};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
@endsection
@section('og')
    <meta property="og:title" content="الموقع الرسمي لفوج الفلاح" />
    <meta property="og:image" content="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/18835730_1701449486822767_2312127021052390335_n.jpg?_nc_cat=110&_nc_ht=scontent-cdg2-1.xx&oh=cd825a0c4d827b279c38b8729d706544&oe=5C4062E0" />
    <meta property="og:description" content="تربية النشأ و تحقيق استمرارية الفوج و الأفراد من أجل الانتشار الأوسع في المجتمع من خلال تأسيس كشفية جديدة" />
    <meta property="og:type" content="website" />
@endsection

@section('title')
    <title> الموقع الرسمي لفوج الفلاح </title>
    <meta name="description" content="تربية النشأ و تحقيق استمرارية الفوج و الأفراد من أجل الانتشار الأوسع في المجتمع من خلال تأسيس كشفية جديدة">
@endsection
@section('icon')
    <link rel="icon" href="{{{ asset('/images/landing_page_Logo.png') }}}" >
@endsection
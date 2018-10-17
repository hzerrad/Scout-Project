@extends('layouts.web_template')
<head>
    <link rel="stylesheet" href="css/library.css">
</head>
@section('content')
    <div class="mb-3" style="height: 100px;background-color: #4f4f4f"></div>
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            @foreach($books as $book)
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <img class="card-img" src="/uploads/Books/Images/{{ $book->picture }}" alt="{{ $book->title }}">
                        </div>
                        <div class="card-body">
                            <h1 class="card-title" dir="rtl" style="text-align: right !important;">{{ $book->title }}</h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col-8 metadata" dir="rtl" style="text-align: right">{{ $book->author }}</div>
                                </div>
                            </div>
                            <p class="card-text" dir="rtl" style="text-align: right !important;">{!! $book->description !!}</p>
                            <a class="trailer-preview pull-right" href="/uploads/Books/PDF/{{ $book->file }}" target="new" dir="rtl" style="text-align: right">
                                حمل من هنا<i class="fa fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
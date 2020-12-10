<!DOCTYPE html>
<html>
<head>
    <title>UniCloud | Courses</title>
    <meta charset="UTF-8">
    @include('partials.degreesCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <label class="label_title">Cadeiras</label>
        <div class="row"></div>
        @foreach($quarts as $quart)
            <div class="row">
                @foreach($quart as $cadeira)
                    <form class="form" action="/categories" method="get">
                        <button class="button_course" type="Submit"><span>{{$cadeira}}</span></button>
                    </form>
                @endforeach
            </div>
        @endforeach
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>UniCloud | Courses</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    @include('partials.degreesCSS')
    @include('partials.breadcrumbCSS')
</head>

<body>
<div class="background">
    @include('partials.header')
    {{Breadcrumbs::render('disciplinas', $curso)}}
    <div class="main">
        <div class="yellowCircle"></div>
        <label class="label_title">Cadeiras</label>
        <div class="row"></div>
        @foreach($quarts as $quart)
            <div class="row">
                @foreach($quart as $cadeira)
                    <form class="form" action="/categories" method="get">
                        <input type="hidden" name="degree" value={{$cadeira->id}}>
                        <button class="button_course" type="Submit"><span>{{$cadeira->nome}}</span></button>
                    </form>
                @endforeach
                @if(sizeof($quart)<4)
                    @for ($i = 1; $i <= 4-sizeof($quart); $i++)
                        <div class="form">
                            <div class="button" hidden></div>
                        </div>
                    @endfor
                @endif
            </div>
        @endforeach
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

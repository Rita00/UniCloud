<!DOCTYPE html>
<html>
<head>
    <title>UniCloud | Degrees</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    @include('partials.degreesCSS')
    @include('partials.breadcrumbCSS')
</head>
<body>
<div class="background">
    @include('partials.header')
    {{Breadcrumbs::render('degrees')}}
    <div class="main">
        <div class="yellowCircle"></div>
        <label class="label_title">Cursos</label>
        <div class="row"></div>
        @foreach($quarts as $quart)
            <div class="row">
                @foreach($quart as $curso)
                    <form class="form" action='/disciplinas' method="get">
                        <input type="hidden" name="course" value={{$curso->id}}>
                        <button class="button" type="Submit" title="{{$curso->nome}}"><span>{{$curso->sigla}}</span></button>
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

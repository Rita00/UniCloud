<!DOCTYPE html>
<html>
<head>
    <title>UniCloud | Degrees</title>
    <meta charset="UTF-8">
    @include('partials.degreesCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <label class="label_title">Cursos</label>
        <div class="row"></div>
        @foreach($quartSiglas as $siglas)
            <div class="row">
                @foreach($siglas as $sigla)
                    <form class="form" action="/disciplinas?course={{$sigla}}" method="get">
                        <button class="button" type="Submit"><span>{{$sigla}}</span></button>
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

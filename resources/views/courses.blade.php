<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>UniCloud | Courses</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/images/favicon-64x64.png" sizes="64x64" />
	<!--CSS-->
	<link rel="stylesheet" href="css/main.css"> 
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/breadcrumb.css"> 
</head>

<body>
    @include('partials.header')
    {{Breadcrumbs::render('disciplinas', $curso)}}
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="title">Cadeiras</div>
        @foreach($quarts as $quart)
            <div class="row">
                @foreach($quart as $cadeira)
                    <form class="form" action="/categories" method="get">
                        <input type="hidden" name="degree" value={{$cadeira->id}}>
                        <button class="button" type="Submit"><span>{{$cadeira->nome}}</span></button>
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
    <!--------------------------------------Footer-->
    @include('partials.footer')
    </div>
</body>
</html>

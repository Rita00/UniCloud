<!DOCTYPE html>
<html>
<head>
    <title>UniCloud | Courses</title>
    <meta charset="UTF-8">
    @include('partials.categoriesCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
</head>
<body>
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <label class="label_title">Categoria</label>
        <div class="row"></div>
            <div class="row">
                <form class="form" action="/materialsList" method="get">
                    <button class="button" type="Submit"><span>Materiais Teóricos</span></button>
                </form>
                <form class="form" action="/" method="get">
                    <button class="button" type="Submit"><span>Materiais Práticos</span></button>
                </form>
                <form class="form" action="/" method="get">
                    <button class="button" type="Submit"><span>Exames</span></button>
                </form>
            </div>
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

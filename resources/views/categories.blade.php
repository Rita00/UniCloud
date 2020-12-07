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
                <form class="form" action="/" method="get">
                    <button class="button" type="Submit"><span>Materiais Teoricos</span></button>
                </form>
                <form class="form" action="/" method="get">
                    <button class="button" type="Submit"><span>Materiais Praticos</span></button>
                </form>
                <form class="form" action="/" method="get">
                    <button class="button" type="Submit"><span>Exames</span></button>
                </form>
            </div>
    </div>

</div>


</body>
</html>

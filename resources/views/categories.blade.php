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
    {{Breadcrumbs::render('categories', $courseBread, $curso)}}
    <div class="main">
        <div class="yellowCircle"></div>
        <label class="label_title">Categoria</label>
        <div class="row"></div>
            <div class="row">
                <form class="form" action="/materialsList" method="get">
                    <input type="hidden" name="course" value={{$course}}>
                    <input type="hidden" name="category" value="Materiais Teóricos">
                    <button class="button" type="Submit"><span>Materiais Teóricos</span></button>
                </form>
                <form class="form" action="/materialsList" method="get">
                    <input type="hidden" name="course" value={{$course}}>
                    <input type="hidden" name="category" value="Materiais Práticos">
                    <button class="button" type="Submit"><span>Materiais Práticos</span></button>
                </form>
                <form class="form" action="/materialsList" method="get">
                    <input type="hidden" name="course" value={{$course}}>
                    <input type="hidden" name="category" value="Exames">
                    <button class="button" type="Submit"><span>Exames</span></button>
                </form>
            </div>
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

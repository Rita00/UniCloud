<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>UniCloud | Categories</title>
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
    {{Breadcrumbs::render('categories', $courseBread, $curso)}}
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="title">Categoria</div>
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
		<div class="row"></div>
		<div class="row"></div>
		<div class="row"></div>
		<div class="row"></div>
		<!--------------------------------------Footer-->
		@include('partials.footer')
    </div>
</body>
</html>

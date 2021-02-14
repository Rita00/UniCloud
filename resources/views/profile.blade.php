<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>UniCloud | Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/images/favicon-64x64.png" sizes="64x64" />
	<!--CSS-->
	<link rel="stylesheet" href="css/main.css"> 
	<link rel="stylesheet" href="css/menu.css"> 
	<link rel="stylesheet" href="css/login.css"> 
</head>
<body>
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="title">Perfil</div>
        <div class="row">
            <div class="form">
                Ainda estamos a trabalhar nesta página :)
            </div>
        </div>
		<div class="row"></div>
		<div class="row"></div>	
		<!--------------------------------------Footer-->
		@include('partials.footer')
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>UniCloud | Materials</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="/images/favicon-64x64.png" sizes="64x64" />
	<!--CSS-->
	<link rel="stylesheet" href="css/main.css"> 
	<link rel="stylesheet" href="css/menu.css"> 
	<link rel="stylesheet" href="css/list.css"> 
	<link rel="stylesheet" href="css/breadcrumb.css"> 
</head>
<body>
    @include('partials.header')
    {{Breadcrumbs::render('materials', $courseBread, $curso, $cat)}}
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="title">Materiais</div>
        <table class="table">
            <tr class="tableHead">
                <th>Nome</th>
                <th>Sub-categoria</th>
                <th>Uploader</th>
                <th>Rating</th>
                <th></th>
			</tr>
                @foreach($files as $file)
                <tr class="tableRow">
                    <form method="get" action="download/{{$file->id}}">
                        <td>{{$file->name}}</td>
                        <td>{{$file->sub_category}}</td>
                        <td>{{$file->uploaded_by}}</td>
                        <td>{{$file->rate}}</td>
                        <td><input type="submit" value="Download"></td>
                    </form>
                </tr>
				@endforeach
		</table>
		@if(count($files)<10)
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="row"></div>
		@endif
		<!--------------------------------------Footer-->
		@include('partials.footer')
    </div>
</body>
</html>

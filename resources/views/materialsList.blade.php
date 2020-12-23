<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>UniCloud | Materials</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"/>
    @include('partials.materialsListCSS')
    @include('partials.breadcrumbCSS')
</head>
<body>
<div class="background">
    @include('partials.header')
    {{Breadcrumbs::render('materials', $courseBread, $curso, $cat)}}
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="label_title">Materiais</div>
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
        @include('partials.formerrors')
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

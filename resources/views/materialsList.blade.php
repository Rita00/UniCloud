<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>UniCloud | Upload</title>
    <meta charset="UTF-8">
    @include('partials.materialsListCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
</head>
<body>
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <label class="label_title">Materiais</label>
        <form class="uploadForm" method="post">
            <input class="uploadButton" type="submit" value="Upload">
        </form>
        <table class="table">
            <tr class="tableHead">
                <th>Nome</th>
                <th>Sub-categoria</th>
                <th>Uploader</th>
                <th>Rating</th>
                <th></th>
            </tr>
            <tr class="tableRow">
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>⭐︎⭐︎⭐︎⭐︎⭐︎ (3.6)</td>
                <td><button>download</button></td>

            </tr>
        </table>

        @include('partials.formerrors')
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

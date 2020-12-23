<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>UniCloud | Upload</title>
    <meta charset="UTF-8">
    @include('partials.loginCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
</head>
<body>
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="label_title">Termos e Condições</div>
        <div class="form">
            <table class="table">
                <tr class="tableRow">
                    <td class="tableCol">
                    </td>
                </tr>
            </table>
        </div>
        @include('partials.formerrors')
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

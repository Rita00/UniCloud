<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UniCloud</title>
</head>
<body>
@include('partials.navbar')
<h3>Acesso apenas após verificação do email</h3>
{{auth()->user()['name']}}, se precisar de um reenvio do e-mail de confirmação clique no botão abaixo.
<br><br>
<form method="post" action="/resend">
    <input type="Submit">
</form>
</body>
</html>

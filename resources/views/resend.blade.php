<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/images/favicon-64x64.png" sizes="64x64" />
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

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UniCloud</title>
    </head>
    <body>
        <h1>Error</h1>
        <h3>{{$error}}</h3>

        <form action="/" method="get">
            <input type="submit" value="Back">
        </form>
    </body>
</html>

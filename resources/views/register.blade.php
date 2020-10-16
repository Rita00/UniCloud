<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UniCloud</title>
    </head>
    <body>
        <form method="post">
            <label>name
                <input type="text" name="name">
            </label> <br>
            <label>email
                <input type="text" name="email">
            </label> <br>
            <label>password
                <input type="password" name="password">
            </label> <br>
            <label>password confirmation
                <input type="password" name="password_confirmation">
            </label> <br>
            <input type="submit" value="Sign Up">
        </form>
        <a href="/login">Already signed up?</a>
        @include('partials.formerrors')
    </body>
</html>

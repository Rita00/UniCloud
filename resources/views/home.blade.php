<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UniCloud</title>
    </head>
    <body>
        <form method="post" action="/authentication">
            <label>email
                <input type="text" name="email">
            </label> <br>
            <label>password
                <input type="password" name="password">
            </label> <br>
            <input type="submit" value="Sign Up" name="signup">
            <input type="submit" value="Log In" name="login">
        </form>

        <form method="post" action="/mail">
            <input type="submit" value="Mail">
        </form>
    </body>
</html>

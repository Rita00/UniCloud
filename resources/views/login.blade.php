<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>UniCloud | Upload</title>
        <meta charset="UTF-8">
        @include('partials.mainCSS')
        @include('partials.loginCSS')
        @include('partials.formerrors')
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    </head>
    <body>
    <div class="fundo">
        @include('partials.header')
        <div class="main">
            <div class="bolaLand"></div>
            <label class="label_title">LogIn</label>
            <form class="form" method="post">
                <div>
                    <label>email</label>
                    <input class="input_email" type="text" name="email">
                </div><br>
                <div>
                    <label>password</label>
                    <input class="input_password" type="password" name="password">
                </div><br>
                <div>
                    <label>Remember me?</label>
                    <input type="checkbox" name="remember">
                    <input class="btn_login" type="submit" value="Log In">
                </div>
                <div>
                    <a href="/register">Create new account</a>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>

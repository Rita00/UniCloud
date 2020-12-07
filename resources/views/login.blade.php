<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>UniCloud | Upload</title>
    <meta charset="UTF-8">
    @include('partials.loginCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
</head>
<body>
<div class="fundo">
    @include('partials.header')
    <div class="main">
        <div class="bolaLand"></div>
        <label class="label_title">LogIn</label>
        <form class="form" method="post">
            <table class="table">
                <tr class="tableRow">
                    <td class="tableCol">
                    </td>
                    <td class="tableCol">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol">
                        <label class="label_email">email</label>
                    </td>
                    <td class="tableCol">
                        <input class="input_email" type="text" name="email">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol">
                        <label class="label_password">password</label>
                    </td>
                    <td class="tableCol">
                        <input class="input_password" type="password" name="password">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol">
                        <label>Remember me?</label>
                    </td>
                    <td class="tableCol" style="text-align:left">
                        <input type="checkbox" name="remember">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol"></td>
                    <td class="tableCol"></td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol"></td>
                    <td class="tableCol"></td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol">
                        <a href="/register">Create new account</a>
                    </td>
                    <td class="tableCol">
                    </td>
                </tr>
            </table>
            <input class="btn_login" type="submit" value="Log In">
        </form>
        @include('partials.formerrors')
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

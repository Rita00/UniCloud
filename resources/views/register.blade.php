<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>UniCloud | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    @include('partials.loginCSS')
</head>
<body>
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="label_title">SignUp</div>
        <form class="form" method="post">
            <table class="table">
                <tr class="tableRow">
                    <td class="tableCol">
                        <label class="label_email">Nome</label>
                    </td>
                    <td class="tableCol">
                        <input class="input_email" type="text" name="name">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol">
                        <label class="label_email">Email</label>
                    </td>
                    <td class="tableCol">
                        <input class="input_email" type="text" name="email">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol">
                        <label class="label_password">Password</label>
                    </td>
                    <td class="tableCol">
                        <input class="input_password" type="password" name="password">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol">
                        <label class="label_password">Confirmação da password</label>
                    </td>
                    <td class="tableCol">
                        <input class="input_password" type="password" name="password_confirmation">
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
                        <a href="/login">Already signed up?</a>
                    </td>
                    <td class="tableCol">

                    </td>
                </tr>
            </table>
            <input class="btn_login" type="submit" value="Sign Up">
        </form>
        @include('partials.formerrors')
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

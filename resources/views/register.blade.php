<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>UniCloud | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/images/favicon-64x64.png" sizes="64x64"/>
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
                    </td>
                    <td class="tableCol">
                        <input type="checkbox" name="terms" style="display:inline-block">
                        <div style="display:inline-block">Aceito os <a href="/terms" target="_blank"
                                                                       rel="noopener noreferrer">Termos e Condições</a>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="btnDiv">
                <a class="link" href="/login">Already signed up?</a>
                <input class="btn_login" type="submit" value="Sign Up">
            </div>
        </form>
        @include('partials.formerrors')
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=10">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>UniCloud | Upload</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="/images/favicon-64x64.png" sizes="64x64" />
	<!--CSS-->
	<link rel="stylesheet" href="css/main.css"> 
	<link rel="stylesheet" href="css/menu.css"> 
	<link rel="stylesheet" href="css/login.css"> 
</head>
<body>
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="title">LogIn</div>
        <form class="form" method="post">
            <table class="table">
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
                    </td>
                    <td class="tableCol" style="text-align:left">
                        <input type="checkbox" name="remember"><label>Remember me?</label>
                    </td>
                </tr>
				
            </table>
			<div class="row"></div>
            <div class="btnDiv">
                <a class="link" href="/register">Create new account</a>
                <input class="btn_login" type="submit" value="Log In">
            </div>
        </form>
		<div class="row"></div>
        <!--------------------------------------Footer-->
   	 	@include('partials.footer')
    </div>
</body>
</html>

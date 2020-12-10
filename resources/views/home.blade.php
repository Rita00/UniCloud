<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UniCloud | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    @include('partials.mainCSS')
</head>

<body>
<div class="fundo">
    <!--------------------------------------Navigation-->
@include('partials.header')

<!--------------------------------------Main-->
    <div class="welcome">
        <div class="yellowCircle">Bem Vindo à Unicloud!</div>
        <table class="table">
            <tr>
                <td class="tableButtons">
                    <form class="buttons" method="get" enctype="multipart/form-data" id="mainForm">
                        @if (auth()->check())
                            <input class="btn_input_disabled" type="submit" id="signup" value="Sign Up" formaction="/register" disabled><br>
                            <input class="btn_input_disabled" type="submit" id="login" value="LogIn" formaction="/login" disabled><br><br><br>
                        @else
                            <input class="btn_input" type="submit" id="signup" value="Sign Up" formaction="/register"><br>
                            <input class="btn_input" type="submit" id="login" value="Login" formaction="/login"><br><br><br>
                        @endif
                        <input class="btn_input" type="submit" id="course" value="Cursos" formaction="/degrees">
                    </form>
                    <!---
                    <div class="textos">
                    <span class="tQue">+ O que é a UniCloud</span><br>
                    <span class="tPorque">+ Porquê a UniCloud</span><br>
                    <span class="tGuia">+ Guia UniCloud</span><br>
                    </div>
                    --->
                </td>
                <td class="bar">
                    <div class="verticalBar"></div>
                </td>
                <td class="news">

                    <div>Novidades:</div>
                    <div>-Pagina de Upload</div>
                    <div>-Pagina de Login/SignIn</div>
                    <div>-Pagina Principal</div>

                </td>
            </tr>
        </table>
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>








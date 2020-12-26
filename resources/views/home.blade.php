<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UniCloud | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    @include('partials.homeCSS')
</head>

<body>
<div class="background">
    <!--------------------------------------Navigation-->
@include('partials.header')

<!--------------------------------------Main-->
    <div class="welcome">
        <div class="yellowCircle">Bem-vindo à UniCloud!</div>
        <table class="table">
            <tr>
                <td class="tableButtons">
                    <form class="buttons" method="get" enctype="multipart/form-data" id="mainForm">
                        @if (auth()->check())
                            <div class="btn_input_disabled"></div><br>
                            <div class="btn_input_disabled"></div><br><br><br>
                        @else
                            <input class="btn_input" type="submit" id="signup" value="Sign Up" formaction="/register"><br>
                            <input class="btn_input" type="submit" id="login" value="Login" formaction="/login"><br><br><br>
                        @endif
                        <input class="btn_input" type="submit" id="course" value="Cursos" formaction="/degrees">
                    </form>
                </td>
                <td class="bar">
                    <div class="verticalBar"></div>
                </td>
                <td class="news">

                    <div style="font-weight:bold;font-size:20px;">Novidades</div>

                    @foreach($news as $n)
                        <div>{{$n->date ." - " . $n->info}}</div>
                    @endforeach
                </td>
            </tr>
        </table>
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>








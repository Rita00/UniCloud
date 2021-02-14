<!DOCTYPE html>
<html>
<head>

    <title>UniCloud | Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=10">
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="UTF-8">
    <meta property="og:title" content="Unicloud" />
    <meta property="og:description" content="A UniCloud é a plataforma que te vai ajudar quando sentes a falta de materiais de estudo, disponibilizando apontamentos, exames resolvidos e muito mais 🎓" />
    <meta property="og:image" content="/images/preview.png" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/images/favicon-64x64.png" sizes="64x64"/>
	<!--CSS-->
	<link rel="stylesheet" href="css/main.css"> 
	<link rel="stylesheet" href="css/home.css"> 
</head>
<body>
    <!--------------------------------------Navigation-->
	@include('partials.header')
	<!--------------------------------------Main-->
    <div class="main">
        <div class="yellowCircle">Bem-vindo à UniCloud!</div>
        <table class="table">
            <tr>
                <td class="tableButtons">
                    <form class="buttons" method="get" enctype="multipart/form-data" id="mainForm">
                        @if (auth()->check())
                            <div class="btn_input_disabled"></div><br>
                            <div class="btn_input_disabled"></div><br><br><br>
                        @else
                            <input class="btn_input" type="submit" id="signup" value="Sign Up" formaction="/register">
                            <br>
                            <input class="btn_input" type="submit" id="login" value="Login" formaction="/login"><br><br>
                            <br>
                        @endif
                        <input class="btn_input" type="submit" id="course" value="Cursos" formaction="/degrees">
                    </form>
                </td>
                <td class="bar">
                    <div class="verticalBar"></div>
                </td>
                <td class="news">

                    <div style="font-weight:bold;font-size:1.302vw;">Novidades</div>

                    @foreach($news as $n)
                        <div>{{$n->date ." - " . $n->info}}</div>
                    @endforeach
                    <div style="font-weight:bold;font-size:1.302vw; padding-top:5%;/* margin-bottom: 5px; */">
                        Instagram
                    </div>

                    <!-- LightWidget WIDGET -->
                    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
                    <iframe src="//lightwidget.com/widgets/5b145a55df7058638fd5da5e91551bbe.html" scrolling="no"
                            allowtransparency="true" class="lightwidget-widget"
                            style="width:100%;border:0;overflow:hidden; height: 100vh;"></iframe>
                </td>
            </tr>
		</table>
		<!--------------------------------------Footer-->
		@include('partials.footer')
    </div>

</body>
</html>








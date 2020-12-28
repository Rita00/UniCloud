<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>UniCloud | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Unicloud"/>
    <meta property="og:description"
          content="A UniCloud é a plataforma que te vai ajudar quando sentes a falta de materiais de estudo, disponibilizando apontamentos, exames resolvidos e muito mais 🎓"/>
    <meta property="og:image" content="/images/preview.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/images/favicon-64x64.png" sizes="64x64"/>
    @include('partials.aboutUsCSS')
</head>

<body>
<div class="background">
    <!--------------------------------------Navigation-->
@include('partials.header')

<!--------------------------------------Main-->
    <div class="welcome">
        <div class="yellowCircle"></div>
        <div class="label_title">About Us</div>
        <td>
            <div class="form">
                <div style="font-weight:bold;font-size:1.627vw;">Quem somos:</div>
                Um grupo de estudantes da Licenciatura em Engenharia Informática da Universidade de Coimbra.<br><br>
                <div style="font-weight:bold;font-size:1.627vw;">O que é a UniCloud:</div>
                É a plataforma que te vai ajudar quando sentes a falta de materiais de estudo, disponibilizando
                apontamentos, exames resolvidos, entre outros.<br><br>
                <div style="font-weight:bold;font-size:1.627vw;">O nosso Objetivo:</div>
                Ser a principal escolha na procura de materiais de estudo ao longo do teu percurso académico.
            </div>
        </td>

    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>








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
        <div class="title">Termos e Condições</div>
        <div class="form">
            <table class="table">
                <tr class="tableRow">
                    <td class="tableCol" style="text-align:justify">
                        A equipa da Unicloud não se responsabiliza por qualquer tipo de download efetuado na plataforma.
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableCol" style="text-align:justify">
                        Os conteúdos constantes website foram realizados por alunos no âmbito de uma disciplina – Processos de gestão e Inovação - do 3º ano da licenciatura de Engenharia Informática da Faculdade de Ciências e Tecnologia da Universidade de Coimbra (FCTUC), pelo que a FCTUC não se responsabiliza pelo seu conteúdo.
                    </td>
                </tr>
            </table>
        </div>
		<div class="row"></div>
    	<!--------------------------------------Footer-->
    	@include('partials.footer')
    </div>
</body>
</html>

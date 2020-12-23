<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>UniCloud | Upload</title>
    <meta charset="UTF-8">
    @include('partials.loginCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
</head>
<body>
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="label_title">Termos e Condições</div>
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
        @include('partials.formerrors')
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

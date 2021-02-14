<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" href="css/upload.css"> 
	<!--Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/upload.js"></script>
</head>
<body onload="changeType()">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="title">Upload</div>
        <form class="form" method="post" enctype="multipart/form-data" id="uploadForm">
            <table class="table">
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label>Curso</label>
                    </td>
                    <td class="tableCol">
                        <select class="input" name="degree" id="degree" onchange="changeCourse()">
                            @foreach($degrees as $degree)
                                <option value="{{$degree->id}}">{{$degree->nome}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label>Cadeira</label>
                    </td>
                    <td class="tableCol">
                        <select class="input" name="course" id="course">
                            @foreach($courses as $course)
                                @if($course->cursoID)

                                    <option value="{{$course->id}}">{{$course->nome}}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label for="uploadedfile">Carregar ficheiro</label>
                    </td>
                    <td class="tableCol">
                        <input class="input" type="file" name="uploadedfile" id="uploadedfile">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label for="name">Nome do ficheiro</label>
                    </td>
                    <td class="tableCol">
                        <input class="input" type="text" id="name" name="name">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label for="description">Descrição</label>
                    </td>
                    <td class="tableCol">
                        <input class="input" type="text" id="description" name="description">
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label for="category">Categoria</label>
                    </td>
                    <td class="tableCol">
                        <select class="input" name="category" id="category" onchange="changeType()">
                            <option value="Materiais Teóricos">Material Teórico</option>
                            <option value="Materiais Práticos">Material Prático</option>
                            <option value="Exames">Exames</option>
                        </select>
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label>Sub-Categoria</label>
                    </td>
                    <td class="tableCol">
                        <select class="input" name="subcategory" id="subcategory"></select>
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label>Tags</label>
                    </td>
                    <td class="tableCol">
                        <div class="tags">
                            <input class="input_tag" type="text" name="tag1" id="tag1">
                            <input class="input_tag" type="text" name="tag2" id="tag2">
                            <input class="input_tag" type="text" name="tag3" id="tag3">
                        </div>
                    </td>
                </tr>
            </table>
            <div class="btn_form">
                <input class="btn_return" type="submit" name="button" value="Voltar">
                @if (auth()->check())
                    <input class="btn_upload" type="submit" name="button" value="Upload">
                @else
                    <input class="btn_upload_disabled" type="submit" name="button" value="Upload" title="Login necessário para realizar upload">
                @endif

            </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </form>
	<!--------------------------------------Footer-->
	@include('partials.footer')
    </div>
</body>
</html>

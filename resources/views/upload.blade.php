<!DOCTYPE html>
<html>
<head>
    <title>UniCloud | Upload</title>
    <meta charset="UTF-8">
    @include('partials.uploadCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <script>
        function changeType(){
            let teoric = document.getElementById('teoric');
            let pratic = document.getElementById('pratic');
            let exams = document.getElementById('exams');

            switch(document.getElementsByTagName('select')[0].value){
                case "teoric":
                    teoric.style.display = 'inline';
                    pratic.style.display = 'none';
                    exams.style.display = 'none';
                    break;
                case "pratic":
                    teoric.style.display = 'none';
                    pratic.style.display = 'inline';
                    exams.style.display = 'none';
                    break;
                case "exams":
                    teoric.style.display = 'none';
                    pratic.style.display = 'none';
                    exams.style.display = 'inline';
                    break;
            }
        }
    </script>
</head>
<body onload="changeType()">
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <label class="label_title">Upload</label>
        <form class="form" method="post" enctype="multipart/form-data" id="uploadForm">
            <table class="table">
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
                            <option class="input_category" value="teoric" >Material Teorico</option>
                            <option class="input_category" value="pratic" >Material Prático</option>
                            <option class="input_category" value="exams" >Exames</option>
                        </select>
                    </td>
                </tr>
                <tr class="tableRow">
                    <td class="tableColLabel">
                        <label>Sub-Categoria</label>
                    </td>
                    <td class="tableCol">
                        <select class="input" name="subcategory" id="teoric">
                            <option value="handmade_notes">Apontamentos Manuscritos</option>
                            <option value="digital_notes">Apontamentos digitais</option>
                            <option value="slides" >Slides</option>
                            <option value="syllabus">Sebentas</option>
                            <option value="others">Outros</option>
                        </select>
                        <select class="input" name="subcategory" id="pratic">
                            <option value="enunciations">Enunciados</option>
                            <option value="exercises">Exercicios Resolvidos</option>
                            <option value="projects">Projetos</option>
                            <option value="others">Outros</option>
                        </select>
                        <select class="input" name="subcategory" id="exams">
                            <option value="midterms">Frequencias</option>
                            <option value="tests">Testes</option>
                            <option value="exams">Exames</option>
                            <option value="others">Outros</option>
                        </select>
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
                <input class="btn_return" type="submit" value="Voltar">
                <input class="btn_upload" type="submit" value="Upload">
            </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </form>
    </div>
</div>
</body>
</html>

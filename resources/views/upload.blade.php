<!DOCTYPE html>
<html>
<head>
    <title>UniCloud | Upload</title>
    <meta charset="UTF-8">
    @include('partials.mainCSS')
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
<div class="fundo">
    <div class="navbar">
        <div class="logo"></div>
        <div class="Home">Home</div>
        <div class="searchBar"></div>
        <div class="procurarT">Procurar</div>
        <div class="lupa"></div>
        <div class="lupa2"></div>
    </div>
    <div class="main">
        <div class="barraT1"></div>
        <div class="bolaLand"></div>
        <label class="label_title">Upload</label>
        <form class="form" method="post" enctype="multipart/form-data" id="uploadForm">
            <div>
                <label class="label_upload" for="uploadedfile">Carregar ficheiro</label>
                <input class="input_upload" type="file" id="uploadedfile" name="uploadedfile">
            </div>
            <div>
                <label class="label_name" for="name">Nome do ficheiro</label>
                <input class="input_name" type="text" id="name" name="name">
            </div>
            <div>
                <label class="label_category" for="category">Categoria</label>
                <select class="input_category" name="category" id="category" onchange="changeType()">
                    <option class="input_category" value="teoric" >Material Teorico</option>
                    <option class="input_category" value="pratic" >Material Prático</option>
                    <option class="input_category" value="exams" >Exames</option>
                </select>
            </div>
            <div>
                <label class="label_description" for="description">Descrição</label>
                <textarea class="input_description" form="uploadForm" id="description" name="description"></textarea>
            </div>
            <div>
                <label class="label_type" for="description">Tipo</label>
                <div id="teoric">
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory00" value="handmade_notes">
                    <label class="label_subcat" for="subCategory00">Apontamentos Manuscritos</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory01" value="digital_notes">
                    <label class="label_subcat" for="subCategory01">Apontamentos digitais</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory02" value="slides">
                    <label class="label_subcat" for="subCategory02">Slides</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory03" value="syllabus">
                    <label class="label_subcat" for="subCategory03">Sebentas</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory04" value="others">
                    <label class="label_subcat" for="subCategory04">Outros</label><br>
                </div>
                <div id="pratic">
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory10" value="enunciations">
                    <label class="label_subcat" for="subCategory10" >Enunciados</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory11" value="exercises">
                    <label class="label_subcat" for="subCategory11">Exercicios Resolvidos</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory12" value="projects">
                    <label class="label_subcat" for="subCategory12">Projetos</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory13" value="others">
                    <label class="label_subcat" for="subCategory13">Outros</label><br>
                </div>
                <div id="exams">
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory20" value="midterms">
                    <label class="label_subcat" for="subCategory20">Frequencias</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory21" value="tests">
                    <label class="label_subcat" for="subCategory21">Testes</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory22" value="exams">
                    <label class="label_subcat" for="subCategory22">Exames</label>
                    <input class="input_subcat" type="radio" name="subCategory" id="subCategory23" value="others">
                    <label class="label_subcat" for="subCategory23">Outros</label><br>
                </div>
            </div>
            <div  id="tags">
                <label class="label_tags">Tags</label>
                <input class="input_tag1" type="text" name="tag1" id="tag1">
                <input class="input_tag2" type="text" name="tag2" id="tag2">
                <input class="input_tag3" type="text" name="tag3" id="tag3">
            </div>
            <div class="btn_form">
                <input class="btn_return" type="submit" value="Return">
                <input class="btn_upload" type="submit" value="Upload">
            </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </form>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>UniCloud | Upload</title>
    <meta charset="UTF-8">
    @include('partials.uploadCSS')
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function changeType(){
            let subCatSelect = document.getElementById('subcategory');
            let namesArray = [
                "Apontamentos Manuscritos","Apontamentos digitais","Slides","Sebentas","Outros",
                "Enunciados", "Exercicios Resolvidos", "Projetos", "Outros",
                "Frequencias", "Testes", "Exames", "Outros"
            ];
            var begin=0;
            var end=0;
            switch(document.getElementById('category').value){
                case "Materiais Teóricos":
                    begin=0;
                    end=5;
                    break;
                case "Materiais Práticos":
                    begin=5;
                    end=9;
                    break;
                case "Exames":
                    begin=9;
                    end=namesArray.length;
                    break;
            }
            var option;
            while (subCatSelect.lastElementChild) {
                subCatSelect.removeChild(subCatSelect.lastElementChild);
            }
            for(var i=begin;i<end;i++){
                option = document.createElement("OPTION");
                option.appendChild(document.createTextNode(namesArray[i]));
                option.value=namesArray[i];
                subCatSelect.appendChild(option);
            }
        }
        function changeCourse(){
            let id = document.getElementById("degree").value;
            $.ajax({
                type: "get",
                url: "upload",
                data: {course: id},
                dataType: "json",
                success: function (resposta){
                    console.log(resposta);
                    let options = document.getElementById("course").options;
                    let len = options.length;
                    for(let i = 0; i < len; i++){
                        options.remove(0);
                    }
                    for (let course of resposta["courses"]){
                        let option = document.createElement("option");
                        option.value = course["id"];
                        option.text = course["nome"];
                        options.add(option);
                    }
                }
                });
        }
    </script>
</head>
<body onload="changeType()">
<div class="background">
    @include('partials.header')
    <div class="main">
        <div class="yellowCircle"></div>
        <div class="label_title">Upload</div>
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
    </div>
    <!--------------------------------------Footer-->
    @include('partials.footer')
</div>
</body>
</html>

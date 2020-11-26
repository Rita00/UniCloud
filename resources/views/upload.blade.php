<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<style>

		/* Width */
		::-webkit-scrollbar {
		width: 10px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		box-shadow: inset 0 0 5px grey;
		border-radius: 10px;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
		background: #008CBA;
		border-radius: 10px;
		}

		header {
		padding: 10px 50px; /* top and bottom, right and left */
		text-align: left;
		border: 1px solid black;
		}

		form {
		float: right;
		padding: 80px 0;
		width: 100%;
		background-color: #f1f1f1;
		}

		.text {
		padding-left: 2cm;
		}

		.button {
		border: none;
		color: white;
		background-color: #008CBA;
		padding: 10px 10px;
		width: 350px;
		height: 100px;
		border-radius: 8px;
		text-align: center;
		display: inline-block;
		font-size: 16px;
		margin: 2px 5px;
		transition: all 0.5s;
		cursor: pointer;

		}

		.button:hover{
			background: #0b7dda;
		}

		.button span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
		}

		.button span:after {
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.5s;
		}

		.button:hover span {
		padding-right: 25px;
		}

		.button:hover span:after {
		opacity: 1;
		right: 0;
		}


		</style>
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
        <title>UniCloud - Upload</title>
	</head>
	<body onload="changeType()">
        @include('partials.navbar')
		<header>
		<img src="https://www.facebook.com/unicloudpt/photos/a.120314763217886/123060066276689/?type=1&theater" alt="Logo" width=10% height=10%>
		</header>
		<form method="post" enctype="multipart/form-data" id="uploadForm">

			<h3 class="text">Upload</h3>

            <label for="uploadedfile">Carregar ficheiro</label>
            <input type="file" id="uploadedfile" name="uploadedfile"><br>

            <label for="name">Nome do ficheiro</label>
            <input type="text" id="name" name="name"><br>

            <label for="category">Categoria</label>
			<select name="category" id="category" onchange="changeType()">
				<option value="teoric" >Material Teorico</option>
				<option value="pratic" >Material Prático</option>
				<option value="exams" >Exames</option>
			</select><br>

            <label for="description">Descrição</label>
            <textarea form="uploadForm" id="description" name="description"></textarea><br>

			<div id="teoric">
				<input type="radio" name="subCategory" id="subCategory00" value="handmade_notes">
				<label for="subCategory00">Apontamentos Manuscritos</label>
				<input type="radio" name="subCategory" id="subCategory01" value="digital_notes">
				<label for="subCategory01">Apontamentos digitais</label>
				<input type="radio" name="subCategory" id="subCategory02" value="slides">
				<label for="subCategory02">Slides</label>
				<input type="radio" name="subCategory" id="subCategory03" value="syllabus">
				<label for="subCategory03">Sebentas</label>
				<input type="radio" name="subCategory" id="subCategory04" value="others">
				<label for="subCategory04">Outros</label><br>
			</div>
			<div id="pratic">
				<input type="radio" name="subCategory" id="subCategory10" value="enunciations">
				<label for="subCategory10" >Enunciados</label>
				<input type="radio" name="subCategory" id="subCategory11" value="exercises">
				<label for="subCategory11">Exercicios Resolvidos</label>
				<input type="radio" name="subCategory" id="subCategory12" value="projects">
				<label for="subCategory12">Projetos</label>
				<input type="radio" name="subCategory" id="subCategory13" value="others">
				<label for="subCategory13">Outros</label><br>
			</div>
			<div id="exams">
				<input type="radio" name="subCategory" id="subCategory20" value="midterms">
				<label for="subCategory20">Frequencias</label>
				<input type="radio" name="subCategory" id="subCategory21" value="tests">
				<label for="subCategory21">Testes</label>
				<input type="radio" name="subCategory" id="subCategory22" value="exams">
				<label for="subCategory22">Exames</label>
				<input type="radio" name="subCategory" id="subCategory23" value="others">
				<label for="subCategory23">Outros</label><br>
			</div>

            <div id="tags">
                <label for="tag1">Tag1</label>
                <input type="text" name="tag1" id="tag1"><br>
                <label for="tag2">Tag2</label>
                <input type="text" name="tag2" id="tag2"><br>
                <label for="tag3">Tag3</label>
                <input type="text" name="tag3" id="tag3"><br>
            </div>

            <input type="submit" value="Return" class="button" style="vertical-align:middle">
            <input type="submit" value="Upload" class="button" style="vertical-align:middle">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
		</form>

	</body>
</html>

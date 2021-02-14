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
// Variable global para almancenar el listado de las categorías seleccionadas
var arrayCategories = []


$("#addElement").click(function(e) {
	//Deshabilitar el envio por HTTP
	e.preventDefault()

	let idCategory 		= $("#category").val()
	let nameCategory 	= $("#category option:selected").text()

	
	if (idCategory != '') {

		if(typeof existCategory(idCategory) === 'undefined') {

			arrayCategories.push({
				'id'  :  idCategory,
				'name':  nameCategory
			})
		} else {
			alert("La Categoría ya se Encuentra Seleccionada")
		}

		showCategories()

	} else {
		alert("Debe Seleccionar una Categoría ")
	}

	console.log(arrayCategories)

})


function existCategory(idCategory) {	
	
	let existCategory = arrayCategories.find(function (category) {
		return category.id == idCategory
	})
	return existCategory

}

function showCategories() {
	$("#list-categories").empty()

	arrayCategories.forEach(function (category) {
		$("#list-categories").append('<div class="form-group"><button class="btn btn-danger" onclick="removeElement('+category.id+')">X</button><span>'+category.name+'</span></div>')
	})
}

function removeElement(idCategory) {
	let index = arrayCategories.indexOf(existCategory(idCategory))
	arrayCategories.splice(index, 1)
	showCategories()
}
	document.addEventListener("DOMContentLoaded", function() {
	let form = document.getElementById('form_subir');

	form.addEventListener("submit", function(event){
		event.preventDefault();
		subir_archivos(this);
	});
});

function subir_archivos(form) {
	// body...
	let barra_estado = form.children[1].children[0],
	span = barra_estado.children[0],
	botom_cancelar = form.children[2].children[0];

	barra_estado.classList.remove('barra_verde','barra_roja');

	//peticion 
	let peticion = new XMLHttpRequest();

	//progreso

	peticion.upload.addEventListener("progress", function(event) {
		let porcentaje = Math.round((event.loaded / event.total) * 100);

		console.log(porcentaje);

		barra_estado.style.width = porcentaje+'%';

		span.innerHTML = porcentaje+'%';
	});

	//Finalizado
	peticion.addEventListener("load", function() {
		barra_estado.classList.add('barra_verdera');
		span.innerHTML = "Imagen Cargada";
	});

		//enviar datos
	peticion.open('post', 'subir.php');
	peticion.send(new FormData(form));

	//cancelar

	botom_cancelar.addEventListener("click", function() {
		peticion.abort();
		barra_estado.classList.remove('barra_verde');
		span.innerHTML = "Cancelado";

	});
}
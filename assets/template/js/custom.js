function movieSearch() {
	var movieInput = $(".movieTitle").val();
	let url = "https://imdb-api.com/es/API/Search/k_lv8u20f0/" + movieInput;
	const api = new XMLHttpRequest();
	api.open("GET", url, true);
	api.send();

	api.onreadystatechange = function () {
		if (this.status == 200 && this.readyState == 4) {
			let datos = JSON.parse(this.responseText);
			let resultado = document.querySelector("#resultado");
			resultado.innerHTML = "";

			for (let item of datos.results) {
				resultado.innerHTML += `<li class="item"> <img src="${item.image}" alt="banner"> <br> ${item.title} <br> ${item.description}</li>`;
			}
		}
	};
}

function serieSearch() {
	var serieInput = $(".serieTitulo").val();
	let url = "https://imdb-api.com/es/API/SearchSeries/k_lv8u20f0/" + serieInput;
	const api = new XMLHttpRequest();
	api.open("GET", url, true);
	api.send();

	api.onreadystatechange = function () {
		if (this.status == 200 && this.readyState == 4) {
			let datos = JSON.parse(this.responseText);
			let resultado = document.querySelector("#resultado");
			resultado.innerHTML = "";

			for (let item of datos.results) {
				resultado.innerHTML += `<li class="item"> <img src="${item.image}" alt="banner"> <br> ${item.title} <br> ${item.description}</li>`;
			}
		}
	};
}

function movieSearc() {
    var movieInput = $(".movieTitle").val();
    let url = 'https://imdb-api.com/en/API/Search/k_lv8u20f0/' + movieInput;
    const api = new XMLHttpRequest();
    api.open('GET', url, true);
    api.send();

    api.onreadystatechange = function () {
        if(this.status == 200 && this.readyState == 4){
            let datos = JSON.parse(this.responseText);
            console.log(datos.results);
            let resultado = document.querySelector('#resultado');
            resultado.innerHTML = '';

            for (let item of datos.results){
                resultado.innerHTML += `<li class="item"> <img src="${item.image}" alt="banner"> <br> ${item.title} <br> ${item.description}</li>`
            }
        }
    }
}
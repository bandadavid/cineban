<h1>Series</h1>

<div class="insights">
    <div class="middle">
        <div class="inputs">
            <input class="serieTitulo" id="serieTitulo" name="serieTitulo" type="text" placeholder="Ingrese el nombre de la serie">&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="azul" id="buscar" onclick="serieSearch()">&nbsp;&nbsp;Buscar&nbsp;&nbsp;</button>
        </div>


    </div>
    <div class="contenedorPeliculas">
        <ul id="resultado"></ul>
    </div>
</div>
</main>



<script>
    window.onload = function() {
        let url = "https://imdb-api.com/en/API/MostPopularTVs/k_lv8u20f0/";
        const api = new XMLHttpRequest();
        api.open("GET", url, true);
        api.send();

        api.onreadystatechange = function() {
            if (this.status == 200 && this.readyState == 4) {
                let datos = JSON.parse(this.responseText);

                let resultado = document.querySelector("#resultado");
                resultado.innerHTML = "";


                for (let item of datos['items'].slice(0, 20)) {
                    resultado.innerHTML += `<li class="item"> <img src="${item.image}" alt="banner"> <br> ${item.title}`;
                }
            }
        };
    }

    $('#movieTitle').on('keyup', function(e) {
        if (e.keyCode === 13) {
            $('#buscar').click();
        }
    });
</script>
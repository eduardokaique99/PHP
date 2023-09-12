<?php
$titulo = "Exercício Json";
include __DIR__ . '/header.php';
?>

<main>
    <div class="container">
        <h1>Exercício Json</h1>
        <div id="noticias">
            Lista de notícias
        </div>
    </div>
</main>

<script>
    let dados = fetch('./rest/index.php')
        .then(response => response.json())
        .then(data => criarNoticias(data));

    function criarNoticias(dados) {
        let noticias = document.getElementById('noticias');
        // inserir estes resultados dentro da DIV Notícias
        dodas.forEach(function(noticia) {
            let div = document.createElement('div');
            let h2 = document.createElement('h2');
            let p = document.createElement('p');
            let hr = document.createElement('hr');

            h2.innerHTML = noticia.titulo;
            p.innerHTML = noticia.descricao;

            div.appendChild(h2);
            div.appendChild(p);
            div.appendChild(hr);

            noticias.appendChild(div);
        });


    }
</script>

<?php
include __DIR__ . '/footer.php';
?>
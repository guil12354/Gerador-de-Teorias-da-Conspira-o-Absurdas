document.getElementById("btnGerar").addEventListener("click", function () {

    const assunto = document.getElementById("assunto").value;

    fetch("api/controller/controller.php?assunto=" + encodeURIComponent(assunto))
        .then(response => response.json())
        .then(data => {

            document.getElementById("resultado").innerHTML =
                "<h2>Teoria encontrada:</h2>" +
                "<p>" + data.frase + "</p>";

        })
        .catch(error => {
            document.getElementById("resultado").innerHTML =
                "Erro ao gerar a teoria.";
        });

});
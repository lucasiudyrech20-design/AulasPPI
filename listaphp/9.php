
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Números Primos</title>
</head>
<body>

    <h2>Encontrar números primos</h2>

    <label for="inicio">Número inicial:</label>
    <input type="number" id="inicio">

    <br><br>

    <label for="fim">Número final:</label>
    <input type="number" id="fim">

    <br><br>

    <button onclick="verificar()">Verificar</button>

    <div id="resultadoPrimos"></div>

    <script>

        function ehPrimo(n) {
            if(n < 2) {
                return false;
            }

            for(let i = 2; i < n; i++) {
                if(n % i == 0) {
                    return false;
                }
            }

            return true;
        }

        function verificar() {

            let inicio = Number(document.getElementById("inicio").value);
            let fim = Number(document.getElementById("fim").value);

            let resultado = document.getElementById("resultadoPrimos");

            resultado.innerHTML = "";

            if(document.getElementById("inicio").value == "" ||
               document.getElementById("fim").value == "") {
                resultado.innerHTML = "Preencha os dois campos!";
                return;
            }

            // Normalizar os limites
            if(inicio > fim) {
                let aux = inicio;
                inicio = fim;
                fim = aux;
            }

            let primos = [];

            for(let i = inicio; i <= fim; i++) {
                if(ehPrimo(i)) {
                    primos.push(i);
                }
            }

            if(primos.length > 0) {
                resultado.innerHTML = "Números primos: " + primos.join(", ");
            } else {
                resultado.innerHTML = "Nenhum número primo encontrado.";
            }
        }

    </script>

</body>
</html>

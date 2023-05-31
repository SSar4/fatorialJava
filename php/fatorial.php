<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Fatorial</title>
</head>
<body>
    <h1>Calculadora de Fatorial</h1>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número digitado pelo usuário
        $numero = $_POST["numero"];

        // Validação simples para garantir que o número é um inteiro positivo
        if (is_numeric($numero) && $numero >= 0 && floor($numero) == $numero) {
            // Função para calcular o fatorial
            function calcularFatorial($numero) {
                if ($numero == 0) {
                    return 1;
                } else {
                    return $numero * calcularFatorial($numero - 1);
                }
            }

            // Chama a função para calcular o fatorial
            $fatorial = calcularFatorial($numero);

            // Exibe o resultado
            echo "<p>O fatorial de $numero é $fatorial.</p>";
        } else {
            // Exibe uma mensagem de erro se o número não for válido
            echo "<p>Por favor, digite um número inteiro positivo.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular Fatorial</button>
    </form>
</body>
</html>

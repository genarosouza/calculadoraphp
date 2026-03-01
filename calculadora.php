<?php
$resultado = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = isset($_POST['n1']) ? (float) $_POST['n1'] : 0;
    $n2 = isset($_POST['n2']) ? (float) $_POST['n2'] : 0;
    $operador = $_POST['operador'] ?? '';
    switch ($operador) {
        case '+':
            $resultado = $n1 + $n2;
            break;
        case '-':
            $resultado = $n1 - $n2;
            break;

        case '*':
            $resultado = $n1 * $n2;
            break;
        case '/':
            $resultado = ($n2 == 0) ? "Erro: divisão por zero" : $n1 / $n2;
            break;
        default:
            $resultado = "Operador inválido";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="calculadora">
    <div class="nomecalculadora">
        <h1>Calculadora</h1>
    </div>
    <form method="post">
        <input class="n1" type="number" name="n1" placeholder="Primeiro número" required>
        <div class="operadores">
            <label>
                <input type="radio" name="operador" value="+" required>
                Somar
            </label>
            <label>
                <input type="radio" name="operador" value="-">
                Subtrair
            </label>
            <label>
                <input type="radio" name="operador" value="*">
                Multiplicar
            </label>
            <label>
                <input type="radio" name="operador" value="/">
                Dividir
            </label>
        </div>
        <input class="n2" type="number" name="n2" placeholder="Segundo número" required>
        <button type="submit">Calcular</button>
    </form>
    <div class="resultado">
        <?php echo $resultado; ?>
    </div>
</div>
</body>
</html>

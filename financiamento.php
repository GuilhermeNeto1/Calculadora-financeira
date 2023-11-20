<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Financiamento veicular</title>

    <style>
        .box {
            text-align: center;
        }

        fieldset {
            border: solid 3px;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }

        table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>


</head>

<body style="background-color: silver;">
    <form action="financiamento.php" method="POST">

        <figure>
            <a href="testeprojeto.php">
                <h2>🠔 Voltar</h2>
            </a>
        </figure>

        <div class=box>
            <br></br><br></br><br>
            <h1>Financiamento Veícular</h1></br>
            <fieldset>
                <legend>Parâmetros</legend>
                Qual o valor do veículo?<input type="float" name="valor" /></br>
                Qual o valor de entrada?<input type="float" name="entrada" /></br>
                Informe a taxa média:<input type="float" name="taxa" /></br>
                Em quantas vezes vai pagar?<input type="number" name="prestacoes" /></br>

            </fieldset></br>
            <input type="submit" name="Enviar" />

    </form>
</body>

</html>

<?php
if(isset($_POST['valor'])){

$valor = $_POST['valor'];
$entrada = $_POST['entrada'];
$taxa = $_POST['taxa'];
$prestacoes = $_POST['prestacoes'];

$taxa = $valor * ($taxa / 100);
$parcelas = $taxa + ($valor / $prestacoes);

echo "<h2>SIMULAÇÃO</h2></br>";

echo "
<table border=4>
    <tr>
        <td>Valor estimado das parcelas</td>
        <td>Juros totais</td>
        <td>Valor financiado</td>
        <td>Valor de entrada</td>
    </tr>
    <tr>
        <td>R$ " . number_format($parcelas, 2, ',') . "</td>
        <td>R$ " . ($parcelas * $prestacoes) - $valor . "</td>
        <td>R$ " . ($valor - $entrada) . "</td>
        <td>R$ " . $entrada . "</td>
    </tr>
</table>";
echo "</div>";
}
?>
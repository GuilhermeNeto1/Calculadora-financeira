<html>
<head>
    <style>
        h2{
            font-size:20;
        }
        legend{
            font-size:30;
        }
    </style>
</head>

 <body style="background-color: green;">

    <form action="consorcio.php" method="POST">

        <h1>SIMULADOR DE CONSÓRCIO</h1>

        <fieldset>
        <legend>Paramêtros</legend>
        Valor do bem: R$ <input type="float" name="valor"/></br></br>
        Em quantos meses deseja pagar?<input type="number" name="prestacoes"/></br></br>
        Taxa administrativa: <input type="float" name="taxa"/>%</br></br>
        </fieldset></br>

        <input type="submit" name="Enviar"/>

    </form>

</body>


</html>

<?php

$valor = $_POST['valor'];
$prestacoes = $_POST['prestacoes'];
$taxa = $_POST['taxa'];

$taxas = ($valor * ($taxa/100)) / $prestacoes;
$parcelas = ($valor / $prestacoes) + $taxas;
$montantetaxas = $valor * ($taxa/100);

//inicial
$ultimaparcela = $parcelas;
$valorfuturo = $valor;

$anos = $prestacoes / 12;

for($i = 0;$i<$anos;$i++){
    $ultimaparcela = $ultimaparcela + ($ultimaparcela * 0.06);
    $valorfuturo = $valorfuturo + ($valorfuturo * 0.06);
}

echo "SIMULAÇÃO";
echo "_________________________________________</br>";
echo "Valor estimado da parcelas: R$ " . number_format($parcelas,2,',');
echo "</br>_____________________________________________________</br>";
echo "Montante em taxas: R$ " . $montantetaxas;
echo "</br>_____________________________________________________</br>";
echo "Valor da ultima parcela: R$ " . number_format($ultimaparcela,2,',');
echo "</br>_____________________________________________________</br>";
echo "Valor futuro do bem: R$ " . number_format($valorfuturo,2,',');
echo "</br>_____________________________________________________</br>";





?>

<html>
<head>
    <style>
        h2{
            font-size:20;
            color:black;
        }
        legend{
            font-size:30;
        }
        table{
            font-size:30px;
            text-align:center;
        }
            
        
    </style>
</head>

 <body style="background-color: silver;">

    <form action="consorcio.php" method="POST">

        <figure>
            <a href="testeprojeto.php"><h2>🠔 Voltar</h2></a>
        </figure>

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
if(isset($_POST['valor'])){

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

echo 
"<h2>SIMULAÇÃO</h2>
<table border=4>
    <tr>
        <td>Valor estimado das parcelas</td>
        <td>Montante em taxas</td>
        <td>Valor da ultima parcela</td>
        <td>Valor futuro do bem</td>
    </tr>
    <tr>
        <td>R$ " . number_format($parcelas,2,',') . "</td>
        <td>R$ " . $montantetaxas . "</td>
        <td>R$ " . number_format($ultimaparcela,2,',') . "</td>
        <td>R$ " . number_format($valorfuturo,2,',') . "</td>
    </tr>
</table>";
}
?>
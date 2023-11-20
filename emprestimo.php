<html>

<head>
    <style>
        h2{
            font-size:20;
            color: black;
        }
        legend{
            font-size:30;
        }
        table{
            font-size:20px;
        }
    </style>
</head>

<body style="background-color: silver;">
    <form action="emprestimo.php" method="POST">

    <figure>
        <a href="testeprojeto.php"><h2>🠔 Voltar</h2></a>
    </figure>

    <h1>SIMULADOR DE EMPRESTIMOS</h1>
    <fieldset>
    <legend>Parametros</legend>
    <h2>Valor do emprestimo:<input type="float" name="valor"/></h2></br></br>
    
    <h2>Numero de parcelas:<input type="number" name="parcelas"/></h2></br></br>

    <h2>Tipo de parcelas:</h2>
    <select name="tipo">
        <option value="fixas">Fixas (Tabela Price)</option>
        <option value="decrescente">Decrescente (Tabela SAC)</option>
    </select></br></br></br>

    <h2>Valor da taxa de juros:<input type="float" name="juros"/>%</h2></br></br>
    <h2>Data da primeira parcela:<input type="datetime-local" name="data"/></h2></br>
    </fieldset>
    </br>
    <input type="submit" name="Enviar"/></br>
    </form>
</body>
</html>

<?php
if(isset($_POST['valor'])){
$valor = $_POST['valor'];
$parcelas = $_POST['parcelas'];
$juros = $_POST['juros'];
$data = $_POST['data'];
$tipo = $_POST['tipo'];

echo "<h2>SIMULAÇÃO</h2>";

if ($tipo == "decrescente"){
    //inicial:
    $amortizacao = ($valor / $parcelas);
    $saldo = $valor;
    $valorjuros = ($valor * ($juros/100));
    $valorparcela = ($valorjuros + $amortizacao);

    for($i = 1;$i<=$parcelas;$i++){
        echo "Parcela: " . $i . " | Valor: R$" . number_format($valorparcela,2,',') . " | Amortização: R$" . number_format($amortizacao,2,',') . " | Juros: R$" . number_format($valorjuros,2,',') . " | Saldo devedor: R$" . number_format($saldo,2,',') . " |</br>";
        echo "_____________________________________________</br>";
        $saldo = $saldo - $amortizacao;
        $valorjuros = $saldo * ($juros/100);
        $valorparcela = $valorjuros + $amortizacao;
    }
    echo "TOTAIS: ";
}

else{
    //inicial:
    $saldo = $valor;
    $valorjuros = ($valor * ($juros/100));
    $valorparcela = $valor * ((($juros/100)*((($juros/100) + 1)**$parcelas))/((1 + ($juros/100))**$parcelas - 1));
    $amortizacao = $valorparcela - $valorjuros;
    
    for($i = 1;$i<=$parcelas;$i++){
        #echo "Parcela: " . $i . " | Valor: R$" . number_format($valorparcela,2,',') . " | Amortização: R$" . number_format($amortizacao,2,',') . " | Juros: R$" . number_format($valorjuros,2,',') . " | Saldo devedor: R$" . number_format($saldo,2,',') . " |</br>";
        #echo "_____________________________________________</br>";
        echo 
        "<table border=5>
            <tr><td>Parcela: " . $i . "</td>
                <td>Valor: R$ " . number_format($valorparcela,2,',') . "</td>
                <td>Amortização: R$ " . number_format($amortizacao,2,',') . "</td>
                <td>Juros: R$ " . number_format($valorjuros,2,',') . "</td>
                <td>Saldo devedor: R$ " . number_format($saldo,2,',') . "</td>
            </tr>
        </table></br>";

        $saldo = $saldo - $amortizacao;
        $valorjuros = $saldo * ($juros/100);
        $amortizacao = $valorparcela - $valorjuros;
    }
}
}
?>
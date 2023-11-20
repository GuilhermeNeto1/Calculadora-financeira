<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Investimentos</title>

    <style>
        legend {
            font-size: 20px;
            color: red;
        }

        fieldset {
            border: solid 2px;
            float: left;
        }

        .space {
            clear: both;
        }

        .box {
            background-color: lightskyblue;
            text-align: center;
            margin: auto;
            width: 30%;
            border: 3px solid black;
            padding: 10px;
        }

        h1 {
            font-size: 30px;
            color: red;
        }

        h4 {
            font-size: 20px;
            color: black;
        }
    </style>


</head>

<body style="background-color: azure;">

    <form action="investimentos.php" method="POST">
        
        <figure>
            <a href="testeprojeto.php">
                <h2>🠔 Voltar</h2>
            </a>
        </figure>

        <fieldset>
            <legend>POUPANÇA</legend>
            Qual valor você gostaria de investir?<input type="float" name="poupanca" /></br></br>
            Quanto gostaria de depositar por mês?<input type="float" name="aportes[]" /></br></br>
            Por quanto tempo gostaria de deixar o dinheiro investido?<input type="float" name="tempo[]" /></br></br>

            <input type="submit" name="Enviar"></br></br></br>
        </fieldset>

        <fieldset>
            <legend>TESOURO PREFIXADO</legend>
            Qual valor você gostaria de investir?<input type="float" name="tesouro" /></br></br>
            Quanto gostaria de depositar por mês?<input type="float" name="aportes[]" /></br></br>
            Por quanto tempo gostaria de deixar o dinheiro investido?<input type="float" name="tempo[]" /></br></br>

            <input type="submit" name="Enviar"></br></br></br>
        </fieldset>

        <fieldset>
            <legend>SELIC</legend>
            Qual valor você gostaria de investir?<input type="float" name="selic" /></br></br>
            Quanto gostaria de depositar por mês?<input type="float" name="aportes[]" /></br></br>
            Por quanto tempo gostaria de deixar o dinheiro investido?<input type="float" name="tempo[]" /></br></br>

            <input type="submit" name="Enviar"></br></br></br>
        </fieldset>

        <fieldset>
            <legend>IPCA</legend>
            Qual valor você gostaria de investir?<input type="float" name="ipca" /></br></br>
            Quanto gostaria de depositar por mês?<input type="float" name="aportes[]" /></br></br>
            Por quanto tempo gostaria de deixar o dinheiro investido?<input type="float" name="tempo[]" /></br></br>

            <input type="submit" name="Enviar"></br></br></br>
        </fieldset>

        <fieldset>
            <legend>CDB E LC</legend>
            Qual valor você gostaria de investir?<input type="float" name="cdb" /></br></br>
            Quanto gostaria de depositar por mês?<input type="float" name="aportes[]" /></br></br>
            Por quanto tempo gostaria de deixar o dinheiro investido?<input type="float" name="tempo[]" /></br></br>

            <input type="submit" name="Enviar"></br></br></br>
        </fieldset>

        <fieldset>
            <legend>LCI E LCA</legend>
            Qual valor você gostaria de investir?<input type="float" name="lci" /></br></br>
            Quanto gostaria de depositar por mês?<input type="float" name="aportes[]" /></br></br>
            Por quanto tempo gostaria de deixar o dinheiro investido?<input type="float" name="tempo[]" /></br></br>

            <input type="submit" name="Enviar"></br></br></br>
        </fieldset>
        <div class="space" ;></br></br></br></div>

    </form>

</body>

</html>

<?php
if (isset($_POST['poupanca'])) {

    $poupanca = $_POST['poupanca'];
    $tesouro = $_POST['tesouro'];
    $selic = $_POST['selic'];
    $ipca = $_POST['ipca'];
    $cdb = $_POST['cdb'];
    $lci = $_POST['lci'];
    $aportes = $_POST['aportes'];
    $tempo = $_POST['tempo'];
    $rendimento = 0;
    $total = 0;

    if ($poupanca != null) {

        for ($i = 0; $i < $tempo[0]; $i++) {
            $rendimento = $rendimento + ($poupanca * 0.005) + ($aportes[0] * 0.005);
            $total = $poupanca + $aportes[0] + $rendimento;
        }

        $total = $total + ($aportes[0] * $tempo[0]);
        echo "<div class=box><h1>Simulação Poupança</h1>";
        echo "<h4>Em " . $tempo[0] . " meses você teria: R$" . $total;
        echo "</br>Valor liquído com impostos descontados";
        echo "</br>Total investido: R$ " . ($poupanca + $aportes[0] * $tempo[0]);
        echo "</br>Seu dinheiro rendeu: R$ " . ($total - ($poupanca + $aportes[0] * $tempo[0])) . "</h4></div>";
    }

    if ($tesouro != null) {

        for ($i = 0; $i < $tempo[1]; $i++) {
            $rendimento = $rendimento + ($tesouro * 0.0108) + ($aportes[1] * 0.0108);
            $total = $tesouro + $aportes[1] + $rendimento;
            $total = $total - ($rendimento * 0.225);
        }

        $total = $total + ($aportes[1] * $tempo[1]);
        echo "<div class=box><h1>Simulação Tesouro Prefixado</h1>";
        echo "<h4>Em " . $tempo[1] . " meses você teria: R$" . $total;
        echo "</br>Valor liquído com impostos descontados";
        echo "</br>Total investido: R$ " . ($tesouro + $aportes[1] * $tempo[1]);
        echo "</br>Seu dinheiro rendeu: R$ " . ($total - ($tesouro + $aportes[1] * $tempo[1])) . "</h4></div>";
    }

    if ($selic != null) {

        for ($i = 0; $i < $tempo[2]; $i++) {
            $rendimento = $rendimento + (($selic + $aportes[2]) * 0.011);
            $total = $selic + $aportes[2] + $rendimento;
            if ($selic > 10000) {
                $total = $total - ($rendimento * 0.002);
            }
        }
        $total = $total + ($aportes[2] * $tempo[2]);
        echo "<div class=box><h1>Simulação Selic</h1>";
        echo "<h4>Em " . $tempo[2] . " meses você teria: R$" . $total;
        echo "</br>Valor liquído com impostos descontados";
        echo "</br>Total investido: R$ " . ($selic + $aportes[2] * $tempo[2]);
        echo "</br>Seu dinheiro rendeu: R$ " . ($total - ($selic + $aportes[2] * $tempo[2])) . "</h4></div>";
    }
    if ($ipca != null) {
        echo "IPCA+";
        echo $aportes[3];
    }
    if ($cdb != null) {
        echo "CDB E LC";
        echo $aportes[4];
    }
    if ($lci != null) {

        $total = $lci;

        for($i=0;$i<$tempo[5];$i++){
            $rendimento = ((($total + $aportes[5]) * 0.01) * 0.06);
            $total += $aportes[5] + $rendimento;
            echo $total . "</br>";
        }
        echo $total;
    }
}
?>
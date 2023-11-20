<html>
<head>
<meta charset="UTF-8">

    <style>
        div{
            text-align:center;
            
        }

        h1{
            font-size:40px;
            color:red;
        }

        h2{
            font-size:25px;
            color: green;
        }
        h3{
            font-size:25px;
            color: black;
        }
        fieldset{
            border: solid 3px;
        }

    </style>

</head>
    
<body style="background-color: silver;">

    <form action="conversor.php" method="POST">
    
    <figure>
            <a href="testeprojeto.php"><h3>🠔 Voltar</h3></a>
    </figure>

    <div>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    <fieldset>
    <h1>CONVERSOR DE MOEDAS</h1>

    Valor:<input type="float" name="valor1"/></br>
    De:<select name="moeda1">
        <option value="real">&#127463;&#127479 Real (R$)</option>
        <option value="dolar">&#127482;&#127480 Dólar ($)</option>
        <option value="euro">&#127466;&#127482 Euro (€)</option>
        <option value="iene">&#127471;&#127477 Iene (¥)</option>
        <option value="libra">&#127468;&#127463 Libra Esterlina (£)</option>
        <option value="cad">&#127464;&#127462 Dólar Canadense (CAD)</option>
        <option value="aus">&#127462;&#127482 Dólar Australiano (AU$)</option>
        <option value="peso">&#127462;&#127479 Peso Argentino (ARS)</option>
        <option value="franco">&#127464;&#127469 Franco Suíço (Fr)</option>
    </select>

    Para:<select name="moeda2">
        <option value="real"><p>&#127463;&#127479</p> Real (R$)</option>
        <option value="dolar"><p>&#127482;&#127480</p> Dólar ($)</option>
        <option value="euro"><p>&#127466;&#127482</p> Euro (€)</option>
        <option value="iene"><p>&#127471;&#127477</p> Iene (¥)</option>
        <option value="libra"><p>&#127468;&#127463</p> Libra Esterlina (£)</option>
        <option value="cad"><p>&#127464;&#127462</p> Dólar Canadense (CAD)</option>
        <option value="aus"><p>&#127462;&#127482</p> Dólar Australiano (AU$)</option>
        <option value="peso"><p>&#127462;&#127479</p> Peso Argentino (ARS)</option>
        <option value="franco"><p>&#127464;&#127469</p> Franco Suíço (Fr)</option>
    </select></br>
    </fieldset>
        
    <button>Converter</button>
    </form>

    
    
</body>
</html>

<?php
if(isset($_POST['moeda1'])){
$moeda1 = $_POST['moeda1'];
$moeda2 = $_POST['moeda2'];

$valor1 = $_POST['valor1'];

switch($moeda1){
    case "real":
        switch($moeda2){
            case "real":
                $conversao = $valor1 / 1;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 / 5.97;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 / 5.25;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 / 0.04;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 / 6.05;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 / 3.58;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 / 3.17;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 / 0.01;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 / 0.42;
                echo "<h2>R$ " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    case "dolar":
        switch($moeda2){
            case "real":
                $conversao = $valor1 * 4.97;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 * 1;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 * 0.95;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 * 150.46;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 * 0.82;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 * 1.37;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 * 1.55;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 * 350.02;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 * 362.85;
                echo "<h2>$ " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    case "euro":
        switch($moeda2){
            case "real":
                $conversao = $valor1 * 5.26;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 * 1.06;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 * 1;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 * 159.82;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 * 0.87;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 * 1.46;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 * 1.65;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 * 371.86;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 * 0.96;
                echo "<h2>€ " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    case "iene":
        switch($moeda2){
            case "real":
                $conversao = $valor1 * 0.03;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 * 0.0066;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 * 0.0063;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 * 1;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 * 0.0054;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 * 0.0091;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 * 0.01;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 * 2.33;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 * 0.006;
                echo "<h2>¥ " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    case "libra":
        switch($moeda2){
            case "real":
                $conversao = $valor1 * 6.04;
                echo "<h2£ " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 * 1.22;
                echo "<h2>£ " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 * 1.15;
                echo "<h2>£ " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 * 183.5;
                echo "<h2>£ " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 * 1;
                echo "<h2>£ " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 * 1.68;
                echo "<h2>£ " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 * 1.9;
                echo "<h2>£ " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 * 426.76;
                echo "<h2>£ " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 * 1.1;
                echo "<h2>£ " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    case "cad":
        switch($moeda2){
            case "real":
                $conversao = $valor1 * 3.6;
                echo "<h2CAD " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 * 0.73;
                echo "<h2>CAD " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 * 0.69;
                echo "<h2>CAD " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 * 109.48;
                echo "<h2>CAD " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 * 0.6;
                echo "<h2>CAD " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 * 1;
                echo "<h2>CAD " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 * 1.13;
                echo "<h2>CAD " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 * 254.64;
                echo "<h2>CAD " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 * 0.66;
                echo "<h2>CAD " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    case "aus":
        switch($moeda2){
            case "real":
                $conversao = $valor1 * 3.18;
                echo "<h2AU$ " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 * 0.64;
                echo "<h2>AU$ " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 * 0.61;
                echo "<h2>AU$ " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 * 96.74;
                echo "<h2>AU$ " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 * 0.53;
                echo "<h2>AU$ " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 * 0.88;
                echo "<h2>AU$ " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 * 1;
                echo "<h2>AU$ " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 * 225.01;
                echo "<h2>AU$ " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 * 0.58;
                echo "<h2>AU$ " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    case "peso":
        switch($moeda2){
            case "real":
                $conversao = $valor1 * 0.014;
                echo "<h2ARS " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 * 0.0029;
                echo "<h2>ARS " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 * 0.0027;
                echo "<h2>ARS " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 * 0.43;
                echo "<h2>ARS " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 * 0.0023;
                echo "<h2>ARS " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 * 0.0039;
                echo "<h2>ARS " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 * 0.0044;
                echo "<h2>ARS " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 * 1;
                echo "<h2>ARS " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 * 0.0026;
                echo "<h2>ARS " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    case "franco":
        switch($moeda2){
            case "real":
                $conversao = $valor1 * 5.47;
                echo "<h2Fr " . number_format($valor1,2,',') . " = " . "R$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "dolar":
                $conversao = $valor1 * 1.1;
                echo "<h2>Fr " . number_format($valor1,2,',') . " = " . "$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "euro":
                $conversao = $valor1 * 1.04;
                echo "<h2>Fr " . number_format($valor1,2,',') . " = " . "€ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "iene":
                $conversao = $valor1 * 166.11;
                echo "<h2>Fr " . number_format($valor1,2,',') . " = " . "¥ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "libra":
                $conversao = $valor1 * 0.91;
                echo "<h2>Fr " . number_format($valor1,2,',') . " = " . "£ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "cad":
                $conversao = $valor1 * 1.72;
                echo "<h2>Fr " . number_format($valor1,2,',') . " = " . "CAD " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "aus":
                $conversao = $valor1 * 1.72;
                echo "<h2>Fr " . number_format($valor1,2,',') . " = " . "AU$ " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "peso":
                $conversao = $valor1 * 386.54;
                echo "<h2>Fr " . number_format($valor1,2,',') . " = " . "ARS " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            case "franco":
                $conversao = $valor1 * 1;
                echo "<h2>Fr " . number_format($valor1,2,',') . " = " . "Fr " . number_format($conversao,2,',')  . "</h2>";
                break;
        
            default:
                echo"erro";
        }
        break;

    default:
        echo"erro";
}
echo "</div>";
}
?>
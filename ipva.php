<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <title>IPVA</title>
</head>

<body>

    <form action="ipva.php" method="POST">

        <figure>
            <a href="testeprojeto.php"><h2>🠔 Voltar</h2></a>
        </figure>

        <fieldset>
            Valor da FIPE do veículo: <input type="float" name="valor" /></br></br>
            Tipo do veículo: <select name="tipo">
                <option value="passeio">Particular e passeio</option>
                <option value="caminhonete">Caminhonetes e utilitários</option>
                <option value="moto">Motocicletas e quadriciclos</option>

            </select></br></br>
            Estado: <select name="estado">
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="MG">Minas Gerais</option>
                <option value="ES">Espírito Santo</option>
                <option value="PR">Paraná</option>
                <option value="SC">Santa Catarina</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="GO">Goiás</option>
                <option value="DF">Distrito Federal</option>
                <option value="MA">Maranhão</option>
                <option value="CE">Ceará</option>
                <option value="PI">Piauí</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="PB">Paraíba</option>
                <option value="PE">Pernambuco</option>
                <option value="AL">Alagoas</option>
                <option value="SE">Sergipe</option>
                <option value="BA">Bahia</option>
                <option value="TO">Tocantins</option>
                <option value="AM">Amazonas</option>
                <option value="RO">Rôndonia</option>
                <option value="RR">Roraima</option>
                <option value="AC">Acre</option>
                <option value="PA">Pará</option>
                <option value="AP">Amapá</option>

            </select></br></br>

        </fieldset>
        <input type="submit" name="Enviar" /></br></br>

    </form>

</body>

</html>

<?php
if(isset($_POST['valor'])){

$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$estado = $_POST['estado'];
$ipva = 0;

switch ($estado) {
    case 'SP':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.04;
            $ipva = $ipva - ($ipva * 0.09);
            echo "Valor estimado do IPVA: " . $valor * 0.04;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.09);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.09);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'RJ':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.04;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.04;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'ES':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.01;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.01;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'MG':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.04;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.04;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'PR':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.035;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.035;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.035;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.035;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.035;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.035;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'SC':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.01;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.01;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'RS':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'MS':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.035;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.035;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.035;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'MT':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.01;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.01;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'GO':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.0375;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.04;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.0345;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'DF':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.035;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.035;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.01;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.01;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'MA':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.01;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.01;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'PI':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.15);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'CE':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'RN':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.05);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'PB':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'PE':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.07);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.07);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.07);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'AL':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.0325;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.0325;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.0275;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.0275;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'SE':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.025;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.025;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'AM':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'AP':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.2);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.2);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.015;
            $ipva = $ipva - ($ipva * 0.2);
            echo "Valor estimado do IPVA: " . $valor * 0.015;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'AC':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.01;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.01;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.01;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.01;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'RO':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'RR':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.03);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'PA':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
    case 'TO':
        if ($tipo == 'passeio') {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } elseif ($tipo == 'caminhonete') {
            $ipva = $valor * 0.03;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.03;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        } else {
            $ipva = $valor * 0.02;
            $ipva = $ipva - ($ipva * 0.1);
            echo "Valor estimado do IPVA: " . $valor * 0.02;
            echo "</br>Pagamento com desconto: " . $ipva;
            echo "</br>Valor das parcelas: R$ " . $ipva / 5 . " em 5 parcelas";
        }
        break;
}
}
?>
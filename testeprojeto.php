<!DOCTYPE html>
<hmtl lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Teste</title>

    <style>
        body{
            background-color: red;


        }
        h1{
            font-family: Arial;
            font-size: 30pt;
            color: blue;
            text-shadow: 2px 2px 2px black;
        }


        .column {
            float: left;
             width: 33.33%;
            padding: 5px;
        }


        .row::after {
            content: "";
            clear: both;
            display: table;
        }

    </style>


</head>

<body>
    
    <h1>Calculadora Financeira V1</h1>
    <div class="row">
    <figure>
        <div class="column">
        <h2>Emprestimo</h2>
        <a href="emprestimo.php"><img src="https://play-lh.googleusercontent.com/zz-I1flXxoU24si5lu4hpUMEGWDLfT5Leyvg5skcV2GQiTkqEBiTtNxU81v8aOK8Y5U" height="300" width="500"/></a>
        </div>
        
    </figure>
    <figure>
        <div class="column">
        <h2>financiamento veicular</h2>
        <a href=""><img src="https://media1.giphy.com/media/9fTQAcZV9mKHAOmPC7/giphy.gif?cid=ecf05e4756x75wcgkr2ff4mqf128bxqnbg3rzb74gjo93tkf&ep=v1_gifs_search&rid=giphy.gif&ct=g" height="300" width="500"/></a>
        </div>
    </figure>
    <figure>
        <div class="column">
        <h2>Investimentos</h2>
        <a href=""><img src="https://img.freepik.com/free-vector/gradient-stock-market-concept_23-2149166910.jpg?w=2000" height="300" width="500"/></a>
        </div>
    </figure>
    <figure>
        <div class="column">
        <h2>Consórcio</h2>
        <a href="consorcio.php"><img src="https://sicredipioneira.com.br/images/blog/post/o-consorcio-pode-te-ajudar-a-conquistar-seu-sonho.png" height="300" width="500"/></a>
        </div>
    </figure>
    <div class="row">
    <figure>
        <div class="collum">
        <h2>Impostos</h2>
        <a href=""><img src="https://www.thebalancemoney.com/thmb/XPgnbNc-YCtZ0pXHZ3Xkty-FofQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1136346827-3eba69ab996a4abeb0836afe62abfd3c.jpg" height="300" width="500"/></a>
        </div>
    </figure>
    <figure>
        <div class="collum">
        <h2>Conversor de moedas</h2>
        <a href=""><img src="https://m.media-amazon.com/images/I/51f4CwHtzxL.png" height="300" width="500"/></a>
        </div>
    </figure>
    </div> 
    </div>

    <form action="testeprojeto.php" method="POST">
        
    </form>

</body>

</html>
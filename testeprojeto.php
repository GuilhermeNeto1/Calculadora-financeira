<!DOCTYPE html>
<hmtl lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Teste</title>

    <style>
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

<body style="background-color: red;">
    
    <h1>Calculadora Financeira V1</h1>
    <div class="row">
    <figure>
        <div class="column">
        <h2>Emprestimo</h2>
        <a href="emprestimo.php"><img src="https://media2.giphy.com/media/hZa9cGxm3Pi5iw3aiI/200w.webp?cid=ecf05e475l8trolpj5i3i9jnqwtx98ldfff63qsooqwg300i&ep=v1_gifs_search&rid=200w.webp&ct=g" height="300" width="500"/></a>
        </div>
        
    </figure>
    <figure>
        <div class="column">
        <h2>Hipoteca</h2>
        <a href=""><img src="https://media0.giphy.com/media/l0IylQoMkcbZUbtKw/200.webp?cid=ecf05e47d3x4bkqnhiib6n8gy8m1ahlakae3y5i74pyhxyq0&ep=v1_gifs_search&rid=200.webp&ct=g" height="300" width="500"/></a>
        </div>
    </figure>
    <figure>
        <div class="column">
        <h2>Investimentos</h2>
        <a href=""><img src="https://media4.giphy.com/media/MvMaBiryW3a4JYH2QJ/200.webp?cid=ecf05e473dl0ncj3nj9qwxr620zqm324yrzlsouugctwr9ws&ep=v1_gifs_search&rid=200.webp&ct=g" height="300" width="500"/></a>
        </div>
    </figure>
    <figure>
        <div class="column">
        <h2>Consórcio</h2>
        <a href="consorcio.php"><img src="https://media.tenor.com/Bb8i51e3cukAAAAd/proton-loan-loan-pepe.gif" height="300" width="500"/></a>
        </div>
    </figure>
    </div>

    <form action="testeprojeto.php" method="POST">
        
    </form>

</body>

</html>
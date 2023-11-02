<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Produtos</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <h1 style="text-align: center;">CADASTRO DE PRODUTOS</h1>
    <div class="form">
        <form action="controller\Controlador.php" method="get">
            CÒDIGO:<br>
            <input class="campo" type="text" name="txtCodigo" /> <br />
            DESCRIÇÂO:<br>
            <input class="campo" type="text" name="txtDescricao" /> <br />
            PREÇO:<br>
            <input class="campo" type="text" name="txtPreco" /> <br /><br />
            <input class="botao" type="submit" name="b1" value="Gravar" />
            <input class="botao" type="submit" name="b1" value="Alterar" />
            <input class="botao" type="submit" name="b1" value="Remover" />
            <input class="botao" type="submit" name="b1" value="Listar" />
        </form>
    </div>
</body>

</html>
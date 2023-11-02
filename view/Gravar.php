<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Gravar</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <?php
    include("..\\controller\\ProdutoDAO.php");
    $dao = new ProdutoDAO();
    $obj = new Produto();

    $obj->setDescricao($_GET['txtDescricao']);
    $obj->setPreco($_GET['txtPreco']);
    $r = $dao->gravar($obj);

    if ($r > 0) {
       // echo $obj->getDescricao();
        echo "<div class = 'botoes'>";
        echo "<h1>SALVO COM SUCESSO</h1>";
        echo '<form action="../index.php" method="get">';
        echo '<input class="botao" type="submit" name="p1" value="Voltar" />';
        echo '</form>';
        echo '</div>';
    } else {
        echo "Nada foi salvo.";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Remover </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <?php
    include("..\\controller\\ProdutoDAO.php");
    $dao = new ProdutoDAO();
    $obj = new Produto();

    $obj->setCodigo($_GET['txtCodigo']);

    $r = $dao->remover($obj);

    if ($r > 0) {
        //echo $obj->getDescricao();
        echo "<div class = 'botoes'>";
        echo "<h1>REMOVDIDO COM SUCESSO</h1>";
        echo '<form action="../index.php" method="get">';
        echo '<input class="botao" type="submit" name="p1" value="Voltar" />';
        echo '</form>';
        echo '</div>';
    } else {
        echo "Nada foi removido.";
    }
    ?>
</body>

</html>
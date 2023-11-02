<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> AlterarP </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <?php
    include("..\\controller\\ProdutoDAO.php");

    session_start();
    
    if (isset($_SESSION['codigo'])) 
    { 
        $dao = new ProdutoDAO();
        $obj = new Produto();
        $obj->setCodigo($_SESSION['codigo']);
        $obj->setDescricao($_SESSION['descricao']);
        $obj->setPreco($_SESSION['preco']);
        $r = $dao->alterar($obj);

        if ($r > 0) 
        {
            //echo $obj->getDescricao();
            echo "<div class = 'botoes'>";
            echo "<h1>ALTERADO COM SUCESSO</h1>";
            echo '<form action="../index.php" method="get">';
            echo '<input class="botao" type="submit" name="p1" value="Voltar" />';
            echo '</form>';
            echo '</div>';
        } 
        else 
        {
            echo "Nada foi alterado.";
        }
    } 
    else
        echo 'Dados não foram recebidos.';
  
    ?>
</body>

</html>
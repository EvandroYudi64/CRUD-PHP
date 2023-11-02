<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Listar </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    
    <?php
    include("..\\controller\\ProdutoDAO.php");
    $dao = new ProdutoDAO();

    $tabela = $dao->listar();
    if ($tabela) {
        echo " <h1 style='text-align: center'> LISTA DE PRODUTOS </h1><br/>";
        echo "<div class='container'>";
        
        while ($linha = pg_fetch_array($tabela)) 
        {
            echo "<div class='item'>
                    <p>{$linha[1]}</p>
                    <p>Preco: {$linha[2]}</p>
                    <a class='adicionar' href='..\controller\AdicionarCarrinho.php?desc={$linha[1]}&preco={$linha[2]}'>+</a>
                  </div>";
        }
        echo "</div>";
        echo "<div class = 'botoes'>";
        echo '<form action="../carrinho.php" method="get">
                <input class="botao" type="submit" name="p1" value="Carrinho">
              </form>';
        
        echo '<form action="../index.php" method="get">
                <input class="botao" type="submit" name="p1" value="Voltar">
              </form>';
        echo "</div>";
    } else
        echo "Tabela vazia.";
    ?>
    
</body>

</html>

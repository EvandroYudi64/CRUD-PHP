<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Primeiro Site PHP </title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <?php
    $total=0;
       if (isset($_SESSION['carrinho']))
       {
            $carrinho = $_SESSION['carrinho'];
            echo " <h1 style='text-align: center'> CARRINHO </h1><br/>";
            echo "<div class='carrinho'>";
            foreach($carrinho as $produto => $preco)
            {
                $total+=$preco;
                echo "<div class='itens'>";
                echo "<p>$produto</p>";
                echo "<form method='post' action='controller/ExcluirItem.php'>";
                echo "<input type='hidden' name='produto' value='$produto'>";
                echo "<input class='botao' type='submit' value='Remover'>";
                echo "</form>";
                echo  "</div>";
            }
            echo "</div>";
            echo "<div class = 'botoes'>";
            echo "<h1>TOTAL = $total</h1>";
            echo '<form action="controller/LimparCarrinho.php" method="get">';
            echo '<input class="botao" type="submit" name="p1" value="Limpar Carrinho"></>';
            echo '</form>';
            echo '<form action="view/Listar.php" method="get">
            <input class="botao" type="submit" name="p1" value="Voltar">
            </form>';
            echo "</div>";
       }
       else
       {
            echo " <h1 style='text-align: center'> CARRINHO </h1><br/>";
            echo "<div class='carrinho'>";
            echo "</div>";
            echo "<div class = 'botoes'>";
            echo "<h1>TOTAL = 0</h1>";
            echo '<form action="controller/LimparCarrinho.php" method="get">';
            echo '<input class="botao" type="submit" name="p1" value="Limpar Carrinho"></>';
            echo '</form>';
            echo '<form action="view/Listar.php" method="get">
            <input class="botao" type="submit" name="p1" value="Voltar">
            </form>';
            echo "</div>";
       }
    ?>
</body>

</html>

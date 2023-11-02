<?php
session_start();


if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (isset($_GET['desc'])) 
{
    $produto = $_GET['desc'];
    $preco = $_GET['preco'];


    if (isset($_SESSION['carrinho'][ $produto])) 
    {
        $_SESSION['carrinho'][$produto]+=$preco;
        //$_SESSION['carrinho'][$preco]+=$preco;
    } 
    else 
    {
        $_SESSION['carrinho'][$produto] = $preco;
       // $_SESSION['carrinho'][$preco]=$preco;
    }
    
}
header('Location: ../view/Listar.php'); 
exit();

?>
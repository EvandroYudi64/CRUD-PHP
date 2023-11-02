<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produto'])) 
{
    $produto = $_POST['produto'];
    if (isset($_SESSION['carrinho'][$produto])) 
    {
        unset($_SESSION['carrinho'][$produto]);
    }
}
header('Location: ../carrinho.php'); 
?>
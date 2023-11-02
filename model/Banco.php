<?php
class Banco
{
    public $conexao;

    function __construct()
    {
        $host = "";
        $base   = "";
        $porta = "";
        $user = "";
        $senha = "";
        $str_conexao = "host=$host port=$porta dbname=$base user=$user password=$senha";
        $this->conexao = pg_connect($str_conexao);

        if (!$this->conexao) {
            die("Conexão falhou: " . pg_last_error());
        }
    }
}

<?php
class Produto {
    private $codigo;
    private $descricao;
    private $preco;

    public function setCodigo($c){
        $this->codigo=$c;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setDescricao($d){
        $this->descricao=$d;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setPreco($p){
        $this->preco=$p;
    }
    public function getPreco(){
        return $this->preco;
    }
}
?>

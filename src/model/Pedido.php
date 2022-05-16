<?php

namespace Model;

class Pedido
{
    //Atributos
    private $codPedido;
    public $itens;
    public $pgto;
    public $qtde;
    public $entrega;

    //Métodos
    public function __construct()
    {
        // Executará assim que um novo
        // objeto dessa classe for criado
        echo $this->gerarCodigo();
        echo $this->informarData();
    }

    private function informarData()
    {
        //Informar o fuso horário
        date_default_timezone_set("America/Sao_Paulo");
        //Informar a data e hora
        return "<br>Data e hora do pedido: " . date("d/m/Y - H:i:s");
    }

    private function gerarCodigo()
    {
        $this->codPedido = random_int(100, 300); //Informando um valor
        return $this->codPedido; //Retornando o valor que foi informado
    }

    public function darDesconto()
    {
        if($this->qtde >= 5 && $this->entrega == "Viamão") {
            return "<h1 style='background-color: green; color: white'> 10% Off </h1>";
        }
    }

}
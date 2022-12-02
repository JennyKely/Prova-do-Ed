<?php

class carro
{
  public $marca;
  public $modelo; 
  public $cor; 
  public $ano; 
  public $tipo; 

  public function alugar()
  {
    echo "Irei alugar um carro do modelo {$this -> modelo}, da marca {$this -> marca}, na cor {$this -> cor},
    do ano de {$this -> ano}, o tipo do carro é um {$this -> tipo} <br>";
  }
  public function vender()
  {
     echo "Eu irei vender um carro do modelo {$this -> modelo}, da marca {$this -> marca}, da cor {$this -> cor},
     do ano de {$this -> ano}, o tipo do caaro é {$this -> tipo} <br>";
  }
  public function comprar()
  {
    echo "Quero comprar um carro do modelo {$this -> modelo}, da marca {$this -> marca}, da cor {$this -> cor},
    do ano de {$this -> ano}, do tipo {$this -> tipo} <br>";
  }
}

$alugar1 = new Carro();
$alugar1 ->modelo = "Arphe";
$alugar1 ->marca = "Audi";
$alugar ->cor = "Preto";
$alugar ->ano = 2010;
$alugar ->tipo = "Sedan";
$alugar1 ->alugar();

$vender1 = new Carro();
$vender ->modelo = "Arphe";
$vender ->marca = "Audi";
$vender ->cor ="Preto";
$vender ->ano = 2010;
$vender ->tipo = "Sedan";
$vender ->vender();

$comprar = new Carro();
$comprar ->modelo = "Arphe";
$comprar ->marca = "Audi";
$comprar ->cor = "Preto";
$comprar ->ano = 2010;
$comprar ->tipo = "Sedan";


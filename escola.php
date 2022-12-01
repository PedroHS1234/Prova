<?php

class Escola {

  public $CorUniforme;
  public $alunos;
  public $aparencia;
  public $professores;
  public $top;

  public function Entrei(){

    echo "Quando eu entrei na escola ela tinha um uniforme da cor {$this->CorUniforme}, tinha capacidade para {$this->alunos} alunos, ela estava {$this->aparencia} tinha cerca de {$this->professores} professores e estava no TOP {$this->top} das melhores escolas <br>";


  }

  public function Sai(){

    echo "Quando eu sai da escola ela tinha um uniforme da cor {$this->CorUniforme}, tinha capacidade para {$this->alunos} alunos, ela estava {$this->aparencia} tinha cerca de {$this->professores} professores e estava no TOP {$this->top} das melhores escolas <br>";


  }

  public function Voltei(){

    echo "Quando eu voltei para escola ela tinha um uniforme da cor {$this->CorUniforme}, tinha capacidade para {$this->alunos} alunos, ela estava {$this->aparencia} tinha cerca de {$this->professores} professores e estava no TOP {$this->top} das melhores escolas <br>";


  }


}

$escola = new Escola;

$escola->CorUniforme = "Azul";
$escola->alunos = 500;
$escola->aparencia = "Velha";
$escola->professores = 20;
$escola->top = 10;

echo $escola->Entrei(), "<br>";



$escola->CorUniforme = "Preto";
$escola->alunos = 700;
$escola->aparencia = "Velha";
$escola->professores = 15;
$escola->top = 5;

echo $escola->Sai(), "<br>";


$escola->CorUniforme = "Roxo";
$escola->alunos = 1500;
$escola->aparencia = "Nova";
$escola->professores = 50;
$escola->top = 1;

echo $escola->Voltei(), "<br>";











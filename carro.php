<?php

class Carro {

  public $cor;
  public $km;
  public $aparencia;
  public $emplacamento;
  public $limpeza;

  public function Comprei(){

    echo "Quando eu comprei meu carro ele estava da cor {$this->cor}, com {$this->km}km rodados, estava {$this->aparencia}, com emplacamento {$this->emplacamento} e estava {$this->limpeza}";


  }

  public function Vendi(){

    echo "Quando eu vendi meu carro ele estava da cor {$this->cor}, com {$this->km}km rodados, estava {$this->aparencia}, com emplacamento {$this->emplacamento} e estava {$this->limpeza}";


  }

  public function ReComprei(){

    echo "Quando eu comprei ele novamente ele estava da cor {$this->cor}, com {$this->km}km rodados, estava {$this->aparencia}, com emplacamento {$this->emplacamento} e estava {$this->limpeza}";


  }


}

$carro = new Carro;

$carro->cor = "Rosa";
$carro->km = 0;
$carro->aparencia = "Novo";
$carro->emplacamento = "antigo";
$carro->limpeza = "Limpo";

echo $carro->Comprei(), "<br>";




$carro->cor = "Preto";
$carro->km = 50000;
$carro->aparencia = "Usado";
$carro->emplacamento = "Antigo";
$carro->limpeza = "Sujo";

echo $carro->Vendi(), "<br>";




$carro->cor = "Azul";
$carro->km = 100000;
$carro->aparencia = "Velho";
$carro->emplacamento = "Novo";
$carro->limpeza = "Limpo";

echo $carro->ReComprei(), "<br>";

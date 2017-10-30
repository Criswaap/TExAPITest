<?php
namespace TExAPITest\Application\AutomovelEntityAbstract;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Michelf\Markdown;
use TExAPITest\Application\car\Automovel;
use TExAPITest\Application\Entity\Entity; 
use TExAPITest\Application\Entity\EntityInterface; 

class AutomovelEntityAbstract 
{
	 private $id;
         private $placa;
         private $rodas;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
     public function getPlaca() {
        $this->placa = $placa;
    }
    
     public function setPlaca($placa) {
        $this->placa = $placa;
    }
    
     public function getRodas() {
        $this->rodas = $rodas;
    }
    
     public function setRodas($rodas) {
        $this->rodas = $rodas;
    }
}
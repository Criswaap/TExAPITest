<?php

namespace TExAPITest\Application\CarroEntity;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Michelf\Markdown;
use TExAPITest\Application\car\Automovel;
use TExAPITest\Application\Entity\Entity; 
use TExAPITest\Application\Entity\EntityInterface; 

class CarroEntity  {

    private $modelo;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

}

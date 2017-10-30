<?php 
define('APP_ROOT', dirname(__DIR__));
chdir(APP_ROOT);

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Michelf\Markdown;
use TExAPITest\Application\car\Automovel;
use TExAPITest\Application\Entity\Entity; 
use TExAPITest\Application\Entity\EntityInterface; 

require 'vendor/autoload.php';

$car = new Application();//colection

$app['debug'] = true;

class CarroCollection{
//Atributos da classe Carro
private $colecao;




        public function add($entidade)
	{
		
	}
        
        public function remove($entidade)
	{
		
	}
        
        public function current()
	{
		
	}
        
        public function key($entidade)
	{
		
	}
        
        public function next($id)
	{
	
	}
        
        public function rewind($id)
	{
	
	}
        
        public function valid($id)
	{
	
	}
        public function count($id)
	{
	
	}
}





 


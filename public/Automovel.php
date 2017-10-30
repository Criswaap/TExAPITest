<?php
namespace TExAPITest\Application\Automovel;

use TExAPITest\Application\Entity\Entity; 
use TExAPITest\Application\Entity\EntityInterface; 

class Automovel implements EntityInterface
{
	private $entity;

	public function __construct(Entity $entity)
	{
		$this->entity = $entity;
        
		$this->entity->setTable('automovel');
	}

	public function getEntity()
	{
		return $this->entity;
	}
}
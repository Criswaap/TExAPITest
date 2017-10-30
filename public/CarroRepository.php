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

$car = new Application(); //colection

$app['debug'] = true;

class CarroRepository {

//Atributos da classe Carro
    private $colecao;

    public function buscarPorId($id) {
        $app->get('/api/v1/car/{id}', function(Application $app, $id){

	$car = new \TExAPITest\Application\CarroEntity($app['entity']);
	$car = $car->getEntity()->where(array('id' => $id));

	return $app->json($car);
});
    }

    public function buscarTodos($limite, $posicao) {
        $app->get('/api/v1/car', function(Application $app){
	$car  = new CarroCollection($app['entity']);
	$cars = $car->getEntity()->getAll();

	return $app->json($cars); 
});
    }

    public function buscarPor($parans, $limite, $posicao) {
        $app->get('/api/v1/cars/{id}', function(Application $app, $id){

	$car = new CarroCollection($app['entity']);
	$cars = $car->getEntity()->where(array('modelo' => $parans));
        $cars .= $car->getEntity()->where(array('id' => $posicao));
        $cars .= $car->getEntity()->limit($limit);
      
	return $app->json($cars);
});
        
    }

    public function novo($entidade) {
        $app->post('/api/v1/car', function(Application $app, Request $request) {
            $data = $request->request->all();

            $car = array(
                'modelo' => (string) $data['modelo'],
                'placa' => (string) $data['placa'],
                'rodas' => (int) $data['rodas']
            );

            $save = new Automovel($app['entity']);
            $save = $save->getEntity()->save($car);

            $return = array('status' => true);

            if (!$save)
                $return = array('status' => false);

            return $app->json($return);
        });
    }

    public function alterar($entidade) {
        $app->put('/api/v1/car', function(Application $app, Request $request){
	
	$data = $request->request->all();
	
	$car = array(
		'id'    => (int) $data['id'],
		'modelo'  => (string) $data['modelo'],
		'placa' => (string) $data['placa'],
                'rodas' => (int) $data['rodas'],
	);

	$update = new Automovel($app['entity']);
	$update = $update->getEntity()->save($car);


    $return = array('status' => true);
	
	if(!$update) $return = array('status' => false);

	return $app->json($return);

});
    }

    public function apagar($id) {
        $car->delete('/api/v1/car/{id}', function(Application $car, $id) {
            $carro = new Automovel($car['entity']);
            $carDeleted = $carro->getEntity()->delete($id);


            $return = array('status' => true);

            if (!$carDeleted)
                $return = array('status' => false);

            return $car->json($return);
        });
    }

}

<?php
namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap {
	
	protected function initRoutes() {
		$ar['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
		$ar['empresa'] = array('route'=>'/empresa','controller'=>'index','action'=>'empresa');
		$ar['cadastro'] = array('route'=>'/cadastro','controller'=>'index','action'=>'cadastro');
		$this->setRoutes($ar);
	}

	public static function getDb() {
		$db = new \PDO("mysql:host=localhost;dbname=mvc", "root", "");
		//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}
}

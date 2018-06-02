<?php
namespace App\Controllers;

use SON\Controller\Action;
use \SON\Di\Container;

class Index extends Action{

	public function index() {
		$artigo = Container::getClass("Artigo");

		$artigos = $artigo->fetchAll();

		$this->view->artigos = $artigos;

		$this->render('index');
	}

	public function empresa() {
		$title = "Empresa";
		$this->view->title = $title;
		$this->render('empresa');
	}

	public function cadastro() {
		$title = "Cadastro";
		$this->view->title = $title;
		$this->render('cadastro');
	}
}
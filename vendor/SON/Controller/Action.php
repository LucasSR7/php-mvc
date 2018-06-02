<?php
namespace SON\Controller;

class Action {
	protected $view;
	protected $action;

	public function __construct() {
		$this->view = new \stdClass;
	}

	public function render($action, $layout=true) {
		$this->action = $action;
		if ($layout == true && file_exists("../App/Views/layout.php")) {
			require_once '../App/Views/layout.php';
		} else {
			$this->content();
		}
	}

	public function content() {
		$atual = get_class($this);
		$singleClassName = strtolower(str_replace("App\\Controllers", "", $atual));
		require_once '../App/Views/'.$singleClassName.'/'.$this->action.'.php';
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 25.05.2018
 * Time: 14:52
 */

namespace Vererbung;

class Unterklasse extends Oberklasse {
	public function __construct() {
		parent::__construct();
		//$this->func_protected();
	}

	protected function func_protected(){
		echo __CLASS__ .": Hier ist Protected aus Unterklasse\n";
	}

}
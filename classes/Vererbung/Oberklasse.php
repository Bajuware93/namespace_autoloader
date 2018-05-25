<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 25.05.2018
 * Time: 14:46
 */

namespace Vererbung;

class Oberklasse {

	public function __construct() {
		$this->func_protected();
		$this->func_public();
		$this->func_private();
	}

	protected function func_protected() {
		echo __CLASS__ .": Ich bin protected\n";
	}

	public function func_public() {
		echo __CLASS__ .": Ich bin public\n";
	}

	private function func_private() {
		echo __CLASS__ .": Ich bin private\n";
	}
}

<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 25.05.2018
 * Time: 14:48
 */
// namespace Vererbung würde auch gehen, dann wären use überflüssig
use Vererbung\Oberklasse;
use Vererbung\Unterklasse;

spl_autoload_register(function ($class_name) {
	include 'classes\\'. str_replace('\\', '/', $class_name) . '.php';
});

new Oberklasse();
new Unterklasse();
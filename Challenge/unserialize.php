<?php
/*
Code by: Raad Haddad (@raadfhaddad)
*/
class Car {
	public $price;
	public $color;
	public $name;
	public function __construct($pricex,$colorx,$namex){
		$this->price = $pricex;
		$this->color = $colorx;
		$this->name = $namex;
	}
	
}

$ready_serialized_object=unserialize($_GET['obj']);
echo var_dump($ready_serialized_object);
?>
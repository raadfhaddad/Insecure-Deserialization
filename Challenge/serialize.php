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

$obj = new Car(14000,"black","Mercedes");
echo serialize($obj);
?>
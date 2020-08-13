<?php
class Product {
	private $cost;
	private $pic;
	private $name;

	public function view() {
		echo "<img scr="$this->pic"><h1>$this->name</h1><h2>$this->cost</h2>";
	}

	public function buy() {
	}

}

class Dress extends Product {
	private $size;
	private $colour;
}

class Jeans extends Product {
	private $waist;
	private $length;
}


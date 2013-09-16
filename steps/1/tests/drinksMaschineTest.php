<?php

require dirname(__FILE__) . '/../code/drinksMaschine.php';

class DrinksMaschineTest extends PHPUnit_Framework_TestCase
{

	public function testGetBeer()
	{
		$dm = new DrinksMaschine;
		$this->assertEquals('beer',$dm->serve('beer',true));
	}

	public function testGetWater()
	{
		$dm = new DrinksMaschine;
		$this->assertEquals('water',$dm->serve('water',true));
	}

}
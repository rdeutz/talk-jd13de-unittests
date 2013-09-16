<?php

require dirname(__FILE__) . '/../code/drinksMaschine.php';

class DrinksMaschineTest extends PHPUnit_Framework_TestCase
{

	public function setup()
	{
		$this->theThing = new DrinksMaschine;
		$this->theThing->countAcceptedCoins();
		// load drinks
		$this->theThing->load = array(	'beer'  => array('beer','beer','beer','beer','beer','beer','beer','beer','beer'),
										'water' => array('water','water','water','water','water','water','water','water')
									 );
	}

	protected function tearDown()
	{
		unset($this->theThing);
	}

	public function testCredits()
	{
		$this->assertEquals(1,$this->theThing->getCredits());
	}

	public function testGetBeer()
	{
		$this->assertEquals('beer',$this->theThing->serve('beer'));
	}

	public function testGetWater()
	{
		$this->assertEquals('water',$this->theThing->serve('water'));
	}

	public function testReturnCredits()
	{
		$this->assertEquals(1,$this->theThing->getCredits());

		$this->theThing->returnsCoins();

		$this->assertEquals(0,$this->theThing->getCredits());
	}

	public function testGetALotBeers()
	{
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->theThing->countAcceptedCoins(5);
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->theThing->countAcceptedCoins();
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->theThing->countAcceptedCoins();
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->theThing->countAcceptedCoins();
		$this->assertEquals('beer',$this->theThing->serve('beer'));
		$this->theThing->countAcceptedCoins();
		$this->assertEquals('',$this->theThing->serve('beer'));
		$this->assertEquals(1,$this->theThing->getCredits());
	}


}
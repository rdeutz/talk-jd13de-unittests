<?php

require dirname(__FILE__) . '/../code/drinksMaschine.php';
require dirname(__FILE__) . '/mockCoinChecker.php';

class DrinksMaschineTest extends PHPUnit_Framework_TestCase
{

	public function setup()
	{
		$this->checkerInstance = new MockCoinChecker;

		$this->theThing = new DrinksMaschine ($this->checkerInstance);
		$this->theThing->processInsertedCoins('0.5');
		// load drinks
		$this->theThing->load = array(	'beer'  => array('beer','beer','beer','beer','beer','beer','beer','beer','beer'),
										'water' => array('water','water','water','water','water','water','water','water')
									 );
	}

	protected function tearDown()
	{
		//unset($this->theThing);
	}

	public function testCredits()
	{
		$this->assertEquals(1,$this->theThing->getCredits());
	}

	public function testGetBeer()
	{
		$this->assertEquals(1,$this->theThing->getCredits());
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

	/**
	 * @dataProvider provider
	 */
	public function testGetALotOfDrinks($param,$expect)
	{
		$this->assertEquals($expect,$this->theThing->serve($param));
	}

	public function provider()
    {
        return array(
	          			array('beer','beer'),
	          			array('water','water'),
	          			array('water','water'),
	          			array('beer','beer'),
	          			array('water','water'),
	          			array('beer','beer'),
	          			array('water','water'),
	          			array('beer','beer')
					);
    }

	/**
	 * @dataProvider provider2
	 */
	public function testGetALotBeers2($param,$expect)
	{
		//$this->theThing->countAcceptedCoins(1);
		$this->assertEquals($expect,$this->theThing->serve($param));
	}

	public function provider2()
    {
        return array(
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer'),
	          			array('beer','beer')
					);
    }

}
<?php

require 'coinChecker.php';

class DrinksMaschine
{

	private $coinsCounter = 0;

	public $load = array();

	public function processInsertedCoins($coin)
	{
		$credits = CoinChecker::CalculateCredits($coin);
		$this->countAcceptedCoins($credits);
	}

	public function getCredits()
	{
		return $this->coinsCounter;
	}

	private function countAcceptedCoins($credits=1)
	{
		$this->coinsCounter += $credits;
	}

	public function returnsCoins()
	{
		$this->coinsCounter = 0;
	}

	public function serve($type = '')
	{
		$result= '';

		if ( ($this->coinsCounter > 0 ) && (in_array($type, array_keys($this->load))) && (count($this->load[$type]) > 0) )
		{
			$result = array_pop($this->load[$type]);
			$this->coinsCounter--;
		}

		return $result;
	}
}
<?php

class CoinChecker
{
	public static function CalculateCredits($coinType)
	{
		$result = 0;
		$typeOfVaildCoins = array('0.5', '1', '2');

		if (in_array($coinType, $typeOfVaildCoins))
		{
			$result = array_search($coinType, $typeOfVaildCoins) + 1;
		}
		return $result;
	}
}
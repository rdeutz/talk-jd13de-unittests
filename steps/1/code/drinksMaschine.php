<?php

class DrinksMaschine
{

	public function serve($type = '', $coin = false)
	{
		$result= '';

		if ($coin !== false)
		{
			switch ($type)
			{
				case 'beer':
					$result = 'beer';
					break;

				case 'water':
					$result = 'water';
			}
		}

		return $result;
	}
}
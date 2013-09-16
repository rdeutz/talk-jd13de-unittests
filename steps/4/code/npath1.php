<?php
# 3 / 4
class NPath
{

	public function foo($a, $b)
	{
		$c=0;

		if($a)
		{
			$c = $a;
		}
		else
		{
			if ($b)
			{
				$c = $b;
			}
		}

		if ($a && $b)
		{
			$c = $a + $b;
		}

		return $c;
	}
}
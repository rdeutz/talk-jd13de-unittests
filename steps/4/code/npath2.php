<?php
# 5 / 16
class NPath
{

	public function foo($a, $b, $c, $d, $e)
	{
		$r=0;

		if($a)
		{
			$r = $a;
		}

		if($b && $b < $r)
		{
			$r = $b;
		}

		if($c && $c < $r)
		{
			$r = $c;
		}

		if($d && $d < $r)
		{
			$r = $d;
		}

		if($e && $e < $r)
		{
			$r = $e;
		}

		return $r;
	}
}
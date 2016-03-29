<?php
	$secret = "96a9519b8fddd17e8cc4bba0408ffffd";
	$alphabet = "abcdefghijklmnopqrstuvwxyz";

	$notFound = true;

	$i = 0;
	while ($notFound && $i != 26){
		$first = $alphabet[$i];
		echo $first . "<br>";
		if($secret == md5($first))
			$notFound = false;
		while ($notFound && $j != 26){
			$second = $alphabet[$j];
			echo $first.$second . "<br>";
			if($secret == md5($first.$second))
				$notFound = false;
			while ($notFound && $k != 26){
				$third = $alphabet[$k];
				echo $first.$second.$third . "<br>";
				if($secret == md5($first.$second.$third))
					$notFound = false;
				while ($notFound && $l != 26){
					$fourth = $alphabet[$l];
					echo $first.$second.$third.$fourth . "<br>";
					if($secret == md5($first.$second.$third.$fourth))
						$notFound = false;
					$l++;
					$m = 0;
				}
				$k++;
				$l = 0;
			}
			$j++;
			$k = 0;
		}
		$i++;
		$j = 0;
	}

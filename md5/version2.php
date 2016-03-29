<?php
	function bruteImpl($str, $index, $maxDepth)
	{
		$alphabet = str_split("abcdefghijklmnopqrstuvwxyz");
		$alphabetSize = count($alphabet);
	    for ($i = 0; $i < $alphabetSize; ++$i)
	    {
	        $str[$index] = $alphabet[$i];

	        if ($index == $maxDepth - 1) 
	        	echo implode('', $str) . "<br>";
	        else 
	        	bruteImpl($str, $index + 1, $maxDepth);
	    }
	}

	bruteImpl("", 0, 4);

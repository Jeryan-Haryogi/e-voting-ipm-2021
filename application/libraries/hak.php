<?php
	class Hak{
		function gen($data){
			$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
			$pos = rand(0, strlen($karakter)-1);  
			$gene = $data.$karakter[$pos];
			$gener = hash("crc32b", $gene);
			return $gener;
		}
	}
?>
<?php 

if (!function_exists('konversi_uang')) {
	function konversi_uang($a)
	{
		if (isset($a)) {
			if ($a == '') {
				$a = 0;
			}
			$p 			= strlen($a);
			$hasil 		= number_format($a, 2);
			return "Rp. " . $hasil;
		}
	}
}


?>
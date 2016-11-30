<?php

$sitsaldo = 3;
$saldo = -1;

$retorno = ($sitsaldo == 1 && $saldo < 0) ? 0 : 
	(($sitsaldo == 2 ) ? $saldo:(
		($sitsaldo == 3 && $saldo > 0) ? 0 :(
			($sitsaldo == 4) ? $saldo : $saldo
			)
		)
	);

/*$retorno = ($sitsaldo == 1 && $saldo < 0) ? 0 : 
	($sitsaldo == 2 ) ? $saldo :
		($sitsaldo == 3 && $saldo > 0) ? 0 :
			($sitsaldo == 4) ? $saldo : $saldo;*/

echo $retorno;
?>
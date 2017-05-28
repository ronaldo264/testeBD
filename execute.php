<?php
	$tempo = null;
	function teste(){
	$sec = explode(" ", microtime());
	$tempo = $sec[1] + $sec[0];
	return $tempo;
	}
?>
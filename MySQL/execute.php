<?php
	$tempo = null;
	function tempo(){
	$sec = explode(" ", microtime());
	$tempo = $sec[1] + $sec[0];
	return $tempo;
	}
	
	function carga(){
		$mb = round(((memory_get_peak_usage(true) / 1024) / 1024), 2);
		return $mb;
	}
?>
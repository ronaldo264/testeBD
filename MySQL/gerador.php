<?php
/*
	http://codigofonte.uol.com.br/codigos/gerador-de-palavras-aleatorias-em-php
	Publicado por: Everton da Rosa  26 de fevereiro de 2009
*/
function gerar(){
	$vogais = array('a','e','i','o','u');
	$consoantes = array('b','c','d','f','g','h','nh','lh','ch','j','k','l','m','n','p','qu','r','rr','s','ss','t','v','w','x','y','z',);
 
	$palavra = '';
	$tamanho_palavra = rand(2,9);
	$contar_silabas = 0;

	while($contar_silabas < $tamanho_palavra){
	   $vogal = $vogais[rand(0,count($vogais)-1)];
	   $consoante = $consoantes[rand(0,count($consoantes)-1)];
	   $silaba = $consoante.$vogal;
	   $palavra .=$silaba;
	   $contar_silabas++;
	   unset($vogal,$consoante,$silaba);
}
return $palavra;
//echo "<h3>A palavra aleatória gerado foi: ".$palavra."</h3>";
unset($vogais,$consoantes,$palavra,$tamanho_palavra,$contar_silabas);
}

function gerarUF(){
	$vogais = array('a','e','i','o','u');
	$consoantes = array('b','c','d','f','g','h','j','k','l','m','n','p','r','s','t','v','w','x','y','z',);
 
	$palavra = '';
	$tamanho_palavra = rand(1,1);
	$contar_silabas = 0;

	while($contar_silabas < $tamanho_palavra){
	   $vogal = $vogais[rand(0,count($vogais)-1)];
	   $consoante = $consoantes[rand(0,count($consoantes)-1)];
	   $silaba = $consoante.$vogal;
	   $palavra .=$silaba;
	   $contar_silabas++;
	   unset($vogal,$consoante,$silaba);
}
return $palavra;
//echo "<h3>A palavra aleatória gerado foi: ".$palavra."</h3>";
unset($vogais,$consoantes,$palavra,$tamanho_palavra,$contar_silabas);
}

function numeros(){
	$e = [0,1,2,3,4,5,6,7,8,9];
	$n1 =  $e[rand(0,9)];
	$n2 =  $e[rand(0,9)];
	$n3 =  $e[rand(0,9)];
	$n4 =  $e[rand(0,9)];
	$n5 =  $e[rand(0,9)];
	$n6 =  $e[rand(0,9)];
	$n7 =  $e[rand(0,9)];
	$n8 =  $e[rand(0,9)];
	$n9 =  $e[rand(0,9)];
	$n10 = $e[rand(0,9)];
	$n11 = $e[rand(0,9)];

	$d = $n1.$n2.$n3.'.'.$n4.$n5.$n6.'.'.$n7.$n8.$n9.'-'.$n10.$n11;
	
	return $d;
}

function cep(){
	$e = [0,1,2,3,4,5,6,7,8,9];
	$n1 =  $e[rand(0,9)];
	$n2 =  $e[rand(0,9)];
	$n3 =  $e[rand(0,9)];
	$n4 =  $e[rand(0,9)];
	$n5 =  $e[rand(0,9)];
	$n6 =  $e[rand(0,9)];
	$n7 =  $e[rand(0,9)];
	$n8 =  $e[rand(0,9)];
	$n9 =  $e[rand(0,9)];
	$n10 = $e[rand(0,9)];
	$n11 = $e[rand(0,9)];

	$d = $n1.$n2.'.'.$n3.$n4.$n5.'-'.$n6.$n7.$n8;
	
	return $d;
}

function floats(){
	$e = [0,1,2,3,4,5,6,7,8,9];
	$n1 =  $e[rand(0,9)];
	$n2 =  $e[rand(0,9)];
	$n3 =  $e[rand(0,9)];
	$n4 =  $e[rand(0,9)];
	$n5 =  $e[rand(0,9)];
	$n6 =  $e[rand(0,9)];

	$d =$n1.$n2.$n3.$n4.$n5.$n6;
	
	return $d;
}
function pis(){
	$e = [0,1,2,3,4,5,6,7,8,9];
	$n1 =  $e[rand(0,9)];
	$n2 =  $e[rand(0,9)];
	$n3 =  $e[rand(0,9)];
	$n4 =  $e[rand(0,9)];
	$n5 =  $e[rand(0,9)];
	$n6 =  $e[rand(0,9)];
	$n7 =  $e[rand(0,9)];
	$n8 =  $e[rand(0,9)];
	$n9 =  $e[rand(0,9)];
	$n10 = $e[rand(0,9)];
	$n11 = $e[rand(0,9)];

	$d = $n1.$n2.$n3.''.$n4.$n5.$n6.''.$n7.$n8.$n9.''.$n10.$n11;
	
	return $d;
}
function nasc(){
	$e = [0,1,2,3,4,5,6,7,8,9];
	$n1 =  $e[rand(1,2)];
	$n2 =  $e[rand(0,9)];
	$n3 =  $e[rand(0,9)];
	$n4 =  $e[rand(0,9)];
	$n5 =  $e[rand(0,9)];
	$n6 =  $e[rand(0,9)];
	$n7 =  $e[rand(0,9)];
	$n8 =  $e[rand(0,9)];
	$n9 =  $e[rand(0,9)];
	$n10 = $e[rand(0,9)];
	$n11 = $e[rand(0,9)];

	$d = "$n1.$n2.$n3.$n4.'-'.$n5.$n6.'-'.$n7.$n8";
	
	return $d;
}
?>

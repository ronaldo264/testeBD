<?php
	require_once 'execute.php';
	require_once 'gerador.php';
	$conexao = ibase_connect('127.0.0.1:C:\Users\Ronaldo\AppData\Roaming\HK-Software\IBExpert\ESTATISTICA.FDB', 'SYSDBA', 'masterkey');

	$vai_p =0;
		while ($vai_p < 10000) {
			$nome_p = gerar();
			$cpf = cpf();
			$nasc = nasc();
			$pis  = pis();
			$ini = rand(1,100);
			$emp_p = rand(1,10);
			$trab_p = rand(1,100);
			$sql_p = "INSERT INTO funcionario(id_end_func,id_emp_func,id_trab_func,nome,cpf,nasc,pis) VALUES($ini, $emp_p,$trab_p,'$nome_p','$cpf','$nasc','$pis')";
			$resul_p = ibase_query($conexao, $sql_p);

			$vai_p++;
			
		}
		if($resul_p){
			echo 'Foram Inseridas 10.000 Funcionários!';
		}else{
			echo'Algo deu errado ao tentar inserir dados na tabela funcionario!';
		}
		ibase_close($conexao); 
?>
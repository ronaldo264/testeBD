<?php
	require_once 'gerador.php';
	require_once 'conecta.php';
	$iniciar = 0;
	$emp = 1;
	while($iniciar < 100){
		$nome = gerar();
		$funcao= gerar();
		$salario = floats();
		
		
		$sqlMySQL = "INSERT INTO trabalho(nome_trab, funcao, salario) VALUES (:nome,:funcao,:salario)";
            try {
                $insere = $con->prepare($sqlMySQL);
				$insere->bindValue(':nome', $nome, PDO::PARAM_STR);
                $insere->bindValue(':funcao', $funcao, PDO::PARAM_STR);
				$insere->bindValue(':salario', $salario, PDO::PARAM_STR);
				$insere->execute();
                    
            } catch (Exception $ex) {
                
            }
		$iniciar++;
	}
	
	echo '100 registros inseridos com sucesso!';

?>
<?php
	require_once 'gerador.php';
	require_once 'conecta.php';
	$iniciar = 0;

	while($iniciar < 100){
		$rua = gerar();
		$bairro = gerar();
		$cidade= gerar();
		$numero = floats();
		$cep = cep();
		
		
		$sqlMySQL = "INSERT INTO endereco(cidade, bairro, rua, numero, cep) VALUES (:cidade, :bairro, :rua, :numero, :cep)";
            try {
                $insere = $con->prepare($sqlMySQL);
				$insere->bindValue(':rua', $rua, PDO::PARAM_STR);
                $insere->bindValue(':numero', $numero, PDO::PARAM_STR);
                $insere->bindValue(':bairro', $bairro, PDO::PARAM_STR);
				$insere->bindValue(':cidade', $cidade, PDO::PARAM_STR);
				$insere->bindValue(':cep', $cep, PDO::PARAM_STR);
				$insere->execute();
                    
            } catch (Exception $ex) {
                
            }
		$iniciar++;
	}
	
	echo '100 endereços inseridos com sucesso!';
	
	
	$ini_trab =0;
	while($ini_trab < 100){
		$nome = gerar();
		$funcao= gerar();
		$salario = floats();
		
		
		$sql_trab = "INSERT INTO trabalho(nome_trab, funcao, salario) VALUES (:nome,:funcao,:salario)";
            try {
                $insere = $con->prepare($sql_trab);
				$insere->bindValue(':nome', $nome, PDO::PARAM_STR);
                $insere->bindValue(':funcao', $funcao, PDO::PARAM_STR);
				$insere->bindValue(':salario', $salario, PDO::PARAM_STR);
				$insere->execute();
                    
            } catch (Exception $ex) {
                
            }
		$ini_trab++;
	}
	
	echo '100 trabalhos inseridos com sucesso!';
	
	$ini_emp = 0;
	while($ini_emp < 10){
		$nome_emp = gerar();
		$emp = rand(1,100);
		$trab = rand(1,100);
		
		$sql_emp = "INSERT INTO empresa(id_end_emp, id_trab_emp, nome_emp) VALUES (:emp, :trab, :nome_emp)";
            try {
                $insere = $con->prepare($sql_emp);
				$insere->bindValue(':emp', $emp, PDO::PARAM_STR);
				$insere->bindValue(':trab', $trab, PDO::PARAM_STR);
                $insere->bindValue(':nome_emp', $nome_emp, PDO::PARAM_STR);
                
				$insere->execute();
                    
            } catch (Exception $ex) {
                
            }
		$ini_emp++;
	}
	$con = null;
	echo '10 Empresas inseridas com sucesso!';

?>
<?php
	require_once 'gerador.php';
	require_once 'conecta.php';
	$ini_func = 0;
	while($ini_func < 10000){
		$nome = gerar();
		$cpf = cpf();
		$nasc = nasc();
		$pis  = pis();
		$ini = rand(1,100);
		$trab = rand(1,100);
		$emp = rand(1,10);

		
		
		$sqlMySQL = "INSERT INTO funcionario(id_end_func,id_emp_func,id_trab_func,nome,cpf,nasc,pis) VALUES(:ini, :emp,:trab,:nome,:cpf,:nasc,:pis)";
		
            try {
                $insere = $con->prepare($sqlMySQL);
			    $insere->bindValue(':ini', $ini, PDO::PARAM_STR);
				$insere->bindValue(':emp', $emp, PDO::PARAM_STR);
				$insere->bindValue(':trab', $trab, PDO::PARAM_STR);
                $insere->bindValue(':nome', $nome, PDO::PARAM_STR);
				$insere->bindValue(':cpf', $cpf, PDO::PARAM_STR);
				$insere->bindValue(':nasc', $nasc, PDO::PARAM_STR);
				$insere->bindValue(':pis', $pis, PDO::PARAM_STR);
				$insere->execute();
                    
            } catch (Exception $ex) {
                
            }
		$ini_func++;
	}
	$con = null;
	echo "10.000 funcionários inseridos!";
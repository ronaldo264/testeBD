<?php
	require_once 'gerador.php';
	require_once 'conecta.php';
	$iniciar = 0;
	$ini = 0;
	$emp = 0;
	while($iniciar < 10000){
		$nome = gerar();
		$num = numeros();
		$nasc = nasc();
		$pis  = pis();
		$ini = rand(1,100);
		$emp = rand(1,100);

		
		
		$sqlMySQL = "INSERT INTO pessoa(id_end_pessoa,id_emp_pessoa,nome,cpf,nasc,pis) VALUES(:ini, :emp,:nome,:num,:nasc,:pis)";
		
            try {
                $insere = $con->prepare($sqlMySQL);
			    $insere->bindValue(':ini', $ini, PDO::PARAM_STR);
				$insere->bindValue(':emp', $emp, PDO::PARAM_STR);
                $insere->bindValue(':nome', $nome, PDO::PARAM_STR);
				$insere->bindValue(':num', $num, PDO::PARAM_STR);
				$insere->bindValue(':nasc', $nasc, PDO::PARAM_STR);
				$insere->bindValue(':pis', $pis, PDO::PARAM_STR);
				$insere->execute();
                    
            } catch (Exception $ex) {
                
            }
		$iniciar++;
	}

?>


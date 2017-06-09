<?php
	require_once 'gerador.php';
	require_once 'conecta.php';
	$iniciar = 0;
	$ini = 1;
	while($iniciar < 100){
		$nome = gerar();
		$emp = rand(1,100);
		$trab = rand(1,100);
		
		$sqlMySQL = "INSERT INTO empresa(id_end_emp, id_trab_emp, nome_emp) VALUES (:emp, :trab, :nome)";
            try {
                $insere = $con->prepare($sqlMySQL);
				$insere->bindValue(':emp', $emp, PDO::PARAM_STR);
				$insere->bindValue(':trab', $trab, PDO::PARAM_STR);
                $insere->bindValue(':nome', $nome, PDO::PARAM_STR);
                
				$insere->execute();
                    
            } catch (Exception $ex) {
                
            }
		$iniciar++;
	}
	
	echo '100 Empresas inseridas com sucesso!';

?>
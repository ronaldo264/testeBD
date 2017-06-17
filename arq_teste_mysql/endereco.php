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
	
	echo '100 registros inseridos com sucesso!';

?>
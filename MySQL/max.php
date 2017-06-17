<?php
	require_once 'conecta.php';
	
		$sqlMySQL = "select sum(id_resul) as total from resultado"; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
	
                    
				} catch (Exception $ex) {
					
				}

				print_r($resultado);
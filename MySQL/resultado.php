<?php
	require_once 'conecta.php';
	
		$sqlMySQL = "select *from resultado where mb=33 "; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                    
				} catch (Exception $ex) {
					
				}
				echo '<table>';
				echo '<h1> Join entre as quatro tabelas retornando todos os registros! </h1>';
				echo '<tr>
						<td>Código </td> <td>Tempo Gasto p/ Consulta</td> <td>Carga em MBs </td> <td>Quant. de registros </td> <td>Tipo da Consulta</td>
					</tr>';
				foreach ($resultado as $dado) {
					$id = $dado['id_resul'];
					$media_tempo = $dado['tempo'];
					$media_mb = $dado['mb'];
					$quant = $dado['quant'];
					$cons = $dado['consulta'];
					
					if($id % 2 == 0){
						$cor = '#555';
						$fundo = '#ccc';
					}else{
						$cor = '#ccc';
						$fundo = '#555';
					}
					
				
?>
				
					<tr>
						<td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"> <?php echo $id;?> </td> <td style="background:<?php echo $cor?>;color:<?php echo $fundo;?>;"><?php echo $media_tempo;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $media_mb;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $quant;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"><?php echo $cons;?> </td>
					</tr>
					<style type="text/css">
						table{float:left; margin-right:50px;margin-bottom:20px;}
						td{text-align:center; padding:5px;}
					</style>
<?php
				}
				
?>
				</table>
<?php
	
	$sqlMySQL = "select *from resultado where mb=98.5 "; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                    
				} catch (Exception $ex) {
					
				}
				echo '<table>';
				echo '<tr>
						<td>Código </td> <td>Tempo Gasto p/ Consulta</td> <td>Carga em MBs </td> <td>Quant. de registros </td> <td>Tipo da Consulta</td>
					</tr>';
				foreach ($resultado as $dado) {
					$id = $dado['id_resul'];
					$media_tempo = $dado['tempo'];
					$media_mb = $dado['mb'];
					$quant = $dado['quant'];
					$cons = $dado['consulta'];
					
					if($id % 2 == 0){
						$cor = '#555';
						$fundo = '#ccc';
					}else{
						$cor = '#ccc';
						$fundo = '#555';
					}
					
				
?>
				
					<tr>
						<td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"> <?php echo $id;?> </td> <td style="background:<?php echo $cor?>;color:<?php echo $fundo;?>;"><?php echo $media_tempo;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $media_mb;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $quant;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"><?php echo $cons;?> </td>
					</tr>
<?php
				}
				
?>
				</table>
<?php
	
	$sqlMySQL = "select *from resultado where mb=229.25 "; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                    
				} catch (Exception $ex) {
					
				}
				echo '<table>';
				echo '<tr>
						<td>Código </td> <td>Tempo Gasto p/ Consulta</td> <td>Carga em MBs </td> <td>Quant. de registros </td> <td>Tipo da Consulta</td>
					</tr>';
				foreach ($resultado as $dado) {
					$id = $dado['id_resul'];
					$media_tempo = $dado['tempo'];
					$media_mb = $dado['mb'];
					$quant = $dado['quant'];
					$cons = $dado['consulta'];
					
					if($id % 2 == 0){
						$cor = '#555';
						$fundo = '#ccc';
					}else{
						$cor = '#ccc';
						$fundo = '#555';
					}
					
				
?>
				
					<tr>
						<td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"> <?php echo $id;?> </td> <td style="background:<?php echo $cor?>;color:<?php echo $fundo;?>;"><?php echo $media_tempo;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $media_mb;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $quant;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"><?php echo $cons;?> </td>
					</tr>
<?php
				}
				
?>
				</table>
<?php
	
	$sqlMySQL = "select *from resultado where mb=326.75 "; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                    
				} catch (Exception $ex) {
					
				}
				echo '<table>';
				echo '<tr>
						<td>Código </td> <td>Tempo Gasto p/ Consulta</td> <td>Carga em MBs </td> <td>Quant. de registros </td> <td>Tipo da Consulta</td>
					</tr>';
				foreach ($resultado as $dado) {
					$id = $dado['id_resul'];
					$media_tempo = $dado['tempo'];
					$media_mb = $dado['mb'];
					$quant = $dado['quant'];
					$cons = $dado['consulta'];
					
					if($id % 2 == 0){
						$cor = '#555';
						$fundo = '#ccc';
					}else{
						$cor = '#ccc';
						$fundo = '#555';
					}
					
				
?>
				
					<tr>
						<td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"> <?php echo $id;?> </td> <td style="background:<?php echo $cor?>;color:<?php echo $fundo;?>;"><?php echo $media_tempo;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $media_mb;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $quant;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"><?php echo $cons;?> </td>
					</tr>
<?php
				}
				
?>
				</table>					 
				
				<p>*********************************************************************************************************************************************************************** </p>
				
<?php
					$sqlMySQL = "select *from resultado where mb=20.75"; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                    
				} catch (Exception $ex) {
					
				}
				echo '<table>';
				echo '<h1> Join entre as quatro tabelas retornando metade dos registros! </h1>';
				echo '<tr>
						<td>Código </td> <td>Tempo Gasto p/ Consulta</td> <td>Carga em MBs </td> <td>Quant. de registros </td> <td>Tipo da Consulta</td>
					</tr>';
				foreach ($resultado as $dado) {
					$id = $dado['id_resul'];
					$media_tempo = $dado['tempo'];
					$media_mb = $dado['mb'];
					$quant = $dado['quant'];
					$cons = $dado['consulta'];
					
					if($id % 2 == 0){
						$cor = '#555';
						$fundo = '#ccc';
					}else{
						$cor = '#ccc';
						$fundo = '#555';
					}
					
				
?>
				
					<tr>
						<td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"> <?php echo $id;?> </td> <td style="background:<?php echo $cor?>;color:<?php echo $fundo;?>;"><?php echo $media_tempo;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $media_mb;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $quant;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"><?php echo $cons;?> </td>
					</tr>
<?php
				}
				
?>
				</table>
<?php
					$sqlMySQL = "select *from resultado where mb=61.5"; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                    
				} catch (Exception $ex) {
					
				}
				echo '<table>';
				echo '<tr>
						<td>Código </td> <td>Tempo Gasto p/ Consulta</td> <td>Carga em MBs </td> <td>Quant. de registros </td> <td>Tipo da Consulta</td>
					</tr>';
				foreach ($resultado as $dado) {
					$id = $dado['id_resul'];
					$media_tempo = $dado['tempo'];
					$media_mb = $dado['mb'];
					$quant = $dado['quant'];
					$cons = $dado['consulta'];
					
					if($id % 2 == 0){
						$cor = '#555';
						$fundo = '#ccc';
					}else{
						$cor = '#ccc';
						$fundo = '#555';
					}
					
				
?>
				
					<tr>
						<td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"> <?php echo $id;?> </td> <td style="background:<?php echo $cor?>;color:<?php echo $fundo;?>;"><?php echo $media_tempo;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $media_mb;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $quant;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"><?php echo $cons;?> </td>
					</tr>
<?php
				}
				
?>
				</table>
				
<?php
					$sqlMySQL = "select *from resultado where mb=142.5"; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                    
				} catch (Exception $ex) {
					
				}
				echo '<table>';
				echo '<tr>
						<td>Código </td> <td>Tempo Gasto p/ Consulta</td> <td>Carga em MBs </td> <td>Quant. de registros </td> <td>Tipo da Consulta</td>
					</tr>';
				foreach ($resultado as $dado) {
					$id = $dado['id_resul'];
					$media_tempo = $dado['tempo'];
					$media_mb = $dado['mb'];
					$quant = $dado['quant'];
					$cons = $dado['consulta'];
					
					if($id % 2 == 0){
						$cor = '#555';
						$fundo = '#ccc';
					}else{
						$cor = '#ccc';
						$fundo = '#555';
					}
					
				
?>
				
					<tr>
						<td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"> <?php echo $id;?> </td> <td style="background:<?php echo $cor?>;color:<?php echo $fundo;?>;"><?php echo $media_tempo;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $media_mb;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $quant;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"><?php echo $cons;?> </td>
					</tr>
<?php
				}
				
?>
				</table>
				
<?php
					$sqlMySQL = "select *from resultado where mb=203"; 
			 
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                    
				} catch (Exception $ex) {
					
				}
				echo '<table>';
				echo '<tr>
						<td>Código </td> <td>Tempo Gasto p/ Consulta</td> <td>Carga em MBs </td> <td>Quant. de registros </td> <td>Tipo da Consulta</td>
					</tr>';
				foreach ($resultado as $dado) {
					$id = $dado['id_resul'];
					$media_tempo = $dado['tempo'];
					$media_mb = $dado['mb'];
					$quant = $dado['quant'];
					$cons = $dado['consulta'];
					
					if($id % 2 == 0){
						$cor = '#555';
						$fundo = '#ccc';
					}else{
						$cor = '#ccc';
						$fundo = '#555';
					}
					
				
?>
				
					<tr>
						<td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"> <?php echo $id;?> </td> <td style="background:<?php echo $cor?>;color:<?php echo $fundo;?>;"><?php echo $media_tempo;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $media_mb;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>;"><?php echo $quant;?> </td> <td style="background:<?php echo $cor;?>;color:<?php echo $fundo;?>"><?php echo $cons;?> </td>
					</tr>
<?php
				}
				
?>
				</table>
				
				<p>*********************************************************************************************************************************************************************** </p>
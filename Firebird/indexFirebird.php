<div style="width:1600px;margin: auto; padding:10px; border:1px solid #ccc;display: table;">
    <div style="float:left; border:1px solid #ccc; padding:5px;">
	<style type="text/css">
		td{width:150px; padding:4px;}
	</style>
        <h2> Teste Firebird</h2>
<?php
	$conexao = new PDO("firebird:dbname=C:\Users\Ronaldo\AppData\Roaming\HK-Software\IBExpert\ESTATISTICA.FDB", "SYSDBA", "masterkey");
	require_once 'execute.php';
	echo 'passou';
    //////////////////SELECT FIREBIRD/////////////////////////////////////////////
    $inicioSelFir = tempo();                                                    
/**/
	$sqlSelFir = "Select * from funcionario f INNER JOIN empresa e ON(f.id_emp_func = e.id_emp)INNER JOIN endereco en ON(f.id_end_func = en.id_end)INNER JOIN trabalho as t on(f.id_trab_func = t.id_trab) WHERE f.id_func > 200000 ORDER BY f.id_func ASC";//BETWEEN 50 AND 1000 and f.id_trab_func BETWEEN 10 AND 12  
	$resul = $conexao->query($sqlSelFir);
	$resul->execute();
    if ($resul) {                                                               
        $fimSelFir = tempo();
		$mb_select = carga();
		$tempo = number_format($fimSelFir - $inicioSelFir, 8);
		$consulta = 'update join_2_tab_10';
		$total = 10000;
		echo '<table> ';
		echo '<tr> <td> Cód: </td><td> Nome:</td> <td>CPF:</td> <td>PIS/PASEP</td> <td> Data de Nasc: </td> <td> Empresa:</td><td> Cidade: </td> <td> Bairro:</td><td> Rua:</td><td> Nº:</td> <td> CEP:</td></tr>';
		foreach ($resul as $dado){
			$id = $dado[0];
			$id_trab = $dado[3];
			$nome = $dado[4];
			$cpf = $dado[5];
			$nasc = $dado[6];
			$pis = $dado[7];
				?>
				
		<tr style="background:<?php echo $color;?>;color:<?php echo $font;?>;"> <?php echo '<td>'. $id.'</td> <td>'. $nome.'</td> <td>'.$cpf.' </td> <td>'.$pis.' </td> <td> '.$nasc.' </td> <td> '.$id_trab.' </td>'; //<td> '.$row["NOME_EMP"].'</td><td> '.$row["CIDADE"].'</td> <td> '.$row["BAIRRO"].'</td> <td> '.$row["RUA"].'</td><td> '.$row["NUMERO"].'</td><td> '.$row["CEP"].'</td>' ?> </tr>
		<?php
		
		}
		require_once'conecta.php';
		$sql_insert = "insert into resultado_fire(tempo, mb, quant, consulta) values (:tempo,:mb_select, :total, :consulta)";  
			 //
            try {
                $insere = $con->prepare($sql_insert);
				$insere->bindValue(':tempo', $tempo, PDO::PARAM_STR);
                $insere->bindValue(':mb_select', $mb_select, PDO::PARAM_STR);
				$insere->bindValue(':total', $total, PDO::PARAM_STR);
				$insere->bindValue(':consulta', $consulta, PDO::PARAM_STR);
				$insere->execute();
                
				
            } catch (Exception $ex) {
                
            }
	}
	
	echo "O Tempo Gasto foi ".$tempo."<br />A Carga foi ".$mb_select;
		echo '<style type="text/css">
					td{ border-right: 1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;}
					table{border:1px solid #000;
				
				</style>';
		
		
		echo '</table>';

    $tempoSelFir = number_format(($fimSelFir - $inicioSelFir),3);              //
    echo "Mostra" . $tempoSelFir;                                               //
    $mediaSelFir = $tempoSelFir / 10;                                           //
    $tamanhoselFir = $mediaSelFir * 100;                                        //
    echo '<br/>';                                                               //
    echo'O select é :' . $tempoSelFir . '<br/>';                                //
    echo $mediaSelFir;  

    echo '</div>';               
        ?>
    </div>
    <div style="width:914px; margin: auto; padding:10px; border:1px solid #ccc;float: left;">
        <p><strong> * O parametro utilizado para a comparação foi de 1(um) segundo para inserção de 100 linhas.</strong></p>
        <div style="padding:10px 10px 0 10px;position: relative">
            <span> Firbird <?php echo $tamanhoselFir; ?>% </span>   <div style="width:<?php echo $tamanhoselFir; ?>%; height:20px; background:red; margin-right:10px;margin-bottom:10px;" >
            </div>
        </div>
    </div>
    <div style="width:914px; margin: auto; padding:10px; border:1px solid #ccc;float: left;">
        <p><strong> * O parametro utilizado para a comparação foi de 1(um) segundo para inserção de 100 linhas.</strong></p>
        <div style="padding:10px 10px 0 10px;position: relative">
            <span> Firbird <?php echo $tamanhoselFir; ?>% </span>   <div style="width:<?php echo $tamanhoselFir; ?>%; height:20px; background:red; margin-right:10px;margin-bottom:10px;" >

        </div>
    </div>
</div>
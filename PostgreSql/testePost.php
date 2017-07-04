 <?php
 require_once'execute.php';
 try {
    $db = new PDO("pgsql:host=localhost dbname='testeBanco' user = 'postgres' password = '180997'");
	echo 'conectado com sucesso';
 } catch (PDOException  $e) {
    print $e->getMessage();
 }
 $inicio = tempo();
 $sql = 'SELECT * from funcionario as f inner join endereco as e on(f.id_end_func = e.id_end) inner join 
 empresa em on(f.id_emp_func = em.id_emp) where id_func <= 1000 and f.id_end_func < 67  and em.id_emp > 2  and em.id_emp < 8 order by f.id_func';  
 $resultado = $db->query($sql);
 $resultado->execute();
 $fim = tempo();
 $carga = carga();
 $tempoFinal = number_format($fim - $inicio, 6);
 //$resultado = $db->fetchAll(PDO::FETCH_ASSOC);
 echo '<table style="width:1600px;">
		<tr>
			<td style="background:#000; color:#ccc;">Código </td><td style="background:#000; color:#ccc;">Cód. Endereço </td><td style="background:#000; color:#ccc;">Cód. Empresa </td><td style="background:#000; color:#ccc;">Cód. Trabalho </td><td style="background:#000; color:#ccc;">Funcionário </td><td style="background:#000; color:#ccc;">CPF </td><td style="background:#000; color:#ccc;">Data de Nasc.</td><td style="background:#000; color:#ccc;">PIS/PASEP </td><td style="background:#000; color:#ccc;">Cidade</td><td style="background:#000; color:#ccc;">Bairro </td><td style="background:#000; color:#ccc;">Rua </td><td style="background:#000; color:#ccc;">Número</td><td style="background:#000; color:#ccc;">CEP </td>
		</tr>';
 $soma =0;
foreach ($resultado as $row){
	$id = $row['id_func'];
	$id_end = $row['id_end_func'];
	$id_emp = $row['id_emp_func'];
	$id_trab = $row['id_trab_func'];
	$nome = $row['nome'];
	$cpf = $row['cpf'];
	$nasc = $row['nasc'];
	$pis = $row['pis'];
	$rua = $row['rua'];
	$numero = $row['numero'];
	$bairro = $row['bairro'];
	$cidade = $row['cidade'];
	$cep = $row['cep'];
	
$soma++;
	
	if($soma % 2 == 0){
		$cor = '#ccc';
	}
	if($soma % 2 == 1){
		$cor = '#fff';
	}
	echo'<style type="text/css">
			td{padding:3px 5px;}
		</style>
		<tr>
			<td style="background:'.$cor.'">'.$id.' </td><td style="background:'.$cor.'">'.$id_end.' </td><td style="background:'.$cor.'">'.$id_emp.' </td><td style="background:'.$cor.'">'.$id_trab.' </td><td style="background:'.$cor.'">'.$nome.' </td><td style="background:'.$cor.'">'.$cpf.' </td><td style="background:'.$cor.'">'.$nasc.' </td><td style="background:'.$cor.'">'.$pis.' </td><td style="background:'.$cor.'">'.$cidade.' </td><td style="background:'.$cor.'">'.$bairro.' </td><td style="background:'.$cor.'">'.$rua.' </td><td style="background:'.$cor.'">'.$numero.' </td><td style="background:'.$cor.'">'.$cep.' </td>
		</tr>';
}
echo '<br /> O total de registros : '.$soma.'<br />';
echo ' O Tempo total para a consulta foi : '.$tempoFinal.'<br />';
echo ' MegaBytes consumidos : '.$carga.'<br />';
echo '</table>';
 ?>
 
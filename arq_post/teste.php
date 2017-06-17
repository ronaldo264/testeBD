<?php
require_once'execute.php';
$con = "host = '127.0.0.1' port = '5432' dbname = 'testeBanco' user = 'postgres' password = '180997'";
$conexao = pg_connect($con) or die ("Falha na Conexão".pg_last_error());
echo"<table>
		<tr>
			<td> Nome </td><td> CPF </td><td> PIS </td><td> Empresa </td><td> Código </td>
		</tr>";
		$inicio = tempo();
$sql = "select * from funcionario f inner join empresa e on(f.id_emp_func = e.id_emp) inner join trabalho t on(f.id_emp_func = e.id_emp AND t.id_trab = e.id_trab_emp) inner join endereco en on(f.id_end_func = en.id_end) WHERE f.id_emp_func <= 6 order by f.id_func";
                    $resultado = pg_query($sql)or die("Erro ao inserir dados " );
					$fim = tempo();
					$mb_gasto = carga();
					
					$tempo = number_format(($fim - $inicio),6);
					echo 'Tempo gasto para a consulta -> '.$tempo.'  Carga consumida -> '.$mb_gasto.'MB';
					while($dado = pg_fetch_array($resultado)){
						$id_func = $dado['id_func'];
						$id_emp_func = $dado['id_emp_func'];
						$nome = $dado['nome'];
						$id_end_func = $dado['id_end_func'];
						$cpf = $dado['cpf'];
						$pis = $dado['pis'];
						$nasc = $dado['nasc'];
						$id_emp = $dado['id_emp'];
						$end_emp = $dado['id_end_emp'];
						$nome_emp = $dado['nome_emp'];
						$trab_emp = $dado['id_trab_emp'];
 ?>
	

		<tr>
			<td> <?php echo $nome; ?> </td><td> <?php echo $cpf; ?> </td><td> <?php echo $pis; ?> </td><td> <?php echo $nasc; ?> </td><td> <?php echo $nome_emp; ?> </td><td> <?php echo $id_func; ?> </td>
		</tr>
	
<?php 
                }
				
				?>
				</table>
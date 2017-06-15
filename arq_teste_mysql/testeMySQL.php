<?php
	require_once 'conecta.php';
	require_once 'execute.php';
		
			
			echo "
			<style>
				td{
					padding: 5px 10px 5px 0;
					width:120px;
					text-align:center;
				}
			</style>";
			
			 $sqlMySQL = "select * from funcionario f inner join empresa e inner join trabalho t on(f.id_emp_func = e.id_emp AND t.id_trab = e.id_trab_emp) inner join endereco en on(f.id_end_func = en.id_end) WHERE f.id_emp_func = e.id_emp order by f.id_func";
			 //Update Tabela1 INNER JOIN Tabela2 ON Tabela1.tb1Cod = Tabela2.tb2Cod Set tb1Valor = (tb1Valor * tb2Valor)

             $inicioSelMysql = tempo();
            try {
                $select = $con->prepare($sqlMySQL);
                $select->execute();
				$resultado = $select->fetchAll(PDO::FETCH_ASSOC);
                $fimSelMysql = tempo();
				$mb_select = carga();
                    
            } catch (Exception $ex) {
                
            }
		$tempSelMysql = number_format(($fimSelMysql - $inicioSelMysql), 8);
            echo'O select é :'. $tempSelMysql.'<br />';
			echo'MBs utilizados :'. $mb_select;
			echo "<table>
			<tr>
			 <td> <strong> Cod:</strong></td><td> <strong>Nome:  </strong></td> <td><strong>  Data De Nascimento:  </strong></td><td><strong>  CPF:  </strong></td><td><strong>  PIS/PASEP:  </strong></td><td><strong>  Cargo:  </strong></td> <td><strong>  Função:  </strong></td> <td><strong>  Empresa:  </strong></td> <td><strong>  Salário:  </strong></td> <td><strong>  Cod Empresa:  </strong></td> <td><strong>  Cidade:  </strong></td> <td><strong>  Bairro:  </strong></td> <td><strong>  Rua:  </strong></td> <td><strong>  Numero:  </strong></td> <td><strong>  Cep:  </strong></td></tr>";
			foreach ($resultado as $dado) {
			$id = $dado['id_func'];
			$nome_pessoa = $dado['nome'];
            $cpf = $dado['cpf'];
            $nasc = $dado['nasc'];
			$pis = $dado['pis'];
			$id_emp = $dado['id_emp'];
			$nome_emp = $dado['nome_emp'];
			$nome_trab = $dado['nome_trab'];
			$func = $dado['funcao'];
			$sal = $dado['salario'];
			$id_end = $dado['id_end'];
			$cidade = $dado['cidade'];
			$bairro = $dado['bairro'];
			$rua = $dado['rua'];
			$num = $dado['numero'];
			$cep = $dado['cep'];
			
			echo "
			<style>
				td{
					padding: 5px 10px 5px 0;
					width:200px;
					text-align:center;
				}
			</style>
			
			<tr>
			 <td>".$id."</td><td>".$nome_pessoa."</td> <td>".$nasc."</td><td style=>".$cpf."</td><td>".$pis."</td><td>".$nome_trab."</td> <td>".$func."</td><td>".$nome_emp."</td> <td>".$sal."</td><td>".$id_emp."</td> <td>".$cidade."</td> <td>".$bairro."</td><td>".$rua."</td> <td>".$num."</td><td>".$cep."</td></tr>";
			 
			 
			}
			echo '</table>';
	
?>
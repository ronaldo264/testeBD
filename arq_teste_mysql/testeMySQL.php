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
			
			 $sqlMySQL = "select * from pessoa p inner join empresa e inner join trabalho t on(p.id_emp_pessoa = e.id_emp AND t.id_trab = e.id_trab_emp) inner join endereco en on(p.id_end_pessoa = en.id_end) WHERE p.id_pessoa < 3000 order by p.id_pessoa";
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
            echo'O select é :'. $tempSelMysql;
			echo'MBs utilizados :'. $mb_select;
			echo "<table>
			<tr>
			 <td> <strong> Cod:</strong></td><td> <strong>Nome:  </strong></td> <td><strong>  Data De Nascimento:  </strong></td><td><strong>  CPF:  </strong></td><td><strong>  PIS/PASEP:  </strong></td><td><strong>  Cargo:  </strong></td> <td><strong>  Função:  </strong></td> <td><strong>  Empresa:  </strong></td> <td><strong>  Salário:  </strong></td> <td><strong>  Cidade:  </strong></td> <td><strong>  Bairro:  </strong></td> <td><strong>  Rua:  </strong></td> <td><strong>  Numero:  </strong></td> <td><strong>  Cep:  </strong></td></tr>";
			foreach ($resultado as $dado) {
			$id = $dado['id_pessoa'];
			$nome_pessoa = $dado['nome'];
            $cpf = $dado['cpf'];
            $nasc = $dado['nasc'];
			$pis = $dado['pis'];
			$nome_emp = $dado['nome_emp'];
			$nome_trab = $dado['nome_trab'];
			$func = $dado['funcao'];
			$sal = $dado['salario'];
			
			echo "
			<style>
				td{
					padding: 5px 10px 5px 0;
					width:120px;
					text-align:center;
				}
			</style>
			
			<tr>
			 <td>".$id."</td><td>".$nome_pessoa."</td> <td>".$nasc."</td><td style=>".$cpf."</td><td>".$pis."</td><td>".$nome_trab."</td> <td>".$func."</td><td>".$nome_emp."</td> <td>".$sal."</td></tr>";
			 
			 
			}
			
	
?>
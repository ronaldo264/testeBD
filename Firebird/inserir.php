<?php
        require_once 'execute.php';
		require_once 'gerador.php';
        $conexao = ibase_connect('127.0.0.1:C:\Users\Ronaldo\AppData\Roaming\HK-Software\IBExpert\ESTATISTICA.FDB', 'SYSDBA', 'masterkey');
		$vai_end =0;
            while ($vai_end < 100) {
				$rua = gerar();
				$bairro = gerar();
				$cidade= gerar();
				$numero = floats();
				$cep = cep();
			$sql_end = "INSERT INTO endereco(cidade, bairro, rua, numero, cep) VALUES ('$cidade', '$bairro', '$rua', $numero, '$cep')";
                $resul_end = ibase_query($conexao, $sql_end);
               
				$vai_end++;
				
            }
			if($resul_end){
				echo 'Foram Inseridos 100 endereços!';
			}else{
				echo'Algo deu errado ao tentar inserir dados na tabela endereco!';
			}
           
            echo "Tempo para inserção  é de: <strong>" . $tempo . "</strong> <br/>";
           
        
        echo "Tempo Total para Inserção é de: <strong>" . number_format($div,2) ." minutos</strong> <br/>";*/
		
		$vai_trab =0;
            while ($vai_trab < 100) {
				$nome_trab = gerar();
				$funcao= gerar();
				$salario = floats();

			$sql_trab = "INSERT INTO trabalho(nome_trab, funcao, salario) VALUES ('$nome_trab','$funcao','$salario')";
                $resul_trab = ibase_query($conexao, $sql_trab);

				$vai_trab++;
				
            }
			if($resul_trab){
				echo 'Foram Inseridas 100 profissões!';
			}else{
				echo'Algo deu errado ao tentar inserir dados na tabela trabalho!';
			}
			
			$vai_emp =0;
            while ($vai_emp < 10) {
				$nome_èmp = gerar();
				$end_emp = rand(1,100);
				$trab = rand(1,100);
			$sql_emp = "INSERT INTO empresa(id_end_emp, id_trab_emp, nome_emp) VALUES ($end_emp, $trab, '$nome_èmp')";
                $resul_emp = ibase_query($conexao, $sql_emp);

				$vai_emp++;
				
            }
			if($resul_emp){
				echo 'Foram Inseridas 10 eempresas!';
			}else{
				echo'Algo deu errado ao tentar inserir dados na tabela empresa!';
			}
			*/
			$vai_p =0;
            while ($vai_p < 10000) {
				$nome_p = gerar();
				$cpf = cpf();
				$nasc = nasc();
				$pis  = pis();
				$ini = rand(1,100);
				$emp_p = rand(1,10);
				$trab_p = rand(1,100);
				$sql_p = "INSERT INTO funcionario(id_end_func,id_emp_func,id_trab_func,nome,cpf,nasc,pis) VALUES($ini, $emp_p,$trab_p,'$nome_p','$cpf','$nasc','$pis')";
				$resul_p = ibase_query($conexao, $sql_p);

				$vai_p++;
				
            }
			if($resul_p){
				echo 'Foram Inseridas 10.000 Funcionários!';
			}else{
				echo'Algo deu errado ao tentar inserir dados na tabela funcionario!';
			}
			ibase_close($conexao); 
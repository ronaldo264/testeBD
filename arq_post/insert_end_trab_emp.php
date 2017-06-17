<?php
$con = "host = '127.0.0.1' port = '5432' dbname = 'testeBanco' user = 'postgres' password = '180997'";
$conexao = pg_connect($con) or die ("Falha na Conexão".pg_last_error());
require_once'gerador.php';

                $para_trab = 0;
                while ($para_trab < 100) {
					$nome = gerar();
					$funcao = gerar();
					$sal    = floats();
					
                    $sql_trab = "INSERT INTO trabalho(nome_trab, funcao, salario) VALUES ('$nome','$funcao','$sal')";
                    $resul_trab = pg_query($sql_trab)or die("Erro ao inserir dados " );
                    
                    $para_trab++;
                    if (!$resul_trab) {
                        echo"Não deu Certo";
                    }
                }
				
				echo 'Foram Inseridos 100 trabalhos!';
				
				 $para_end = 0;
                while ($para_end < 100) {
					$num = rand(1,4);
					$rua = gerar();
					$bai = gerar();
					$cid = gerar();
					$cep = cep();
                    $sql_end = "INSERT INTO endereco(rua, numero, bairro, cidade, cep) VALUES ('$rua', '$num', '$bai', '$cid', '$cep')";
                    $resul_end = pg_query($sql_end)or die("Erro ao inserir dados " );
                    
                    $para_end++;
                    if (!$resul_end) {
                        echo"Não deu Certo";
                    }
                }
				
				echo 'Foram Inseridos 100 Endereços!';
               
               $para_emp = 0;
                while ($para_emp < 100) {
					$end = rand(1,99).rand(1,99);
					$trab = rand(1,10);
					$nome = gerar();

                    $sql_emp = "INSERT INTO empresa(id_end_emp, id_trab_emp, nome_emp) VALUES ('$end', '$trab', '$nome')";
                    $resul_emp = pg_query($sql_emp)or die("Erro ao inserir dados " );
                    
                    $para_emp++;
                    
                }
				if (!$resul_emp) {
                        echo"Não deu Certo";
                    }else{
						echo 'Foram inseridos 100 registros com sucesso';
					}
               
                ?>
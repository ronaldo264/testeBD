<?php
$con = "host = '127.0.0.1' port = '5432' dbname = 'testeBanco' user = 'postgres' password = '180997'";
$conexao = pg_connect($con) or die ("Falha na Conexão".pg_last_error());
require_once'gerador.php';

$para_end = 0;
                while ($para_end < 100) {
					$num = rand(1,4);
					$rua = gerar();
					$bai = gerar();
					$cid = gerar();
					$cep = cep();
                    $sql = "INSERT INTO endereco(rua, numero, bairro, cidade, cep) VALUES ('$rua', '$num', '$bai', '$cid', '$cep')";
                    $resultado = pg_query($sql)or die("Erro ao inserir dados " );
                    
                    $para_end++;
                    if (!$resultado) {
                        echo"Não deu Certo";
                    }
                }
				
				echo 'Foram Inseridos 100 Endereços!';

$para_trab = 0;
                while ($para_trab < 100) {
					$nome = gerar();
					$funcao = gerar();
					$sal    = floats();
					
                    $sql = "INSERT INTO trabalho(nome_trab, funcao, salario) VALUES ('$nome','$funcao','$sal')";
                    $resultado = pg_query($sql)or die("Erro ao inserir dados " );
                    
                    $para_trab++;
                    if (!$resultado) {
                        echo"Não deu Certo";
                    }
                }
				
				echo 'Foram Inseridos 100 trabalhos!';
               

$para_emp = 0;
                while ($para_emp < 10) {
					$end = rand(1,100);
					$trab = rand(1,100);
					$nome = gerar();

                    $sql = "INSERT INTO empresa(id_end_emp, id_trab_emp, nome_emp) VALUES ('$end', '$trab', '$nome')";
                    $resultado = pg_query($sql)or die("Erro ao inserir dados " );
                    
                    $para_emp++;
                    
                }
				if (!$resultado) {
                        echo"Não deu Certo";
                    }else{
						echo 'Foram inseridos 100 registros com sucesso';
					}
               
                ?>
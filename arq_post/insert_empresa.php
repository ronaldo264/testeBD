<?php
$con = "host = '127.0.0.1' port = '5432' dbname = 'testeBanco' user = 'postgres' password = '180997'";
$conexao = pg_connect($con) or die ("Falha na Conexão".pg_last_error());
require_once'gerador.php';

                $para = 0;
                while ($para < 100) {
					$end = rand(1,99).rand(1,99);
					$trab = rand(1,10);
					$nome = gerar();

                    $sql = "INSERT INTO empresa(id_end_emp, id_trab_emp, nome_emp) VALUES ('$end', '$trab', '$nome')";
                    $resultado = pg_query($sql)or die("Erro ao inserir dados " );
                    
                    $para++;
                    
                }
				if (!$resultado) {
                        echo"Não deu Certo";
                    }else{
						echo 'Foram inseridos 100 registros com sucesso';
					}
               
                ?>
                
            </div>
        </div>
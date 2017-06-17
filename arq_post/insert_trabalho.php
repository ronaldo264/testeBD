<?php
$con = "host = '127.0.0.1' port = '5432' dbname = 'testeBanco' user = 'postgres' password = '180997'";
$conexao = pg_connect($con) or die ("Falha na Conexão".pg_last_error());
require_once'gerador.php';

                $para = 0;
                while ($para < 100) {
					$nome = gerar();
					$funcao = gerar();
					$sal    = floats();
					
                    $sql = "INSERT INTO trabalho(nome_trab, funcao, salario) VALUES ('$nome','$funcao','$sal')";
                    $resultado = pg_query($sql)or die("Erro ao inserir dados " );
                    
                    $para++;
                    if (!$resultado) {
                        echo"Não deu Certo";
                    }
                }
				
				echo 'Foram Inseridos 100 trabalhos!';
               
                ?>
                
            </div>
        </div>
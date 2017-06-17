<?php
$con = "host = '127.0.0.1' port = '5432' dbname = 'testeBanco' user = 'postgres' password = '180997'";
$conexao = pg_connect($con) or die ("Falha na Conexão".pg_last_error());
require_once'gerador.php';

                $para = 0;
                while ($para < 10000) {
					$emp= rand(1,10);
					$end= rand(1,100);
					$trab= rand(1,100);
					$nome = gerar();
					$cpf = cpf();
					$pis = pis();
					$nasc = nasc();
                    $sql = "INSERT INTO funcionario(id_end_func,id_emp_func,id_trab_func,nome,cpf,nasc,pis)VALUES ('$end','$emp','$trab', '$nome', '$cpf','$nasc', '$pis')";
                    $resultado = pg_query($sql)or die("Erro ao inserir dados " );
                    
                    $para++;
                    if (!$resultado) {
                        echo"Não deu Certo";
                    }
                }
               
                ?>
                
            </div>
        </div>
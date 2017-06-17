<?php
$con = "host = '127.0.0.1' port = '5432' dbname = 'testeBanco' user = 'postgres' password = '180997'";
$conexao = pg_connect($con) or die ("Falha na Conexão".pg_last_error());
require_once'gerador.php';

                $para = 0;
                while ($para < 10000) {
					$num = rand(1,4);
					$rua = gerar();
					$bai = gerar();
					$cid = gerar();
					$cep = cep();
                    $sql = "INSERT INTO endereco(rua, numero, bairro, cidade, cep) VALUES ('$rua', '$num', '$bai', '$cid', '$cep')";
                    $resultado = pg_query($sql)or die("Erro ao inserir dados " );
                    
                    $para++;
                    if (!$resultado) {
                        echo"Não deu Certo";
                    }
                }
				
				echo 'Foram Inseridos 100 Endereços!';
               
                ?>
                
            </div>
        </div>
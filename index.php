<div style="width:936px;margin: auto; padding:10px; border:1px solid #ccc;display: table;">
    <div style="width:300px; float:left; border:1px solid #ccc; padding:5px;">
        <h2> Teste Firebird</h2>
        <?php
        require_once 'execute.php';
        $conexao = ibase_connect("127.0.0.1:c:/Users/Rodrigo/AppData/Roaming/Hk-Software/IBExpert/estatistica.fdb", "SYSDBA", "masterkey");

        $soma = 0;
        $num = 1;
        $start = 0;
        while ($start < 10) {
            $para = 0;
            $inicio = teste();

            while ($para < 100) {
                $sql = "insert into tabela2 (nome,numero) values ('Ronaldo','1234567890')";
                $resultado = ibase_query($conexao, $sql);
                $para++;
            }

            $fim = teste();
            $tempo = number_format(($fim - $inicio), 4);
            $start++;
            $soma += $tempo;
            echo $num . "º Tempo para inserção " . $para . " é de: <strong>" . $tempo . "</strong> <br/>";
            $num++;
        }

        $fim1 = teste();
        $tempo1 = number_format(($fim1 - $inicio), 4);
        echo "Tempo Total para Inserção é de: <strong>" . $soma . "</strong> <br/>";
        $media = $soma / $start;
        echo '<strong> A Média do Firebird é de: </strong>' . $media;
        $tamanho = ($media * 100 );
    //////////////////SELECT FIREBIRD/////////////////////////////////////////////
    $inicioSelFir = teste();                                                    //
    $sqlSelFir = "Select * from tabela2 Where id <= 1000";                      //
    $resul = ibase_query($conexao, $sqlSelFir);                                 //
    if ($resul) {                                                               //
        $fimSelFir = teste();                                                   //
    }                                                                           //
    $tempoSelFir = number_format(($fimSelFir - $inicioSelFir), 8);              //
    echo "Mostra" . $tempoSelFir;                                               //
    $mediaSelFir = $tempoSelFir / 10;                                           //
    $tamanhoselFir = $mediaSelFir * 1000;                                       //
    echo '<br/>';                                                               //
    echo'O select é :' . $tempoSelFir . '<br/>';                                //
    echo $mediaSelFir;                                                          //
    ibase_close($conexao);                                                      //
    echo '</div>';                                                              //
        echo '<div style="width:300px; float:left; border:1px solid #ccc; '     //      
        . 'padding:5px;"> <h2> Teste MySQL</h2>';                               //
    //////////////////////////////////////////////////////////////////////////////
    /**************************************************************************************************####***********************************************************************
          fim do teste com firebird e início do teste com MySQL
    ***************************************************************************************************####*************************************************************************/
        require_once 'conecta.php';
        // require_once 'execute.php';
        $nome = 'Ronaldo Sabino';
        $numero = 123456789012;

        $somaMySQL = 0;
        $numMySQL = 1;
        $startMySQL = 0;
        while ($startMySQL < 10) {
            $paraMySQL = 0;
            $inicioMySQL = teste();
           
            while ($paraMySQL < 100) {
                $sqlMySQL = "INSERT INTO tabela(nome,numero) VALUES(:nome,:numero)";
                try {
                    $insere = $con->prepare($sqlMySQL);
                    $insere->bindValue(':nome', $nome, PDO::PARAM_STR);
                    $insere->bindValue('numero', $numero, PDO::PARAM_STR);

                    if ($insere->execute()) {
                        $paraMySQL++;
                    } else {
                        echo 'não cadastrado';
                    }
                } catch (Exception $ex) {
                    
                }
            }
            $fimMySQL = teste();
            $tempoMySQL = number_format(($fimMySQL - $inicioMySQL), 4);
            $startMySQL++;
            $somaMySQL += $tempoMySQL;
            echo $numMySQL . "º Tempo para inserção " . $paraMySQL . " é de: <strong>" . $tempoMySQL . "</strong> <br/>";
            $numMySQL++;
        }

        /* $sqlMySQL = "TRUNCATE tabelateste";
          try {
          $insere = $con->prepare($sqlMySQL);
          $insere->execute();
          }catch (Exception $ex) {

          } */

        $fim1MySQL = teste();
        $tempo1MySQL = number_format(($fim1MySQL - $inicioMySQL), 4);
        echo "Tempo Total para Inserção é de: <strong>" . $somaMySQL . "</strong> <br/>";
        $mediaMySQL = $somaMySQL / $startMySQL;
        echo '<strong>A Média do MySQL é de :  </strong>' . $mediaMySQL;
        $tamanhoMySQL = $mediaMySQL * 100;
        /////////////////////////////SELECT MySQL/////////////////////////////////
        $sqlMySQL = "Select * FROM tabela WHERE id <= 1000";                    //
        $inicioSelMysql = teste();                                              //
        try {                                                                   //
            $select = $con->prepare($sqlMySQL);                                 //
            if ($select->execute()) {                                           //
                $fimSelMysql = teste();                                         //
            } else {                                                            //
                echo 'não cadastrado';                                          //
            }                                                                   //
        } catch (Exception $ex) {                                               //
                                                                                //
        }                                                                       //
        $tempSelMysql = number_format(($fimSelMysql - $inicioSelMysql), 8);     //
        $mediaSelMysql = $tempSelMysql / 10;                                    //
        $tamanhoselMysql = $tempSelMysql * 1000;                                 //
        echo '<br/>';                                                           //
        echo'O select é :' . $tempSelMysql . '<br/>';                           //
        echo $mediaSelMysql;                                                    //
        echo'</div>'; 															//
		//////////////////////////////////////////////////////////////////////////
        echo '<div style="width:300px; float:left; border:1px solid #ccc; '     
        . 'padding:5px;"> <h2> Teste PostgreSQL</h2>';                           
        
        
        /*******************************************************************************************####***********************************************************************
          fim do teste com MySQL e início do teste com Postgre
         *******************************************************************************************####********************************************************************** */

        $conex = "host = 'localhost' port = '5432' dbname = 'testeBanco' user = 'postgres' password = '180997'";
        $con_poslt = pg_connect($conex)or die("Erro de Conexão" . pg_last_error());
        $startPolst = 0;
        $somaPolst = 0;
        $numPolst = 0;
        while ($startPolst < 10) {
            $inicioPolst = teste();
            $paraPolst = 0;
            while ($paraPolst < 100) {
                $sql = "INSERT INTO tabela(nome,numero) VALUES ('Ronaldo Sabino', '123456789012')";
                $resultado = pg_query($con_poslt, $sql)or die("Erro ao inserir dados " . pg_last_error());
                $paraPolst++;
            }

            //echo 'INSERT => Tempo Gasto: ', $time, ' secs. Memória Utilizada: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb <br/><br/>';
            $fimPolst = teste();
            $tempoPolst = number_format(($fimPolst - $inicioPolst), 4);
            $startPolst++;
            $somaPolst += $tempoPolst;
            echo $numPolst . "º Tempo para inserção " . $paraPolst . " é de: <strong>" . $tempoPolst . "</strong> <br/>";
            $numPolst++;
        }

        $fim1Polst = teste();
        $tempo1Polst = number_format(($fim1Polst - $inicioPolst), 4);
        echo "Tempo Total para Inserção é de: <strong>" . $somaPolst . "</strong> <br/>";
        $mediaPolst = $somaPolst / $startPolst;
        echo'<strong> A Média do Postgre é de: </strong>' . $mediaPolst.'<br/>';
        $tamanhoPolst = $mediaPolst * 100;
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $inicioSelPost = teste();
        $sqlSelPost = "SELECT * FROM tabela WHERE id <= 1000";
        $resulSelPost = pg_query($con_poslt, $sqlSelPost)or die("Erro ao Selecionar dados " . pg_last_error());
        if($resulSelPost){
            $fimSelPost = teste();
        }
        $tempoSelPost = number_format(($fimSelPost - $inicioSelPost), 4);
		$mediaSelPost = number_format($tempoSelPost/10);
		$tamanhoSelPost = $tempoSelPost * 1000;
        echo 'Tempo do Select no Postgre é de: '.$tempoSelPost.'<br/>';
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $inicioDelPost = teste();
        $sqlDelete = "Delete From tabela";
        $resulDel = pg_query($con_poslt, $sqlDelete)or die("Erro ao Deletar dados " . pg_last_error());
        if($resulDel){
            $fimDelPost = teste();
        }
        
        $tempDelPost = $fimDelPost - $inicioDelPost;
        echo 'Tempo delete ->'.$tempDelPost;
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        //Por fim zeramos a tabela e reiniciamos o id
        $limpar = "ALTER SEQUENCE tabela_id_seq RESTART WITH 1";
        $resulLimpar = pg_query($con_poslt, $limpar)or die("Erro ao inserir dados " . pg_last_error());
        ?>
    </div>
    <div style="width:914px; margin: auto; padding:10px; border:1px solid #ccc;float: left;">
        <p><strong> * O parametro utilizado para a comparação foi de 1(um) segundo para inserção de 100 linhas.</strong></p>
        <div style="padding:10px 10px 0 10px;position: relative">
            <span> Firbird <?php echo $tamanho; ?>% </span>   <div style="width:<?php echo $tamanho; ?>%; height:20px; background:red; margin-right:10px;margin-bottom:10px;" >
            </div>
            <span> MySQL <?php echo $tamanhoMySQL; ?>% </span> <div style="width:<?php echo $tamanhoMySQL; ?>%; height:20px; background:green; margin-right:10px;margin-bottom:10px;" >
            </div>
            <span> PostgreSQL <?php echo $tamanhoPolst; ?>% </span> <div style="width:<?php echo $tamanhoPolst; ?>%; height:20px; background:blue; margin-right:10px;margin-botton:10px;" >
            </div>
        </div>
    </div>
    <div style="width:914px; margin: auto; padding:10px; border:1px solid #ccc;float: left;">
        <p><strong> * O parametro utilizado para a comparação foi de 1(um) segundo para inserção de 100 linhas.</strong></p>
        <div style="padding:10px 10px 0 10px;position: relative">
            <span> Firbird <?php echo $tamanhoselFir; ?>% </span>   <div style="width:<?php echo $tamanhoselFir; ?>%; height:20px; background:red; margin-right:10px;margin-bottom:10px;" >
            </div>
            <span> MySQL <?php echo $tamanhoselMysql; ?>% </span> <div style="width:<?php echo $tamanhoselMysql; ?>%; height:20px; background:green; margin-right:10px;margin-bottom:10px;" >
            </div>
            <span> PostgreSQL <?php echo $tempoSelPost; ?>% </span> <div style="width:<?php echo $tamanhoSelPost; ?>%; height:20px; background:blue; margin-right:10px;margin-botton:10px;" >
            </div>
        </div>
    </div>
</div>


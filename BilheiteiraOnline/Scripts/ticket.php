<?php
// conecta ao banco de dados
$serverName = "127.0.0.1"; 
$userName = "root"; 
$ServerPassword =""; 
$databaseName = "bilheteira";

// conecta ao banco de dados
$connection = mysqli_connect($serverName, $userName, $ServerPassword, $databaseName);

// cria a instrução SQL que vai selecionar os dados
$sql_query = sprintf ("SELECT email, nbilhetes, evento FROM ticket");

// executa a query
$result = mysqli_query($connection,$sql_query) or die(mysqli_error($connection));

// transforma os dados em um array
$linha = mysqli_fetch_assoc($result);

// calcula quantos dados retornaram
$total = mysqli_num_rows($result);

	            // se o número de resultados for maior que zero, mostra os dados
	            if($total > 0) {
		            // inicia o loop que vai mostrar todos os dados
		            do {
            ?>
			            <p>Email: <?=$linha['email']?> / Numero Bilhetes: <?=$linha['nbilhetes']?>  / Evento: <?=$linha['evento']?></p>
            <?php
		            // finaliza o loop que vai mostrar os dados
		            }while($linha = mysqli_fetch_assoc($result));
	                // fim do if
	            }
            
// tira o resultado da busca da memória
mysqli_free_result($result);
?>
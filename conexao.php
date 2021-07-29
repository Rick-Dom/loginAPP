<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "bdlogin";

/* a conexao de fato com o banco de dados
toda vez que formos fazer uma conexao com o banco usaremos essa variavel
ela contem toda a configuração de conexão com o BD
essa função precisa inicialmente de 4 parametros, que são exatemente as quatro que criamos  */
$dbcon = new MySQLi("$host", "$usuario", "$senha", "$banco");

//teste para ver se esta funcionando
if ($dbcon->connect_error){
    echo "conexao_erro";
}/* else{
    echo "conexao_ok";
} */
 



?>
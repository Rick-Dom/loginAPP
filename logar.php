<?php
/* arquivo responsavel por pegar uma solicitação de login,
chamar o arquivo de conexão do bando de dados
e verificar de os dados passados por esse usuario 
estao presentes no bando de dados, e se estiverrem corretos,
ele pode passar para a proxima etapa */

//primiero passo é incluir a conexão

include_once 'conexao.php';

//dois paramentros para fazer a etepa de login

$email = $_POST['email'];
$senha = $_POST['senha'];

//executar uma pesquisa no bando de dados com esses parametros
//para verificar se esse paramentros realmente existem no bd
//query é responsavel por fazer consultas
$sql = $dbcon->query("SELECT * FROM tbllogin WHERE email='$email' 
AND senha='$senha' " );

//agora podemos verificar quantos registros foram encontados
//usamos esse metodo para ver se exitem linhas com as informações pedidas,
//e se caso existem linhas maior que 0, significa que existe pelo um valor que bate

if (mysqli_num_rows($sql)>0){
    echo "login_ok";
}else{
    echo "login_erro";
}

?>
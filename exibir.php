<?php
//incluimos o carquivo da conexao ja criado
include_once 'conexao.php';

//criando a consulta que queremos fazer no mysql o * significa tudo que tem na tabela/coluna
$consulta = "SELECT * FROM tbllogin LIMIT 1";
//PODEMOS definir tbm quantas linhas ele vai pegar com o comando limit
//E podemos esolher o que quiser torcando o *, que indica tudo, peo nome do campo definido no mySQL
//essa consulta seleciona todas as informçoes da tabela tbllogib
//isso aqui verifica se esta dando certo, e se caso nao, ele mostra onde deu errado
$con = $dbcon->query($consulta) or die($dbcon->error);

?>




<html>
<head>
    <title>Exibir dados</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>E-mail</td>
        </tr>
        <?php while($dado = $con->fetch_array()){   
            //essa função pega cada uma dessas colunas e armazena em uma variavel, que nesse caso é a $dado, 
            //que sera exibida
        ?>
        <tr>
            <td><?php echo $dado["id"];  ?></td>
            <td><?php echo $dado["nome"];  ?></td>
            <td><?php echo $dado["email"];  ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
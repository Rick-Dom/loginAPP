<?php
    include_once 'conexao.php';

    $email = $_POST['email']; 
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];

    /* echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Senha: $senha <br>"; */

    //verificar se já existe o email já cadastrado

    //executar uma pesquisa no bd 
    $sql2 = $dbcon->query("SELECT * FROM tbllogin WHERE email='$email'" );

    if(mysqli_num_rows($sql2)>0){
        echo "Já foi cadastrado";
    }else{
        //inserir essas no banco ==> INSERT
        $sql3 = $dbcon->query("INSERT INTO tbllogin(nome,email,senha) VALUES ('$nome','$email','$senha')");

        if($sql3){
            echo "registro_ok";
        }else{
            echo "registro_erro";
        }
    }

?>
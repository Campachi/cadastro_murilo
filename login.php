<?php

    include('includes/conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * from cliente 
                          where email = '$email'" ;

    $resullt = mysqli_query($con,$sql);
    if(mysqli_num_rows($resullt)>0){
        $row = mysqli_fetch_array($resullt);
        if($row ['senha'] == $senha){

            include('inicia_sessao.php');

            $_SESSION['login'] = $row;
            header('Location: index.php');
        }
        else{
            echo '<h1> senha invalida seu mamaco:
             sua senha é '.$row['senha'].'</h1>';
        }
    }

    else {
    echo "<h1>usuariio nao encontrado</h1>";
    }
?>
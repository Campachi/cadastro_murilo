<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        
        include('inicia_sessao.php');
        if(empty($_SESSION['login'])){
             header ("Location: login.html");
        }

        include('menu.php');
    ?>
    
</head>
<body>
   
</body>
</html>
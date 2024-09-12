<div>
        <ul>
            <li><a href="index.php">Home</a></li>
        <?php
                if(!empty($_SESSION['login'])):
        ?>
            <li><a href="CadastroCidade.php">Cadastrar Cidade</a></li>
            <li><a href="ListarCidade.php">Listar Cidade</a></li>
            <li><a href="CadastroCliente.php">Cadastrar Cliente</a></li>
            <li><a href="ListarCliente.php">Listar Cliente</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php
                echo "<li><a> ola ".$_SESSION['login']['nome']. "</a></li>";
                endif;
        ?>


        </ul>
    </div>
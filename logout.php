<?php

        include ('include/inicia_sessao.php');

        session_unset();

        session_destroy();

        header('location: index.php');




?>
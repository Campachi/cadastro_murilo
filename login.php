<?php
    // Inclui o arquivo de conexão
    include('includes/conexao.php');

    // Inicia a sessão
    session_start();

    // Obtém os valores enviados pelo POST
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Cria a consulta SQL utilizando prepared statements para maior segurança
    $sql = "SELECT * FROM cliente WHERE email = ?";
    $stmt = mysqli_prepare($con, $sql);

    // Verifica se a preparação da query foi bem-sucedida
    if ($stmt) {
        // Bind dos parâmetros e execução da query
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Verifica se algum resultado foi encontrado
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verifica a senha
            if ($row['senha'] === $senha) { // Use === para uma comparação mais segura
                // Armazena as informações do usuário na sessão e redireciona
                $_SESSION['login'] = $row;
                header('Location: CadastroCidade.php');
                exit();
            } else {
                // Mensagem de senha inválida
                echo '<h1>Senha inválida. Sua senha é ' . htmlspecialchars($row['senha']) . '</h1>';
            }
        } else {
            // Mensagem de usuário não encontrado
            echo '<h1>Usuário não encontrado</h1>';
        }

        // Fecha a declaração
        mysqli_stmt_close($stmt);
    } else {
        echo '<h1>Erro na preparação da consulta.</h1>';
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($con);
?>

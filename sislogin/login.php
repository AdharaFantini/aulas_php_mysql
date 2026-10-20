<?php
session_start();
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="form-box">

        <h1>Bem-vindo!</h1>
        <p class="subtitulo">Entre na sua conta</p>

        <form action="#" method="POST">

            <div class="campo">
                <label for="usuario">Usuário (e-mail)</label>
                <input
                    type="email"
                    id="usuario"
                    name="usuario"
                    placeholder="Digite seu e-mail"
                    autocomplete="username"
                    required>
            </div>

            <div class="campo">
                <label for="senha">Senha</label>
                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha"
                    autocomplete="current-password"
                    required>
            </div>

            <div class="esqueceu">
                <a href="esqueceu-senha.php">
                    Esqueceu a senha?
                </a>
            </div>

            <button type="submit" class="btn">
                Entrar
            </button>

        </form>

        <p class="rodape">
            Não possui uma conta?
            <a href="cadastro.php">Cadastre-se</a>
        </p>

    </div>
</div>

</body>
</html>


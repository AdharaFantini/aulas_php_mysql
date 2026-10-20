
<?php
session_start();
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="form-box">

        <h1>Recuperar senha</h1>

        <p class="subtitulo">
            Informe seus dados para iniciar
            a recuperação da sua conta.
        </p>

        <form action="#" method="POST">

            <div class="campo">
                <label for="cpf">CPF cadastrado</label>
                <input type="text"
                       id="cpf"
                       name="cpf"
                       placeholder="000.000.000-00"
                       maxlength="14"
                       inputmode="numeric"
                       required>
            </div>

            <div class="campo">
                <label for="email">E-mail cadastrado</label>
                <input type="email"
                       id="email"
                       name="email"
                       placeholder="Digite seu e-mail"
                       required>
            </div>

            <div class="campo">
                <label for="nascimento">
                    Data de nascimento
                </label>
                <input type="date"
                       id="nascimento"
                       name="nascimento"
                       required>
            </div>

            <button type="submit" class="btn">
                Verificar dados
            </button>

        </form>

        <p class="rodape">
            Lembrou sua senha?
            <a href="login.php">Voltar ao login</a>
        </p>

    </div>
</div>

</body>
</html>


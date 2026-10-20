
<?php
session_start();
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="form-box">

        <h1>Criar conta</h1>
        <p class="subtitulo">
            Preencha seus dados para se cadastrar
        </p>

        <form action="salvar_cadastro.php" method="POST">

            <div class="campo">
                <label for="nome">Nome completo</label>
                <input type="text"
                       id="nome"
                       name="nome"
                       placeholder="Digite seu nome completo"
                       autocomplete="name"
                       required>
            </div>

            <div class="campo">
                <label for="cpf">CPF</label>
                <input type="text"
                       id="cpf"
                       name="cpf"
                       placeholder="000.000.000-00"
                       maxlength="14"
                       inputmode="numeric"
                       required>
            </div>

            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email"
                       id="email"
                       name="email"
                       placeholder="Digite seu e-mail"
                       autocomplete="email"
                       required>
            </div>

            <div class="campo">
                <label for="nascimento">
                    Data de nascimento
                </label>
                <input type="date"
                       id="nascimento"
                       name="nascimento"
                       autocomplete="bday"
                       required>
            </div>

            <div class="campo">
                <label for="senha">Senha</label>
                <input type="password"
                       id="senha"
                       name="senha"
                       placeholder="Crie uma senha"
                       autocomplete="new-password"
                       minlength="8"
                       required>
            </div>

            <div class="campo">
                <label for="confirmar_senha">
                    Confirmar senha
                </label>
                <input type="password"
                       id="confirmar_senha"
                       name="confirmar_senha"
                       placeholder="Digite a senha novamente"
                       autocomplete="new-password"
                       minlength="8"
                       required>
            </div>

            <button type="submit" class="btn">
                Cadastrar
            </button>

        </form>

        <p class="rodape">
            Já possui uma conta?
            <a href="login.php">Entrar</a>
        </p>

    </div>
</div>

</body>
</html>

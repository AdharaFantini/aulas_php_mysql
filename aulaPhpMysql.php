<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-wid">
    <link rel="stylesheet" href="cadastro_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cadastro do aluno</title>

</head>
<body>
<div class="wrapper">
    <form action="aulaPhpMysql.php">
        <h1 class="login_title">Login</h1>

        <label for="idAluno">Registro do aluno</label>
        <input type="idAluno" id="idAluno" placeholder="id do aluno" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="E-mail" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="E-mail" required>

        <label for="Celular">Celular</label>
        <input type="email" id="email" placeholder="Número" required>

        <nav class="container__menu">
            <button type="submit">Entrar</button>
            </ul>
        </nav>
</div>
</body>


<!--id_CadastroAlunos int primary key auto_increment,-->
<!--regAluno int not null,-->
<!--nome varchar(50) not null,-->
<!--email varchar(50) not null,-->
<!--celular varchar(20)-->




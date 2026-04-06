<?php

@$regAluno = $_REQUEST['regAluno'];
@$nome = $_REQUEST['nome'];
@$email = $_REQUEST['email'];
@$celular = $_REQUEST['celular'];

insert into cadastroalunos(regAluno, nome, email, celular);
values ($regAluno, $nome, $email, $celular);
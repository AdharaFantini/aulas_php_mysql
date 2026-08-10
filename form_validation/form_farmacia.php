<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Validação de formulários</title>
</head>

<body>

<?php
// Variáveis para mensagem de erro e dados do formulário
$nome = $email = $telefone = $cep = $cpf = $numero = $complemento = "";
$nomeError = $emailError = $telefoneError = $cepError = $cpfError = $numeroError = $complementoError = "";

// Condicional para avaliar se os campos estão preenchidos.
// Se não tiverem, imprime na tela uma mensagem de erro.
// Se tiver preenchido, continua a verificação.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nome"])) {
        $nomeError = "Informação obrigatória.";
        //se não estiver vazio, verifica outos detalhes
    }else{
        $nome = verificar_entrada($_POST["nome"]);
    }
    if (empty($_POST["email"])) {
        $emailError = "Informação obrigatória.";
    }else{
        $email = verificar_entrada($_POST["email"]);
    }
    if (empty($_POST["telefone"])){
        $telefoneError = "Informação obrigatória.";
    }else{
        $telefone = verificar_entrada($_POST["telefone"]);
    }
    if (empty($_POST["cep"])){
        $cepError = "Informação obrigatória.";
    }else{
        $cep = verificar_entrada($_POST["cep"]);
    }
    if (empty($_POST["cpf"])){
        $cpfError = "Informação obrigatória.";
    }else{
        $cpf = verificar_entrada($_POST["cpf"]);
    }
    if (empty($_POST["numero"])){
        $numeroError = "Informação obrigatória.";
    }else{
        $numero = verificar_entrada($_POST["numero"]);
    }
    if (empty($_POST["complemento"])){
        $complementoError = "Informação obrigatória.";
    }else{
        $complemento = verificar_entrada($_POST["complemento"]);
    }
}

// Retira espaços em branco, contra barras e caracteres especiais
function verificar_entrada($entrada)
{
    $entrada = trim($entrada);
    $entrada = stripslashes($entrada);
    $entrada = htmlspecialchars($entrada);
    $entrada = strtoupper($entrada);
    return $entrada;
}
?>

<h3>Formulário a ser verificado</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <!--    ($_SERVER["PHP_SELF"])Super global que retorna o nome do arquivo do script que está sendo executado no momento. Envia o formulário submetido para a mesma página ao invés de pular para uma página diferente.-->
    <!--    O htmlspecialchars()função converte caracteres especiais em entidades HTML. Isso significa que ele irá substituir caracteres HTML como < e > com &lt;e &gt;. Isso impede que os invasores explorem o código injetando código HTML ou Javascript (Ataques de script cruzados) em formulários.-->
    <br>
    Nome: <input type="text" name="nome">
    <span style = "color: red">* <?php echo $nomeError;?></span><br>
    E-mail: <input type="text" name="email">
    <span style = "color: red">* <?php echo $emailError;?></span><br>
    Telefone: <input type="text" name="telefone">
    <span style = "color: red">* <?php echo $telefoneError;?></span><br>
    CEP: <input type="text" name="cep">
    <span style = "color: red">* <?php echo $cepError;?></span><br>
    CPF: <input type="text" name="cpf">
    <span style = "color: red">* <?php echo $cpfError;?></span><br>
    Número: <input type="text" name="numero">
    <span style = "color: red">* <?php echo $numeroError;?></span><br>
    Complemento: <input type="text" name="complemento">
    <span style = "color: red">* <?php echo $complementoError;?></span><br>

    <input type="submit" name="submit" value="Enviar">
</form>
<br><br>
<?php
echo "Dados digitados: <br>";
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $cep . "<br>";
echo $cpf . "<br>";
echo $numero . "<br>";
echo $complemento . "<br>";

?>
</body>

</html>


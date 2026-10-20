
<?php
session_start();
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: cadastro.php");
    exit;
}

$nome = trim($_POST["nome"] ?? "");
$cpf = preg_replace('/\D/', '', $_POST["cpf"] ?? "");
$email = trim($_POST["email"] ?? "");
$nascimento = $_POST["nascimento"] ?? "";
$senha = $_POST["senha"] ?? "";
$confirmar_senha = $_POST["confirmar_senha"] ?? "";

// Verificar campos obrigatórios
if (
    $nome === "" ||
    $cpf === "" ||
    $email === "" ||
    $nascimento === "" ||
    $senha === "" ||
    $confirmar_senha === ""
) {
    die("Preencha todos os campos!");
}

// Validar CPF (formato)
if (strlen($cpf) !== 11) {
    die("CPF deve conter 11 números!");
}

// Validar e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("E-mail inválido!");
}

// Validar data
$data = DateTimeImmutable::createFromFormat(
    "!Y-m-d",
    $nascimento
);

if (!$data || $data->format("Y-m-d") !== $nascimento ||
    $data > new DateTimeImmutable("today")) {
    die("Data de nascimento inválida!");
}

// Conferir as senhas
if ($senha !== $confirmar_senha) {
    die("As senhas não coincidem!");
}

if (strlen($senha) < 8) {
    die("A senha deve ter pelo menos 8 caracteres!");
}

// Verificar se CPF ou e-mail já existe
$sql = "SELECT id_usuario FROM usuario
        WHERE cpf = :cpf OR email = :email";

$stmt = $conexao->prepare($sql);

$stmt->execute([
    ":cpf" => $cpf,
    ":email" => $email
]);

if ($stmt->fetch()) {
    die("CPF ou e-mail já cadastrado!");
}

// Criptografar a senha com hash seguro
$senhaSegura = password_hash(
    $senha,
    PASSWORD_DEFAULT
);

// Salvar usuário
$sql = "INSERT INTO usuario
        (nome, cpf, email, dataNascimento, senha)
        VALUES
        (:nome, :cpf, :email, :nascimento, :senha)";

$stmt = $conexao->prepare($sql);

try {
    $stmt->execute([
        ":nome" => $nome,
        ":cpf" => $cpf,
        ":email" => $email,
        ":nascimento" => $nascimento,
        ":senha" => $senhaSegura
    ]);

    echo "Cadastro realizado com sucesso!";
    echo '<br><a href="login.php">Ir para login</a>';

} catch (PDOException $erro) {
    error_log($erro->getMessage());
    echo "Não foi possível concluir o cadastro.";
}
?>

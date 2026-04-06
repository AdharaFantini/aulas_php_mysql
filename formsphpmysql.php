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
    <form action="formsphpmysql.php">
        <h1 class="login_title">*Login*</h1>

        <label for="idstudent">Id Aluno</label>
        <input type="regAluno" id="regAluno" placeholder="Id do aluno" required><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M560-440h200v-80H560v80Zm0-120h200v-80H560v80ZM200-320h320v-22q0-45-44-71.5T360-440q-72 0-116 26.5T200-342v22Zm216.5-183.5Q440-527 440-560t-23.5-56.5Q393-640 360-640t-56.5 23.5Q280-593 280-560t23.5 56.5Q327-480 360-480t56.5-23.5ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z"/></svg>
        <br><br>

        <label for="name">Nome</label>
        <input type="text" id="nome" placeholder="Nome do aluno" required><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-240Zm-320 80v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q37 0 73 4.5t72 14.5l-67 68q-20-3-39-5t-39-2q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32h240v80H160Zm400 40v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-340L683-120H560Zm300-263-37-37 37 37ZM620-180h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19ZM367-527q-47-47-47-113t47-113q47-47 113-47t113 47q47 47 47 113t-47 113q-47 47-113 47t-113-47Zm169.5-56.5Q560-607 560-640t-23.5-56.5Q513-720 480-720t-56.5 23.5Q400-673 400-640t23.5 56.5Q447-560 480-560t56.5-23.5ZM480-640Z"/></svg>
        <br><br>

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Email" required><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-480Zm0-40 320-200H160l320 200ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v280h-80v-200L480-440 160-640v400h360v80H160ZM715-42l-70-40 46-78h-91v-80h91l-46-78 70-40 45 78 45-78 70 40-46 78h91v80h-91l46 78-70 40-45-78-45 78Z"/></svg>
        <br><br>

        <label for="tel">Celular</label>
        <input type="tel" id="celular" placeholder="Número " required><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="23px" fill="#1f1f1f"><path d="M524-80q-7 0-14-1.5T496-85l-243-90q-24-9-38-29.5T201-249q0-5 5-28l101-283h-59l106-159q5-6 3.5-13t-6.5-12l-14-14-203 176q-17 14-25.5 33.5T100-507v247H40v-247q0-35 14.5-66.5T95-628l245-212 49 49 13-36q9-24 29.5-38.5T477-880q8 0 14.5 1t14.5 4l243 90q24 9 38 30t14 45q0 6-5 27l-23 64q29 5 48 27t19 52q0 5-.5 10t-2.5 10h3q33 0 56.5 23.5T920-440q0 24-12.5 43T875-368q2 7 3.5 13.5T880-340q0 33-23.5 56.5T800-260h-3q2 5 2.5 10t.5 10q0 33-23.5 56.5T720-160H609l-9 27q-8 25-29.5 39T524-80Zm26-153 144-403-243-90-144 403 243 90Zm80 13h90q8 0 14-6t6-14q0-8-6-14t-14-6h-75l-15 40Zm36-100h134q8 0 14-6t6-14q0-8-6-14t-14-6H681l-15 40Zm36-100h138q8 0 14-6t6-14q0-8-6-14t-14-6H716l-14 40Zm36-100h22q8 0 14-6t6-14q0-8-6-14t-14-6h-8l-14 40Z"/></svg><br><br>

        <nav class="container__menu">
            <button type="submit">Entrar<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#75FBFD"><path d="M565.5-348.5Q603-377 620-422H340q17 45 54.5 73.5T480-320q48 0 85.5-28.5Zm-143-149Q440-515 440-540t-17.5-42.5Q405-600 380-600t-42.5 17.5Q320-565 320-540t17.5 42.5Q355-480 380-480t42.5-17.5Zm200 0Q640-515 640-540t-17.5-42.5Q605-600 580-600t-42.5 17.5Q520-565 520-540t17.5 42.5Q555-480 580-480t42.5-17.5ZM305-704l112-145q12-16 28.5-23.5T480-880q18 0 34.5 7.5T543-849l112 145 170 57q26 8 41 29.5t15 47.5q0 12-3.5 24T866-523L756-367l4 164q1 35-23 59t-56 24q-2 0-22-3l-179-50-179 50q-5 2-11 2.5t-11 .5q-32 0-56-24t-23-59l4-165L95-523q-8-11-11.5-23T80-570q0-25 14.5-46.5T135-647l170-57Zm49 69-194 64 124 179-4 191 200-55 200 56-4-192 124-177-194-66-126-165-126 165Zm126 135Z"/></svg></button>
            </ul>
        </nav>
</div>

</body>

<?php
$user = "root";
$password = " ";
$database = "nome";
$host = "localhost";

$connect = new mysqli($host, $user, $password, $database);
if($connect->connect_error){
    die("falha na coneção: " . $connect->connect_error);
} else{
    echo "Conexão concluída, parabéns!";
}
$name = $_REQUEST["nome do campo"]
//<form>
//<imput name = ""
//?>
<!--<p>Parabéns --><?php //$nome?>


<!--id_CadastroAlunos int primary key auto_increment,-->
<!--regAluno int not null,-->
<!--nome varchar(50) not null,-->
<!--email varchar(50) not null,-->
<!--celular varchar(20)-->




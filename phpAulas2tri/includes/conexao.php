<?php
    $conn = mysqli_connect("localhost", "root", "", "triton");

    if($conn -> connect_error){
        die("Falha na conexão:" . $conn->connect_error);
    } else {
        echo "Tudo certo";
    }
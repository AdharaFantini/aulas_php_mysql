<?php

$titulo = "Remédios da Vovó";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/7d8d5e4c2f.js" crossorigin="anonymous"></script>

</head>

<body>

<header>

    <div class="logo">

        <img src="logo_RemediosVovo" alt="Logo">

        <div>

            <h1><?php echo $titulo; ?></h1>

            <p>Cuidado que acolhe.</p>

        </div>

    </div>

    <nav>

        <ul>

            <li><a href="#">Início</a></li>

            <li><a href="#produtos">Produtos</a></li>

            <li><a href="#sobre">Sobre</a></li>

            <li><a href="#contato">Contato</a></li>

        </ul>

    </nav>

    <a href="#" class="btn">Comprar Agora</a>

</header>

<section class="banner">

    <div class="texto">

        <h2>Cuidado de verdade para toda a família</h2>

        <p>

            Medicamentos, alimentos, higiene, saúde e beleza e produtos infantis com o carinho de uma vovó.

        </p>

        <a href="#" class="btn">Comprar Agora</a>

    </div>

    <div class="imagem">

        <img src="banner.png" alt="Banner">

    </div>

</section>

<section id="produtos">

    <h2>Nossos Produtos</h2>

    <div class="cards">

        <?php

        $produtos = [

                ["Alimentos","fa-basket-shopping","Vitaminas, suplementos e alimentos."],

                ["Higiene","fa-pump-soap","Produtos para higiene diária."],

                ["Medicamentos","fa-capsules","Medicamentos para toda família."],

                ["Saúde e Beleza","fa-heart-pulse","Cosméticos e cuidados pessoais."],

                ["Infantil","fa-baby","Fraldas, mamadeiras e muito mais."]

        ];

        foreach($produtos as $produto){

            ?>

            <div class="card">

                <i class="fa-solid <?php echo $produto[1]; ?>"></i>

                <h3><?php echo $produto[0]; ?></h3>

                <p><?php echo $produto[2]; ?></p>

                <button>Ver Produtos</button>

            </div>

        <?php } ?>

    </div>

</section>

<section id="sobre">

    <div class="sobre-texto">

        <h2>Sobre a Empresa</h2>

        <p>

            A <strong>Remédios da Vovó</strong> nasceu para oferecer atendimento acolhedor, produtos de qualidade e preços justos.

            Nossa missão é cuidar da saúde da sua família com carinho, tradição e confiança.

        </p>

    </div>

    <div class="sobre-img">

        <img src="vovo.png" alt="Vovó">

    </div>

</section>

<footer id="contato">

    <h2><?php echo $titulo; ?></h2>

    <p>Rua das Flores, 123</p>

    <p>Belo Horizonte - MG</p>

    <p>(31) 99999-9999</p>

    <p>contato@remediosdavovo.com.br</p>

    <p>&copy; <?php echo date("Y"); ?> Todos os direitos reservados.</p>

</footer>

<script src="script.js"></script>

</body>
</html>

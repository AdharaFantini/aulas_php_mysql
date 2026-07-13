<?php

$categorias = [
    "todos" => "Todos",
    "diabetes" => "Diabetes",
    "tireoide" => "Tireoide",
    "obesidade" => "Obesidade",
    "hipofise" => "Hipófise",
    "adrenal" => "Adrenal"
];

$produtos = [

    [
        "id"=>1,
        "categoria"=>"diabetes",
        "nome"=>"Curso Diabetes Tipo 2",
        "descricao"=>"Atualização em diagnóstico e tratamento.",
        "imagem"=>"images/diabetes.jpg"
    ],

    [
        "id"=>2,
        "categoria"=>"tireoide",
        "nome"=>"Curso Tireoide",
        "descricao"=>"Nódulos, hipotireoidismo e hipertireoidismo.",
        "imagem"=>"images/tireoide.jpg"
    ],

    [
        "id"=>3,
        "categoria"=>"obesidade",
        "nome"=>"Obesidade Clínica",
        "descricao"=>"Abordagem multidisciplinar.",
        "imagem"=>"images/obesidade.jpg"
    ],

    [
        "id"=>4,
        "categoria"=>"hipofise",
        "nome"=>"Hipófise",
        "descricao"=>"Doenças hipofisárias.",
        "imagem"=>"images/hipofise.jpg"
    ],

    [
        "id"=>5,
        "categoria"=>"adrenal",
        "nome"=>"Adrenal",
        "descricao"=>"Insuficiência adrenal e tumores.",
        "imagem"=>"images/adrenal.jpg"
    ],

    [
        "id"=>6,
        "categoria"=>"diabetes",
        "nome"=>"Insulinoterapia",
        "descricao"=>"Uso moderno de insulinas.",
        "imagem"=>"images/insulina.jpg"
    ]

];

?>


<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Portal Médico</title>

    <link rel="stylesheet" href="assets/styles/styleProd.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<header>

    <div class="logo">
        <i class="fa-solid fa-heart-pulse"></i>
        Portal Médico
    </div>

    <div class="busca">

        <input
            type="text"
            id="pesquisa"
            placeholder="Pesquisar cursos...">

        <i class="fa fa-search"></i>

    </div>

</header>

<main>

    <aside>

        <h3>Categorias</h3>

        <ul>

            <?php foreach($categorias as $id=>$nome): ?>

                <li>

                    <button
                        class="categoria <?php echo $id=="todos"?"ativo":"";?>"
                        data-categoria="<?=$id;?>">

                        <?=$nome;?>

                    </button>

                </li>

            <?php endforeach; ?>

        </ul>

    </aside>

    <section class="conteudo">

        <div class="topo">

            <h2>Cursos Disponíveis</h2>

            <span id="contador">
<?=count($produtos);?>
 cursos
</span>

        </div>

        <div class="gridProdutos">

            <?php foreach($produtos as $produto): ?>

                <div
                    class="produto"
                    data-categoria="<?=$produto["categoria"];?>">

                    <div class="imagem">

                        <img
                            src="<?=$produto["imagem"];?>"
                            alt="<?=$produto["nome"];?>">

                    </div>

                    <div class="info">

                        <h3><?=$produto["nome"];?></h3>

                        <p><?=$produto["descricao"];?></p>

                        <div class="acoes">

                            <a
                                href="produto.php?id=<?=$produto["id"];?>"
                                class="botao">

                                Saiba mais

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </section>

</main>

<footer>

    <div>

        © <?=date("Y");?> Portal Médico

    </div>

</footer>

<script src="assets/scripts/prod.js"></script>

</body>

</html>
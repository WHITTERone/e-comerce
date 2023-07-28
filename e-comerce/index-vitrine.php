<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./vitrine/style.css">
    <link rel="shortcut icon" href="./vitrine/img/logo.png" type="image/x-icon">
    <title>SoundBox</title>
</head>

<body>

    <header>
        <a href="#" class="logo"><i class='bx bx-headphone'></i>Soundbox</a>

        <ul class="nav-list">
            <li class="content"><a href="#">Home</a></li>
            <li class="content2"><a href="index-contato.php">Contato</a></li>
            <li class="content3"><a href="#">Buscar</a></li>
            <li class="content4"><a href="./index-sobre-nos.php">Sobre Nos</a></li>
        </ul><!--navegação-->

        <div class="header-icons">
            <a href="./carrinho.php"><i class='bx bx-cart'></i></a>
            <a href="./sing-in.php">Login</a>
        <?php
            // Verifique a condição da sessão usando if e else
            if (isset($_SESSION['email']) and isset($_SESSION['senha']) && $_SESSION['email'] === true && $_SESSION['senha'] === true) {
            // Se a sessão estiver criada, não aplique a classe 'link-oculto'
            echo '<a href="#">sair</a>';
            } else {
            // Caso contrário, aplique a classe 'link-oculto' para ocultar o link
            echo '<a href="#" class="link-oculto">sair</a>';
}
        ?>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div><!--header-icons-->
    </header>

    <section class="home">
        <div class="home-img">
            <img src="./vitrine/img/redragon-preto.png" class="one">
        </div><!--home-img-->

        <div class="home-text">

            <h1 id="nomeProduct">Redragon HYLAS H260 RGB Gaming Cor Preto</h1>
            <h5 id="descDoProdct">The smarter way to listen</h5>
            <h3 id="PreçoDoProduct">R$ 121,20</h3>
            <a href="#" class="btn">Comprar</a>
            <a class="addCarrinho" href="#" onclick="adicionarAoCarrinho()">Adicionar ao carrinho</a>


        </div><!--home-text-->
    </section><!--home-->


    <div class="main">
        <div class="row">
            <li><img src="./vitrine/img/redragon-preto.png" onclick="slider('./vitrine/img/redragon-preto.png')"></li>
        </div><!--row-->

        <div class="row2">
            <li><img src="./vitrine/img/redragon-branco.png" onclick="slider2('./vitrine/img/redragon-branco.png')"></li>
        </div><!--row2-->

        <div class="row3">
            <li><img src="./vitrine/img/fone-rgb.png" onclick="slider3('./vitrine/img/fone-rgb.png')"></li>
        </div><!--row3-->

        <div class="row4">
            <li><img src="./vitrine/img2/air-pods.png" onclick="slider4('./vitrine/img2/air-pods.png')"></li>
        </div><!--row-->

        <div class="row5">
            <li><img src="./vitrine/img2/fone-comFio.png" onclick="slider5('./vitrine/img2/fone-comFio.png')"></li>
        </div><!--row2-->

        <div class="row6">
            <li><img src="./vitrine/img2/fone-sony.png" onclick="slider6('./vitrine/img2/fone-sony.png')"></li>
        </div><!--row3-->

        <div class="mais-opcoes">
            <li><img src="./vitrine/img2/SETA.png" alt="" onclick="mais()"></li>
        </div>

        <div class="menos-opcoes">
            <li><img src="./vitrine/img2/chevron-up-regular-60.png" alt="" onclick="menos()"></li>
        </div>

    </div><!--main-->

    <script src="./vitrine/script.js"></script>

</body>

</html>
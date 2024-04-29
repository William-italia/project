<?php 
include_once 'data/products.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="bar">
                <ul class="menu-primary">
                    <div class="menu">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div class="logo">
                        LOGO
                    </div>
                    <div class="source">
                        <input type="text">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </ul>
                <ul class="menu-btns">
                    <li><a href="#">Minha Conta</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="products">
        <div class="grid-products">
            <?php foreach ($products as $product) :?>
            <div class="box-product">
                <img src="<?= $product['imagem']?>" alt="">
                <div class="values">
                    <p><?= $product['descricao'] ?></p>
                    <p class="price">R$<?= $product['valor'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>
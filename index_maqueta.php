<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="container">
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo">
                <a href="index.php">
                    Tienda de camisetas
                </a>
            </div>
        </header>
        <nav id="menu">
            <ul>
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Categoria 1</a>
                </li>
                <li>
                    <a href="">Categoria 2</a>
                </li>
                <li>
                    <a href="">Categoria 3</a>
                </li>
                <li>
                    <a href="">Categoria 4</a>
                </li>
                <li>
                    <a href="">Categoria 5</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Login</h3>
                    <form action="" method="post">
                        <label for="email"></label>
                        <input type="email" name="email" placeholder="Email">

                        <label for="password"></label>
                        <input type="password" name="password" placeholder="Password">

                        <input type="submit" value="Send">
                    </form>
                    <ul>
                        <li><a href="">Mis pedidos</a></li>
                        <li><a href="">Gestionar pedidos</a></li>
                        <li><a href="">Gestionar categorias</a></li>
                    </ul>

                </div>
            </aside>
            <div id="central">
                <h1>Productos destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camisa azul</h2>
                    <p>30 $</p>
                    <a href="" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camisa Azul L</h2>
                    <p>30 $</p>
                    <a href="" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camisa Azul XXL</h2>
                    <p>30 $</p>
                    <a href="" class="button">Comprar</a>
                </div>
            </div>
        </div>

        <footer id="footer">
            <p>Desarrollado por Daniel Perez CI &copy
                <?= date('Y') ?>
            </p>
        </footer>

    </div>
</body>

</html>
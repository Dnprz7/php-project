<aside id="lateral">


    <div id="carrito" class="block_aside">
        <h3>Mi carrito</h3>
        <ul>
            <?php $stats=Utils::statsCarrito() ?>
            <li><a href="<?= base_url ?>carrito/index">Productos(<?=$stats['count']?>)</a></li>
            <li><a href="<?= base_url ?>carrito/index">Total: <?=$stats['total']?> $</a></li>
            <li><a href="<?= base_url ?>carrito/index">Ver carrito</a></li>
        </ul>
    </div>

    <div id="login" class="block_aside">

        <?php if (!isset($_SESSION['identity'])): ?>

            <h3>Login</h3>
            <form action="<?= base_url ?>usuario/login" method="post">
                <label for="email"></label>
                <input type="email" name="email" placeholder="Email">

                <label for="password"></label>
                <input type="password" name="password" placeholder="Password">

                <input type="submit" value="Send">
            </form>

        <?php else: ?>
            <h3>
                <?= $_SESSION['identity']->nombre ?>
                <?= $_SESSION['identity']->apellidos ?>
            </h3>

        <?php endif; ?>

        <ul>
            <?php if (isset($_SESSION['admin'])): ?>
                <li><a href="<?= base_url ?>categoria/index">Gestionar categorias</a></li>
                <li><a href="<?= base_url ?>producto/gestion">Gestionar productos</a></li>
                <li><a href="<?= base_url ?>pedido/gestion">Gestionar pedidos</a></li>
            <?php endif; ?>

            <?php if (isset($_SESSION['identity'])): ?>
                <li><a href="<?= base_url ?>pedido/mis_pedidos">Mis pedidos</a></li>
                <li><a href="<?= base_url ?>usuario/logout">Logout</a></li>
            <?php else: ?>
                <li><a href="<?= base_url ?>usuario/registro">Register here</a></li>
            <?php endif; ?>
        </ul>


    </div>
</aside>
<div id="central">
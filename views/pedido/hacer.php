<?php if (isset($_SESSION['identity'])): ?>
    <h1>Hacer pedido</h1>

    <p>
        <a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
    </p>
    <h3>Dirreccion para el envio</h3>
    <form action="<?= base_url ?>pedido/add" method="post">

        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required>

        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" required>

        <label for="direccion">Direccion</label>
        <textarea name="direccion" id="" cols="2" rows="2" required></textarea>

        <input type="submit" value="Confirm">
    </form>



<?php else: ?>
    <h1>Necesitas estar identificado</h1>
    <p>Necestias estar logeado en la web para poder realizar tu pedido</p><br>
    <a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
<?php endif; ?>
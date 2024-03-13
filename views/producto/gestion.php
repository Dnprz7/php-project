<h1>Gestionar Productos</h1>

<a href="<?= base_url ?>producto/crear" class="button button-small">Crear producto</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'):?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>
    <?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'):?>
        <strong class="alert_red">El producto no se ha creado correctamente</strong>
<?php endif;?>
<?php Utils::deleteSession('producto')?>

<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            NOMBRE
        </th>
        <th>
            PRECIO
        </th>
        <th>
            STOCK
        </th>
    </tr>
    <?php while ($pro = $productos->fetch_object()): ?>
        <tr>
            <td>
                <?= $pro->id ?>
            </td>
            <td>
                <?= $pro->nombre ?>
            </td>
            <td>
                <?= $pro->precio ?>
            </td>
            <td>
                <?= $pro->stock ?>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
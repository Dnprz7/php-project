<h1>Crear nuevos productos</h1>
<div class="form_container">
    <form action="<?= base_url ?>producto/save" method="post">

        <label for="nombre"></label>
        <input type="text" name="nombre" placeholder="Nombre">

        <label for="descripcion"></label>
        <textarea name="descripcion" placeholder="Descripcion"></textarea>

        <label for="precio"></label>
        <input type="number" name="precio" placeholder=0>

        <label for="stock"></label>
        <input type="number" name="stock" placeholder=0>

        <label for="categoria"></label>
        <?php $categorias = Utils::showCategorias(); ?>

        <select name="categoria">
            <?php while ($cat = $categorias->fetch_object()): ?>
                <option value="<?= $cat->id ?>">
                    <a href="">
                        <?= $cat->nombre ?>
                    </a>
                </option>
            <?php endwhile; ?>
        </select>

        <label for="imagen"></label>
        <input type="file" name="imagen">

        <input type="submit" value="Save">

    </form>
</div>
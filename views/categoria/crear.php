<h1>Crear nueva categoria</h1>

<form action="<?= base_url ?>categoria/save" method="post">

    <label for="nombre"></label>
    <input type="text" name="nombre" placeholder="Nombre" required>

    <input type="submit" value="Save">
</form>
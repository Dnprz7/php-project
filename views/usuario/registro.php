<h1>Registrarse</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] === 'complete') : ?>
    <strong class="alert_green">Registro Completado Correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] === 'failed') :?>
    <strong class="alert_red">Registro Fallido, introduce bien los datos</strong>
<?php endif;?>
<?php Utils::deleteSession('register');?>

<form action="<?= base_url?>usuario/save" method="post">
    <label for="nombre"></label>
    <input type="text" name="nombre" placeholder="Nombre" required>

    <label for="apellidos"></label>
    <input type="text" name="apellidos" placeholder="Apellidos" required>

    <label for="email"></label>
    <input type="email" name="email" placeholder="Email" required>

    <label for="password"></label>
    <input type="password" name="password" placeholder="Password" required>

    <input type="submit" value="Sing up">
</form>
<h1>Registrarse</h1>
<form action="index.php?controller=Usuario&action=save" method="post">
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
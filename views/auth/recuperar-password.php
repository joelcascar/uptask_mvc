<div class="contenedor olvide">
    <?php include_once __DIR__ . "/../templates/nombre-sitio.php"; ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recuperar Contraseña</p>
        <form class="formulario" method="POST" action="/olvide">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Escribe tu email" name="email">
            </div>
            <input type="submit" class="boton" value="Recuperar contraseña">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Crea una</a>
        </div>
    </div> <!--.contenedor-sm -->
</div>
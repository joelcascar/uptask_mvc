<div class="contenedor reestablecer">
    <?php include_once __DIR__ . "/../templates/nombre-sitio.php"; ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu nueva contraseña</p>
        <form class="formulario" method="POST" action="/reestablecer">
            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Escribe tu nueva contraseña" name="password">
            </div>
            <input type="submit" class="boton" value="Guardar contraseña">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Crea una</a>
        </div>
    </div> <!--.contenedor-sm -->
</div>
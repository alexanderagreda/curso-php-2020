<form method="post" action="agregar.php">
    <fieldset>
        <legend> Ingrese su consulta</legend>
        <p>
            <label> Escriba su nombre:
            <input type="text" name="nombre" required/>
            </label>
        </p>
        <p>
        <label>Escriba su correo electrónico:
        <input type="email" name="email" required/>
        </label>
        </p>
        <p>
            <label>Escriba su mensaje:
            <textarea name="mensaje" cols="30" rows="5" required></textarea>
            </label>
        </p>
        <p>
            <input type="submit" value="enviar"/>
        </p>
    </fieldset>
</form>
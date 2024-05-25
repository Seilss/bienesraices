<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
    </picture>

    <h2>Llene el formulario de Contacto</h2>

    <form action="procesar.php" method="post" class="formulario">
        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre" required>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu Email" id="email" required>

            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" placeholder="Tu Teléfono" id="telefono" required>

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Compra:</label>
            <select name="opciones" id="opciones" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="vivienda1">Vivienda 1</option>
                <option value="vivienda2">Vivienda 2</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono" required>

                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email" required>
            </div>

            <p>Si eligió teléfono, elija la fecha y la hora</p>

            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" min="09:00" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php
    incluirTemplate('footer');
?>
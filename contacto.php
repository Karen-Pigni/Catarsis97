<!-- HEAD -->
<?php
    $title="<title>Catarsis 97 - Contacto </title>";
    include("head.php");
?>

<body id="fondoContacto">
    <!-- HEADER -->
    <?php
        include("header.php");
    ?>

    <main>
        <h1 style="display: none;">Contacto Catarsis 97</h1>

     <!------------------------------------- FORMULARIO DE CONTACTO --------------------------------------------->
        <div class="contenedor" id="secc-cont">
            <form action="datosform.php" class="form" method="POST">

                <div class="form-header">
                    <h1 class="form-title">Contacto</h1>
                </div>

                <br>
                 <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-input place" placeholder="Escriba su nombre" id="nombre"  name="nombre" required value="">
                <small id="helpNombre" class="form-text smallLetra"></small> 
            
                <label for="correo" class="form-label"> Correo Electrónico:</label>
                <input type="email" class="form-input place" id="correo" placeholder="Escriba su correo" name="correo" required value="">
                <small id="helpCorreo" class="form-text smallLetra"></small>

                <label for="asunto" class="form-label">Asunto:</label>
                <input type="text" class="form-input place" id="asunto" placeholder="Escriba el asunto" name="asunto" required value="">
                <small id="helpAsunto" class="form-text smallLetra"></small>

                <label for="mensaje" class="form-label place">Mensaje:</label>
                <textarea id="mensaje" class="form-textarea" placeholder="Escriba el mensaje" name="mensaje" required value=""></textarea>
                <small id="helpMensaje" class="form-text smallLetra" style="margin-top: -20px;"></small>

                <input type="submit" class="btn-submit" value="Enviar" id="btn2">

                <div id="vacio" style="padding-top: .5rem;"></div>

            </form>

            <br>
        </div>
    </main>

    <!-- FOOTER -->
    <?php
        include("footer.php");
    ?>
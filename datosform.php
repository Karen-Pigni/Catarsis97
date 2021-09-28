<?php
# HEAD 
    $title="<title>Catarsis 97 - Envio de consulta </title>";
    include("head.php");

    echo "<body>";   
    
# HEADER
    include("header.php");

# MENSAJE AL EMAIL DE LA BANDA

    //1° 
    $nombre= $_POST['nombre'];
    $email= $_POST['correo'];
    $asunto= $_POST['asunto'];
    $mensaje= $_POST['mensaje'];
    
    //2°
    $destinatario="catarsis97@gmail.com"; // Al email que mandamos los datos
    $asunto1= "Nuevo mensaje"; // El nombre del asunto que le aparecerá en todos los emails
    $cuerpomensaje= "<b>Nombre: </b>".$nombre."<br><b>Correo Electrónico: </b>".$email."<br><b>Asunto: </b>".$asunto."<br><b>Mesaje: </b>".$mensaje; // Lo que se enviará
    $envio= mail($destinatario,$asunto,$cuerpomensaje); // Función de envío 

        
    if($envio==true){
        echo "<div style='margin-left: .5rem;'> Se han enviado sus datos correctamente.</div>";
    }else{
        echo "<div style='margin-left: .5rem;'> Algo falló, vuelva a ingresar sus datos.</div>";
    };  
    

# CONEXION A LA BASE DE DATOS MYSQL

    // 1° Definimos las variables 
    
    $host="localhost";
    $user="root";
    $pass="";
    $db="basecatarsis";
    
    // 2° Hacemos la conexión MySQL de Xampp
    
    @$conexion=mysqli_connect($host,$user,$pass,$db) or die("Error de conexión al servidor.");

    // 3° Condicional

    if($nombre=="" and $email==""){
        echo "<div style='margin-left: .5rem;'> No se puede realizar la consulta porque algún campo está vacio.</div>";
    }else{
        $query1="INSERT INTO datosform VALUES (0,'$nombre','$email')";

        $consulta=mysqli_query($conexion,$query1);

        if($consulta==true){
            echo "<div style='margin-left: .5rem;'>La consulta fue realizada. </div>";
        }
    }

    //3° Liberar la consulta 

    mysqli_free_result($consulta); //NO

    // 4° Cerramos la conexión 

    mysqli_close($conexion);

# BOTÓN
echo '<a href="contacto.php #secc-cont"><input type="button" value="Volver" style="margin: 1rem .5rem;" class="btn botonMerch"></a><br><br>';    

# FOOTER
    include("footer.php");
?>

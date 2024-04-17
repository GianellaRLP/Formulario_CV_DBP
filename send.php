<?php
    include("conexion.php");
    
    if (isset($_POST ["send"]))
    
    {
        if(
            strlen($_POST['nombre']) >=1 &&
            strlen($_POST['apellido']) >=1 &&
            strlen($_POST['fecha_nacimiento']) >=1 &&
            strlen($_POST['ocupacion']) >=1 &&
            strlen($_POST['telefono']) >=1 &&
            strlen($_POST['email']) >=1 &&
            strlen($_POST['aptitudes_eleccion']) >=1 &&
            strlen($_POST['perfil']) >=1
        ) {
            $nombre = $_POST ["nombre"];
            $apellido = $_POST ["apellido"];
            $fecha_nacimiento = $_POST["fecha_nacimiento"];
            $ocupacion = $_POST ["ocupacion"];
            $telefono = $_POST ["telefono"];
            $email = $_POST ["email"];
            $nacionalidad = $_POST ["nacionalidad"];
            $nivel_ingles = isset($_POST["nivel_ingles"]) ? $_POST["nivel_ingles"] : "";
            $lenguajes_programacion = isset($_POST["lenguajes_programacion"]) ? implode(", ", $_POST["lenguajes_programacion"]) : "";
            $aptitudes_eleccion = $_POST ["aptitudes_eleccion"];
            $habilidades = isset($_POST["habilidades"]) ? implode(", ", $_POST["habilidades"]) : "";
            $perfil = $_POST ["perfil"];
            
            $consulta = "INSERT INTO datos( nombre, apellido, fechaNacimiento, ocupacion, telefono, email, nacionalidad, nivelingles, lenguajesProgramacion, aptitudes, habilidades, perfil) VALUES('$nombre', '$apellido', '$fecha_nacimiento', '$ocupacion', '$telefono', '$email','$nacionalidad','$nivel_ingles', '$lenguajes_programacion', '$aptitudes_eleccion', '$habilidades', '$perfil')";
            $resultado = mysqli_query ($enlace, $consulta);

            if($resultado) 
            {
                ?>
                    <h3 class= "success" > Tu informacion a sido enviada con exito.</h3>
                <?php
            }
            else 
            { 
                ?>
                    <h3 class= "error" > Ocurrio un problema</h3>
                <?php
            }
            
            
        } else { ?> <h3 class= "error"> Llena todos los campos. </h3> <?php }


    }
?>
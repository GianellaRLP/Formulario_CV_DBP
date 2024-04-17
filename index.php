<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario CV</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body> 
<div id="container">
        
        
        <form action="#" name="bsparacv" method="post">
            <section>FORMULARIO CV</section>
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" ><br>

            <label for="apellido">Apellido</label><br>
            <input type="text" id="apellido" name="apellido"><br>

            <label for="fecha_nacimiento">Fecha de nacimiento</label><br>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br>

            <label for="ocupacion">Ocupacion</label><br>
            <input type="text" id="ocupacion" name="ocupacion"><br>

            <label for="telefono">Telefono</label><br>
            <input type="text" id="telefono" name="telefono"><br>

            <label for="email">E-mail</label><br>
            <input type="text" id="email" name="email"><br>
            
            <label for="nacionalidad">Nacionalidad</label><br>
            <select id="nacionalidad" name="nacionalidad">
                <option value="peru">Perú</option>
                <option value="argentina">Argentina</option>
                <option value="brasil">Brasil</option>
                <option value="Ecuador">Ecuador</option>
            </select>
            <br>
            <label for="nivel_ingles">Nivel de inglés</label><br>
            
                <input type="radio" id="nivel_ingles_basico" name="nivel_ingles" value="Basico">Basico<br>
                <input type="radio" id="nivel_ingles_intermedio" name="nivel_ingles" value="Intermedio">Intermedio<br>
                <input type="radio" id="nivel_ingles_avanzado" name="nivel_ingles" value="Avanzado">Avanzado<br>
            
            <label for="lenguajes_programacion">Lenguajes de programacion</label><br>
            <select name="lenguajes_programacion[]" id="lenguajes_programacion" multiple>
                <option value="c++">C++</option>
                <option value="c">C</option>
                <option value="java">Java</option>
                <option value="python">python</option>
            </select>
    
            <br><label for="aptitudes">Aptitudes</label><br>
            <input list="aptitudes" id="aptitudes_eleccion" name="aptitudes_eleccion">
            <datalist id="aptitudes">
                
                <option value="Sociable">Esta habilidad es esencial en el ámbito profesional, ya que facilita la transmisión clara de ideas, evita malentendidos y promueve la resolución efectiva de problemas.</option>
                <option value="Creativo">Mentalidad imaginativa, curiosa y abierta a hacer las cosas de manera diferente</option>
                <option value="Buen comunicador">Buena comunicacion</option>
                
            </datalist>
            <br><label for="Habilidades">Habilidades</label><br>
            
                <input type="checkbox" id="habilidad1" name= "habilidades[]" value="Comunicativo">Comunicativo<br>
                <input type="checkbox" id="habilidad2" name= "habilidades[]" value="Pensamiento_critico">Pensamieno critico<br>
                <input type="checkbox" id="habilidad3" name= "habilidades[]" value="Sociable">Sociable<br>
            
            <label for="perfil">Perfil</label><br>
            <textarea id="perfil" name="perfil" rows="3" cols="40">
            
            </textarea>

            <input name="send" type="submit" name="registro" value="Enviar">
        </form>

    <?php
        include("send.php");
    ?>
</body>
</html>
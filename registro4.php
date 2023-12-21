<?php
echo "<h2>REGISTRO COMPLETADO</h2><br>";

echo "Nombre:" .$_POST["nombre"]."<br>";
echo "Apellido:" .$_POST["apellidos"]."<br>";
echo "Correo:" .$_POST["correo"]."<br>";
echo "Contraseña:" .$_POST["clave"]."<br>";
echo "Valoración:" .$_POST["documentacion"]."<br>";

echo "Secciones te gustaron <br>";
if(isset($_POST['s1'])){
    echo "Sesion 1 <br>";
}
if(isset($_POST['s2'])){
    echo "Sesion 2<br>";
}
if(isset($_POST['s3'])){
    echo "Sesion 3<br>";
}
echo "Zona de residencia: " .$_POST["residencia"];
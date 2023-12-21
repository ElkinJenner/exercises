<?php
$nombre = $_POST["Nombre"];
$email = $_POST["Email"];
$ciudad = $_POST["Ciudad"];

echo "Nombre: $nombre" ."<br>";
echo "Correo electronico: $email"."<br>";
echo "Ciudad: $ciudad"."<br>";
echo "Sus aficiones: <br>";

if(isset($_POST["Deportes"])){
    echo "Deportes<br>";
}
if(isset($_POST["Coches"])){
    echo "Coches<br>";
}
if(isset($_POST["Musica"])){
    echo "Música<br>";
}
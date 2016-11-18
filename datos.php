<?php

/* 
 * Script que recoge los datos del formulario y los muestra por pantalla
 */

//recogemos los datos del formulario del post
$name=$_POST["nombre"];
$age=$_POST["edad"];
$city=$_POST["ciudad"];
$sex=$_POST["sexo"];
echo"<p>Datos del usuario registrado en el formulario:</P>";
echo"<p>Nombre: $name</p><p> Edad: $age</p><p> Ciudad: $city</p><p> Sexo: $sex</p>";
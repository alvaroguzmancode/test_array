<?php
$postdata = file_get_contents("php://input");  
$request = json_decode($postdata);

@$nombre=$request->nombre;
@$telefono=$request->telefono;
@$correo=$request->correo;

echo "El nombre es: ".$nombre.", el telefono es: ".$telefono." el correo es: ".$correo;
?>
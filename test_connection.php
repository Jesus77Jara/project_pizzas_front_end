<?php

include_once "config_login.php";

function openCon()
{



$dsn = "mysql:dbname=".DATABASE_NAME.";host=".SERVER_NAME;

$link = new PDO ($dsn, USER_NAME, PASSWORD);
return $link;

echo "Conexion Exitosa";

}

function closeCon ($a){
    $a =null;

}
//Invocacion
 $con = openCon();//ABRE LA CONEXION
 //en el medio se hacen operaciones CRUD

 $sql ="select username,email from users";
 $row= $con->query($sql);

foreach ($row as $col){
    echo $col['username'];

}



 closeCon ($con);//CIERRA LA CONEXION
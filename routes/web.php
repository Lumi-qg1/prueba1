<?php 
$uri = $_SERVER['REQUEST_URI'];
///echo $uri;
if ($uri == "/examen/public/"){
    require_once "../views/index.php";

}elseif ($uri == "/examen/public/ejercicio01/"){
    require_once "../views/ejercicio01.php";

}elseif ($uri == "/examen/public/ejercicio02/"){
    require_once "../views/ejercicio02.php";

}elseif ($uri == "/examen/public/ejercicio03/"){
    require_once "../views/ejercicio03.php";
}
    


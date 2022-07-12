<?php
require_once("../lib/functions.php") ;
$id = $_GET['id'] ;

eliminar_profesor($connect, $id) ;

header('location: index.php') ;
?>

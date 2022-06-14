<?php
session_start();
session_unset();
session_destroy();

//redirecr user
header("location:index.php");

?>
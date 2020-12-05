<?php
session_start();
session_destroy();
header('Location: http://localhost:8080/projet12/index.php');

?>
<?php

session_start();
unset($_SESSION['USER']);
session_destroy();
header('location:index.php');


?>
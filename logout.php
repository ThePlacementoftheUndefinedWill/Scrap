<?php

@include 'config1.php';

session_start();
session_unset();
session_destroy();

header('location:Home.html');

?>
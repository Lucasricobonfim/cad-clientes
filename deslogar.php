<?php
session_start();
unset($_SESSION['idUser']);
header("location: pages/login.php");

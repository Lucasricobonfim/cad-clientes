<?php

    if(!function_exists("protect")){

        function protect(){

            if(!isset($_SESSION))
            session_start();

            if(!isset($_SESSION['idUser']) || !is_numeric($_SESSION['idUser'])){
                header("Location: login.php");
            }
        }
    }
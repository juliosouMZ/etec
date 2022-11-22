<?php

$host = "localhost";
$bd = "newtec-eco";
$user = "root";
$senha = "usbw";

            $mysqli= new mysqli($host,$user,$senha,$bd);
            if($mysqli->connect_errno){
                die("Erro na conexão de dados");
            }

?>
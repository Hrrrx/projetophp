<?php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cadastro";
$utf8 = header("Content-type: text/html; charset=utf-8");  // para aceitar acentos
$link = new mysqli($localhost,$username,$password,$dbname);
$link->set_charset('utf8'); // para aceitar acentos
 ?>

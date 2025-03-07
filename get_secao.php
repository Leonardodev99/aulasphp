<?php

session_start();

//echo $_SESSION['name'];
if(!isset($_SESSION['auth'])) {
    header('laction:set_secao.php');
}

echo 'Painel de Admin';
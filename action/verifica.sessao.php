<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header('location: '. SITE_HOME .'/index.php');
}
?>
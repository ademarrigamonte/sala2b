<?php
session_start();
session_destroy();
header('Location: tela.php');
exit();
?>

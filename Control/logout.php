<?php
session_start();
$_SESSION['idUsuario'] = null;
$_SESSION['usuario'] = null;
$_SESSION['senha'] = null;
$_SESSION['nomeUsuario'] = null;
$_SESSION['email'] = null;
$_SESSION['numeroConselho'] = null;
$_SESSION['idConselho'] = null;
$_SESSION['idInstituicao'] = null;
session_unset();
session_destroy();

    header("Location: ../view/index.php");

?>
<?php

// verifica si la sesion esta iniciada si no es asi, la inicia
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// verifica si hay algun parametro para saber si el usuario inicio sesion
// if (!isset($_SESSION['email_user'])) {
//     header("Location: ../public/login");
//     exit;
// }

?>
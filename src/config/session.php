<?php

function requireValidSession($requiresAdmin = false) {
    $user = $_SESSION['user'];
    if(!isset($user)) {
        header('location: login.php');
        exit();
    } elseif($requiresAdmin && !$user->is_admin) {
        addErrorMsg('Acesso negado');
        header('location: day_records.php');
        exit();
    }
}
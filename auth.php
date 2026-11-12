<?php

function med_e_start_session()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_set_cookie_params([
            'httponly' => true,
            'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
            'samesite' => 'Lax',
        ]);
        session_start();
    }
}

function med_e_require_role($role)
{
    med_e_start_session();

    if (!isset($_SESSION['role']) || $_SESSION['role'] !== $role) {
        header('Location: index1.php');
        exit;
    }
}

function med_e_escape($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}


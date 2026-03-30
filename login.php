<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$users = [
    ["username" => "admin", "password" => "12345"],
    ["username" => "user", "password" => "user123"]
];

$login = false;

foreach ($users as $u) {
    if ($u['username'] = $username && $u['password'] == $password) {
        $login = true;
    }
}

if ($login = true) {
    $_SESSION['user'] = $username;
    echo "Login berhasil!";
} else {
    echo "Login gagal!";
}
?>
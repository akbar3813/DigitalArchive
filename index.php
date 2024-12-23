<?php
session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION['login'])) {
    // Ambil role dari session
    $role = $_SESSION['login']['role'];

    // Daftar mapping role ke path dashboard
    $dashboard_paths = [
        'admin' => 'dashboard/index.php',
        'user'  => 'dashboard/user.php',
    ];

    // Periksa apakah role pengguna ada di mapping
    if (array_key_exists($role, $dashboard_paths)) {
        header('Location: ' . $dashboard_paths[$role]); // Redirect ke halaman dashboard sesuai role
        exit();
    } else {
        echo "Role tidak dikenali!";
        exit();
    }
} else {
    // Jika belum login, arahkan ke login.php
    header('Location: ./login.php');
    exit();
}
?>

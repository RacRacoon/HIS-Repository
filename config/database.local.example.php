<?php
// Salin file ini menjadi config/database.local.php lalu sesuaikan.
// File database.local.php tidak boleh di-commit (sudah di .gitignore).
// Nilai di sini bisa di-override oleh environment variable CAREFLOW_DB_HOST/PORT/NAME/USER/PASS.
return [
    'host' => '127.0.0.1',
    'port' => 3306,            // null = auto (coba 3306 lalu 3307)
    'name' => 'hospital_system',
    'user' => 'root',
    'pass' => '',              // default XAMPP: kosong
];

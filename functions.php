<?php
// /var/www/company_profile/functions.php

function write_log($message, $type = 'web') {
    // Karena functions.php ada di root project, arahkan langsung ke folder logs/ di bawahnya
    $base_dir = __DIR__ . '/logs/'; 
    
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    
    // Struktur folder: logs/web/2026/08/
    $target_dir = $base_dir . $type . '/' . $year . '/' . $month . '/';
    
    // 1. Buat folder otomatis jika belum ada dengan izin 0775 agar bisa ditulis www-data
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0775, true);
    }
    
    // 2. Nama file berdasarkan tanggal (contoh: 06.log)
    $log_file = $target_dir . $day . '.log';
    
    // 3. Format pesan dengan timestamp jam
    $formatted_message = "[" . date('Y-m-d H:i:s') . "] " . $message . "\n";
    
    // 4. Eksekusi tulis log
    error_log($formatted_message, 3, $log_file);
}
<?php

require_once __DIR__ . '/../functions.php';

// 2. Langsung panggil write_log dengan pesan bebas buatanmu sendiri
$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
write_log("Testing Cron Jalan", "cron");
// ob_start();
?>



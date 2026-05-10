<?php
/*
 * LOCAL (XAMPP): credentials are read from config.json
 * VERCEL:        set keys in Project → Settings → Environment Variables
 *                (config.json is in .gitignore, Vercel uses getenv() fallback)
 */

$cfg = [];
$jsonFile = __DIR__ . '/config.json';

if (file_exists($jsonFile)) {
    $cfg = json_decode(file_get_contents($jsonFile), true) ?? [];
}

function env(string $key, $cfg): string {
    return (string)($cfg[$key] ?? getenv($key) ?? '');
}

define('MAIL_HOST',      env('MAIL_HOST',      $cfg) ?: 'smtp.gmail.com');
define('MAIL_PORT',      (int)(env('MAIL_PORT', $cfg) ?: 587));
define('MAIL_USER',      env('MAIL_USER',      $cfg));
define('MAIL_PASS',      env('MAIL_PASS',      $cfg));
define('MAIL_FROM',      env('MAIL_FROM',      $cfg) ?: MAIL_USER);
define('MAIL_FROM_NAME', env('MAIL_FROM_NAME', $cfg) ?: 'Portfolio');
define('MAIL_TO',        env('MAIL_TO',        $cfg) ?: MAIL_USER);

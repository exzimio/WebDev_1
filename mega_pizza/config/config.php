<?php
// Auto-detectar o ambiente para que o site funcione perfeitamente tanto no seu XAMPP como no InfinityFree sem mexer mais no código!
$is_localhost = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']) || $_SERVER['HTTP_HOST'] === 'localhost';

if ($is_localhost) {
    // URL no seu computador
    define('BASE_URL', '/MegaPizza1/mega_pizza/');
} else {
    // URL no servidor online (InfinityFree)
    define('BASE_URL', '/'); 
}

<?php

// Подключаем файл переменных окружения
if (empty($_ENV["DB_HOST"])) {
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();
}

return [
    'adminEmail' => 'admin@example.com',
];

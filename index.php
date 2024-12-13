<?php
// Настройки Telegram
$botToken = "7548681470:AAETEnSZdclBzxtInZBZmAeRcquigEwRgu8"; // Ваш токен бота
$chatId = "6331127625"; // Ваш Telegram Chat ID

// Получение IP пользователя
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Текст сообщения для Telegram
$message = "👤 Новый посетитель:\n";
$message .= "IP: $ip\n";
$message .= "User-Agent: $userAgent\n";
$message .= "Время: " . date("Y-m-d H:i:s");

// URL для отправки сообщения в Telegram
$telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage";

// Отправка сообщения
file_get_contents($telegramApiUrl . "?chat_id=$chatId&text=" . urlencode($message));

// Редирект на Google
header("Location: https://google.com");
exit();
?>

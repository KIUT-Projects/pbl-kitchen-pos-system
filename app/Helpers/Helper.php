<?php

if (!function_exists('sendTelegram')){
    function sendTelegram($id, $message): void
    {
        app('App\Http\Controllers\Service\TelegramController')->sendTelegram($id, $message);
    }
}

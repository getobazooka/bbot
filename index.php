<?php
// Load composer
use Longman\TelegramBot\Request;

require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '7305808870:AAGs2QzhNqsfrWyjdXfP4Wep5EZPd73HulY';
$bot_username = 'testakarbot';
$hook_url     = 'https://stackme.online/test/bbot.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

//    $result = Request::sendMessage([
//        'chat_id' => $chat_id,
//        'text'    => 'Your utf8 text 😜 ...',
//    ]);
    // Set webhook
//    $result = $telegram->setWebhook($hook_url);
//    if ($result->isOk()) {
//        echo $result->getDescription();
//    }
    $chat_id = '729499405';
    $result = Request::sendMessage([
        'chat_id' => $chat_id,
        'text'    => 'slaw',
    ]);
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}

echo 'hello world';
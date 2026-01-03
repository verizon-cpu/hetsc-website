<?php
// HETSC Cryptomus Payment Webhook
http_response_code(200);
header('Content-Type: text/plain');
header('Access-Control-Allow-Origin: *');
echo 'OK';

// Optional: Log for debugging
$data = file_get_contents('php://input');
if (!empty($data)) {
    $log = date('Y-m-d H:i:s') . " - " . $data . "\n";
    file_put_contents('webhook_log.txt', $log, FILE_APPEND);
}
?>

<?php

define("API_KEY", "XXX:XXXX");
$channel = '-100XXXX';

function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datas));
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

$time = date("H:i"); // GMT

if ($time == '20:29') {
    bot("sendMessage", [
        "chat_id" => $channel,
        "text" => 'متاسفانه محمدرضا باباجانی امروز هم به درک واصل نشد.',
    ]);
}

?>

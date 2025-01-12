<?php

namespace Core;

class Bot {
    private $api_url;

    public function __construct($token) {
        $this->api_url = "https://api.telegram.org/bot{$token}/";
    }

    public function sendMessage($chat_id, $text) {
        $response = $this->request("sendMessage", [
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => 'HTML'
        ]);
    }
    

    private function request($method, $data = null) {
        $ch = curl_init();
        $options = [
            CURLOPT_URL => $this->api_url.$method,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_VERBOSE => 1,
        ];
        if ($data) {
            $options[CURLOPT_POSTFIELDS] = $data;
        }
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
    
        curl_close($ch);
        return json_decode($result, true);
    }
}

?>
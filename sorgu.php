<?php

// API endpoint
$url = "https://api.thy.com/flights/search";

// API anahtarı
$api_key = "your_api_key_here";

// İstek parametreleri
$params = array(
    "origin" => "IST",
    "destination" => "DXB",
    "date" => "2023-03-10"
);

// API isteğini yap
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url . "?" . http_build_query($params));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer " . $api_key
));
$response = curl_exec($curl);
curl_close($curl);

// API cevabını kontrol et
if ($response !== false) {
    // API cevabını JSON formatına dönüştür
    $data = json_decode($response, true);

    // Uçuşları listele
    foreach ($data["flights"] as $flight) {
        echo "Uçuş ID: " . $flight["id"] . "\n";
        echo "Kalkış Yeri: " . $flight["origin"] . "\n";
        echo "Varış Yeri: " . $flight["destination"] . "\n";
        echo "Tarih: " . $flight["date"] . "\n";
        echo "Fiyat: " . $flight["price"] . " TL\n";
        echo "---\n";
    }
} else {
    echo "API isteği başarısız.";
}

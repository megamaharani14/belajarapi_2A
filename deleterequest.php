<?php

// URL API tujuan
$url = 'https://jsonplaceholder.typicode.com/posts/1'; //ganti 1 dengan id yang sesuai

// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk metode delete
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

// Set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL
$response = curl_exec($ch);

//Periksa apakah terjadi kesalahan
if ($response === false) {
    echo 'cURL Error: ' . curl_error($ch) . "\n";
} else {
    // Mendapatkan kode status HTTP
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    // Tampilkan kode status dan respon dari server
    echo "HTTP Status Code: " . $httpCode . "\n";
    echo "Response: " . $response . "\n";
}

// Tutup cURL
curl_close($ch);
?>
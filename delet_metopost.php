<?php

// URL API tujuan (dengan ID data yang ingin dihapus)
$url = 'https://jsonplaceholder.typicode.com/posts/1';

// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk metode DELETE
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

// Set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Tampilkan respon dari server
echo $response;
?>

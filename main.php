<?php

// URL API publik
$url = 'https://jsonplaceholder.typicode.com/posts';
// Inisialisasi cURL
$ch = curl_init();

// Set opsi cURL untuk mengambil URL dengan metode GET
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL dan simpan respon
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Ubah respon dari JSON menjadi array PHP
$data = json_decode($response, true);

// Tampilkan hasil 5 data
$limaData = array_slice($data, 0,5);
print_r($limaData)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1{
            font-weight: 700px;
        }

        th {
            background-color: green; 
            color: white; 
        }

    </style>
</head>
<body>
    <center><h1>Data Posts</h1></center>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <?php
            // Inisialisasi URL dan pengaturan CURL
            $url = 'https://jsonplaceholder.typicode.com/posts';
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            // Ubah respon JSON menjadi array
            $data = json_decode($response, true);

            // Loop untuk menampilkan data dalam tabel
            foreach ($limaData as $post) {
                echo "<tr>";
                echo "<td>" . $post['id'] . "</td>";
                echo "<td>" . $post['title'] . "</td>";
                echo "<td>" . $post['body'] . "</td>";
                echo "</tr>";
            }
            
    ?>
</body>     
</html>

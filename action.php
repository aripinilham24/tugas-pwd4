<?php
    // Mengambil nilai dari form
    $name = $_POST["name"];
    $address = $_POST["address"];
    $place = $_POST["place"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $programmingLang = $_POST["programmingLang"];
    $kotaAsal = $_POST["kotaAsal"];
    $comment = $_POST["comment"];

    // Menampilkan hasil form
    echo "Nama: $name<br>";
    echo "Alamat: $address<br>";
    echo "Tempat: $place<br>";
    echo "Jenis Kelamin: $gender<br>";
    echo "Umur: $age Tahun<br>";
    
    // Menampilkan bahasa pemrograman yang dipilih
    if (isset($_POST['programmingLang'])) {
        $selectedLangs = $_POST['programmingLang']; // Mendapatkan array checkbox yang dipilih
    
        echo "Bahasa Pemrograman yang Dikuasai:<br>";
        foreach ($selectedLangs as $lang) {
            echo "- " . htmlspecialchars($lang) . "<br>";
        }
    } else {
        echo "Tidak ada bahasa pemrograman yang dipilih.";
    }

    echo "Kota Asal: $kotaAsal<br>";
    echo "Komen: $comment<br>";
?>

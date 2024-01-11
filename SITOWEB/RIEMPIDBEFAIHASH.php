<?php
$users = [
        1 => ['nome' => 'Beatles', 'immagine' => './fotoartisti/beatles.jpg'],
        2 => ['nome' => 'Clementino', 'immagine' => './fotoartisti/clementino.jpg'],
        3 => ['nome' => 'De André', 'immagine' => './fotoartisti/deandre.jpg'],
        4 => ['nome' => 'Dr. Dre', 'immagine' => './fotoartisti/drdre.jpg'],
        5 => ['nome' => 'Dua Lipa', 'immagine' => './fotoartisti/dualipa.jpg'],
        6 => ['nome' => 'Eminem', 'immagine' => './fotoartisti/eminem.jpg'],
        7 => ['nome' => "Guns N' Roses", 'immagine' => './fotoartisti/gunsnroses.jpg'],
        8 => ['nome' => 'Kanye West', 'immagine' => './fotoartisti/kanyewest.jpg'],
        9 => ['nome' => 'Marilyn Manson', 'immagine' => './fotoartisti/marilynmanson.jpg'],
        10 => ['nome' => 'Post Malone', 'immagine' => './fotoartisti/postmalone.jpg'],
        11 => ['nome' => 'Snoop Dogg', 'immagine' => './fotoartisti/snoopdogg.jpg'],
        12 => ['nome' => 'Tedua', 'immagine' => './fotoartisti/tedua.jpg'],
        13 => ['nome' => 'Three Days Grace', 'immagine' => './fotoartisti/threedaysgrace.jpg'],
        14 => ['nome' => 'Lazza', 'immagine' => './fotoartisti/lazza.png'],
        15 => ['nome' => 'Gem¡ni', 'immagine' => './fotoartisti/gemini.jpg'],


    ];

    foreach ($users as $key => $user) {
        $username = $user['username'];
        $password = $user['password'];
    
        // Escape the string values
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);
    
        $sql = "INSERT INTO utenti(id, username, password) VALUES($key, '$username', '$password');";
        $result = $conn->query($sql);
    
        var_dump($result);
    }
    ?>


<!-- FAI HASH PASS -->
<?php

$passwordP = hash('sha256', "Samuelespass2@");
var_dump($passwordP); echo "<br>";
$passwordP = hash('sha256', "Salvatorespass3@");
var_dump($passwordP);echo "<br>";
$passwordP = hash('sha256', "Simonespass4@");
var_dump($passwordP);echo "<br>";
$passwordP = hash('sha256', "Elenaspass5@");
var_dump($passwordP);echo "<br>";
$passwordP = hash('sha256', "Claudiopass6@");
var_dump($passwordP);echo "<br>";
?>
<!-- FAI HASH PASS -->
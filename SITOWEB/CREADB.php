<?php
    // Connessione al database

use LDAP\Result;

    $servername = "localhost"; // Nome del server (solitamente localhost)
    $username = "root"; // Nome utente del database
    $password = ""; // Password del database
    $dbname = "echoverse_db"; // Nome del database

    // Creazione della connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica della connessione
    if ($conn->connect_error) {
        die("Connessione al database fallita: " . $conn->connect_error);
    }

// 1, gabriele1, Gabrielespass@
// 2,samuele2,Samuelespass2@
// 3,salvatore3,Salvatorespass3@
// 4,simone4,Simonespass4@
// 5,elena5,Elenaspass5@

  // $users = [
  //     2 => ['username' => 'samuele2', 'password' => 'Samuelespass2@'],
  //     3 => ['username' => 'salvatore3', 'password' => 'Salvatorespass3@'],
  //     4 => ['username' => 'simone4', 'password' => 'Simonespass4@'],
  //     5 => ['username' => 'elena5', 'password' => 'Elenaspass5@'],
  //     6 => ['username' => 'claudio6', 'password' => 'Claudiospass6@'],
  // ];
  // foreach ($users as $key => $user) {
  //     $username = $user['username'];
  //     $password = $user['password'];
  
  //     // Escape the string values
  //     $username = $conn->real_escape_string($username);
  //     $password = $conn->real_escape_string($password);
  
  //     $sql = "INSERT INTO utenti(id, username, password) VALUES($key, '$username', '$password');";
  //     $result = $conn->query($sql);
  
  //     var_dump($result);
  // }

    // $artists = [
    //     1 => ['nome' => 'Beatles', 'immagine' => './fotoartisti/beatles.jpg'],
    //     2 => ['nome' => 'Clementino', 'immagine' => './fotoartisti/clementino.jpg'],
    //     3 => ['nome' => 'De André', 'immagine' => './fotoartisti/deandre.jpg'],
    //     4 => ['nome' => 'Dr. Dre', 'immagine' => './fotoartisti/drdre.jpg'],
    //     5 => ['nome' => 'Dua Lipa', 'immagine' => './fotoartisti/dualipa.jpg'],
    //     6 => ['nome' => 'Eminem', 'immagine' => './fotoartisti/eminem.jpg'],
    //     7 => ['nome' => 'Guns N Roses', 'immagine' => './fotoartisti/gunsnroses.jpg'],
    //     8 => ['nome' => 'Kanye West', 'immagine' => './fotoartisti/kanyewest.jpg'],
    //     9 => ['nome' => 'Marilyn Manson', 'immagine' => './fotoartisti/marilynmanson.jpg'],
    //     10 => ['nome' => 'Post Malone', 'immagine' => './fotoartisti/postmalone.jpg'],
    //     11 => ['nome' => 'Snoop Dogg', 'immagine' => './fotoartisti/snoopdogg.jpg'],	
    //     12 => ['nome' => 'Tedua', 'immagine' => './fotoartisti/tedua.jpg'],
    //     13 => ['nome' => 'Three Days Grace', 'immagine' => './fotoartisti/threedaysgrace.jpg'],
    //     14 => ['nome' => 'Lazza', 'immagine' => './fotoartisti/lazza.png'],
    //     15 => ['nome' => 'Gem¡ni', 'immagine' => './fotoartisti/gemini.jpg']
    // ];

    // foreach ($artists as $key => $artist) {
    //     $artist_name = $artist['nome'];
    //     $immagine = $artist['immagine'];
    
    //     // Escape the string values
    //     $username = $conn->real_escape_string($artist_name);
    //     $password = $conn->real_escape_string($immagine);
    
    //     $sql = "INSERT INTO artisti(id, nome, immagine) VALUES($key, '$artist_name', '$immagine');";
    //     $result = $conn->query($sql);
    
    //     var_dump($result);
    // }

        // foreach ($artists as $key => $artist) {

        // $sql = "SELECT immagine FROM artisti;";
        // $result = $conn->query($sql);

        // var_dump($result);

        // } 

    // Query per recuperare il record con id = 1
    $query = "SELECT * FROM artisti";
    $artists = $conn->query($query);
    // Verifica se il record è stato trovato

    foreach($artists as $a){
        if ($artists->num_rows > 0) {
            // Visualizza l'id, il nome e l'immagine del record
            $row = $artists->fetch_assoc();
            $id = $row["id"];
            $nome = $row["nome"];
            $immagine = $row["immagine"];
                echo $id;
                echo $nome;
                echo "<img src=$immagine>";
                
            } else {
                echo "Nessun record trovato.";
            }
        }


    

    // Chiusura della connessione
    $conn->close();
?>




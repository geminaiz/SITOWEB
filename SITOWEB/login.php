<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

    <!--STILE FORM CONTATTI -->
    <style> 
    .login-box {
    width: 300px;
    padding: 20px;
    background-color: #f9f2f9;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    animation: slide-in 0.5s forwards;
    margin: 0 auto;
  }

  .login-box h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #820786;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #820786;
  }

  .form-group input[type="text"],
  .form-group input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border-radius: 3px;
    border: 1px solid #e7d7e7;
    color: #131213;
  }

  .form-group button {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    color: #f9f2f9;
    background-color: #820786;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }

  .form-group button:hover {
    background-color: #67056f;
  }
  </style>
  <!--STILE FORM LOGIN -->

</head>
<body>
 <!-- MENU' IN ALTO-->
 <header class="header">
      <div class="header__content">
        <a class="header__logo" href="index.html">
          <h3><strong>EchoVerse Productions</strong></h3>
        </a>
        <ul class="header__menu">
          <li><a class='nav__button' href="chisiamo.html">Chi siamo</a></li>
          <li><a class='nav__button' href="artisti.html">Artisti</a></li>
          <li><a class='nav__button' href="rilasci.html">Rilasci</a></li>
          <li><a class='nav__button' href="contatti.html">Contatti</a></li>
        </ul>
        <div class="header__quick">
          <strong><a href="login.php">Login</a></strong>
          <div class="icon-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>
  <!-- MENU' IN ALTO-->


<!-- CONTENUTO PAGINA-->
<div class="cover" style="background-image:linear-gradient(to bottom, rgba(238, 49, 238, 0.39), rgba(0,0,0,0.6)), url('sfondisecondari/sfondosecondario2.jpg');">
    <div class="cover__content">
      <div class="section watch fade-in">
        <strong><h1 style="color:#e7d7e7">Area riservata</h1></strong> <br><br>
        <div class="container">
          <center>
          <div class="login-box">
            <h2>Accedi</h2>
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Inserisci il tuo username" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Inserisci la tua password" required>
              </div>
              <div class="form-group">
                <button type="submit">Accedi</button>
              </div>
            </form>
          </center>
          </div>
        </div>
    </div>
</div>
</div>     
 <!-- CONTENUTO PAGINA-->


 <?php
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $dbname = "echoverse_db"; 

  if($_SERVER['REQUEST_METHOD'] === 'POST') {  
          
     $conn = mysqli_connect($servername, $username, $password, $dbname);
  
      if(!$conn) {
        
        die("connection failed: ". mysqli_connect_error());
        
      }
        
        echo "connection succeded";
    
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
    
        $usernameP = $_POST['username'];
        $passwordP = $_POST['password'];
      
        $passwordP = hash('sha256', $passwordP);
    
        $sql = "SELECT username FROM utenti WHERE username = '$usernameP' AND password = '$passwordP'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) == 1) {
            // Login avvenuto con successo, stampa il record associato
            header("Location: areariservata.html");
        }
      }
  }      
?> 

<center>
      <!--FOOTER-->
    <div class="section watch fade-in">
      <footer class="footer">
        <div class="container">
          <p class="title">© 2023 EchoVerse Productions. Tutti i diritti sono riservati.</p>
          <ul>
            <li><a href="termini.html">Termini di servizio</a></li>
            <li><a href="privacy.html">Privacy Policy</a></li>
          </ul>
        </div>
      </footer>
    </div>
      <!--FOOTER-->
</center>

    
  <!--JAVASCRIPT = SCORRIMENTO PAGINE-->
  <script type="text/javascript" src="animazioni.js"></script>
  <!--JAVASCRIPT-->

</body>
</html>
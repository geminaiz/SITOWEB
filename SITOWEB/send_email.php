<!-- BISOGNA CONFIGURARE SMTP -->
<?php
ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 465);
ini_set('sendmail_path', ' "C:/xampp/sendmail/sendmail.exe" -t');
ini_set('mail.add_x_header', 'Off');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "ginuzzo7474@yopmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Thank you for your message!";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
<!-- BISOGNA CONFIGURARE SMTP -->
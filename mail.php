<?php
if(isset($_POST['nick']) && isset($_POST['total'])) {
    $to = "seninmailin@example.com"; // Mailin gideceği adres
    $subject = "Yeni Satın Alma - NamelesHd";
    $message = "Nick: " . $_POST['nick'] . "\nToplam: " . $_POST['total'] . "₺";
    $headers = "From: shop@nameleshd.com";

    if(mail($to, $subject, $message, $headers)) {
        echo "<h1>Satın alma bildirimi gönderildi!</h1><p><a href='store.html'>Mağazaya geri dön</a></p>";
    } else {
        echo "<h1>Mail gönderilemedi!</h1><p>Lütfen tekrar deneyin.</p>";
    }
} else {
    echo "<h1>Eksik veri!</h1>";
}
?>

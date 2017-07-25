<?php
session_start();
// Eger form doldurulmussa
if (isset($_POST['kod'])) {
    if (strtoupper($_POST['kod']) == $_SESSION['dogrulamakodu']) {
        echo '<h4>Tebrikler, Doğru kodu girdiniz: <code>' . $_POST['kod'] . '</code></h4>';
    } else {
        echo '<h4><code>' . $_POST['kod'] . '</code>Hatali giris, tekrar deneyiniz. ' . $_SESSION['dogrulamakodu'] . '</h4>';
    }
    echo '<a href="index.php"></a>';
} else {
    ?>
    <a href="index.php">Sadece post verileri ile calisan bir sayfadir. Giris sayfasina donebilirsiniz.?</a>
<?php
}
?>

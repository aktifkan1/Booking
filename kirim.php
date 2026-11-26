<?php
$token = "7369020772:AAHDY1cM6sIlsLZ7LfzJLnh0TQCJnWuvkpA";
$chat_id = "7431131436";

$nama = $_POST['nama'];
$tggl = $_POST['tggl'];
$jam = $_POST['jam'];
$durasi = $_POST['durasi'];
$lapangan = $_POST['lapangan'];

$pesan = "✅ BOOKING BARU MASUK!\n\n";
$pesan .= "➡️ Nama = $nama\n";
$pesan .= "➡️ Tggl = $tggl\n";
$pesan .= "➡️ Mulai main/sampai jam = $jam\n";
$pesan .= "➡️ Main berapa jam = $durasi\n";
$pesan .= "➡️ Booking berapa lapangan = $lapangan";

$pesan = urlencode($pesan);
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$pesan";

file_get_contents($url);

echo "<script>alert('Booking berhasil dikirim!'); history.back();</script>";
?>

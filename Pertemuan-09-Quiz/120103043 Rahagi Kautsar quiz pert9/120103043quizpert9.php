<?php
print ("============================= <br>");

echo "NIM = 120103043 <br>";
echo "Nama pegawai = Rahagi Kautsar <br>";

print ("============================= <br>");

$Gaji_pokok = 2000000;
$Bonus = 500000;
$Tunjangan = $Gaji_pokok * 5/100;
$Pajak = $Gaji_pokok * 10/100;

echo "Gaji pokok = Rp. $Gaji_pokok <br>";
echo "Bonus = Rp. $Bonus <br>";
echo "Tunjangan = Rp. $Tunjangan <br>";
echo "Pajak = Rp. $Pajak <br>";

print ("============================= <br>");
$total_gaji_bayar = $Gaji_pokok + $Bonus + $Tunjangan - $Pajak;
echo "Gaji yang harus dibayarkan = Rp. $total_gaji_bayar <br>";
?>
<?php
echo "<h1>12. Asosiative Array</h1>";

$data = [
    'nama' => 'ahmad',
    'umur' => 22,
    'kerja' => 'programmer'
];

print_r($data);
$data['nama'] = 'Ahmad Mubarok';

echo "<br>";
echo "<br>";
echo "Nama saya adalah ".$data['nama']."<br>";
echo "Umur saya ".$data['umur']."<br>";
echo "Pekerjaan saya adalah ".$data['kerja']."<br>";

echo "<br/>";
echo "<br/>";

echo "<a href='/belajar_php_pemula'>Kembali</a>";
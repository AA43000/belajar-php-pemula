<?php
echo "<h1>14. Multi Dimensi Array</h1>";

$data = [
    ['ahmad', '21', 'programmer'],
    ['mubarok', '22', 'designer'],
    ['zaeni', '20', 'eksekutor'],
];

print_r($data);
echo "<br>";
echo 'Nama: '.$data[0][0].' & '.$data[1][0].' & '.$data[2][0];
echo "<br/>";
echo "<br/>";

echo "<a href='/belajar_php_pemula'>Kembali</a>";
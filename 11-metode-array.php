<?php
echo "<h1>11. Metode Array</h1>";

$array = array('Anjing', 'Kucing', 'Kambing', 'Sapi', 'Kerbau', 'Anjing');

echo "<p>Data array: <br></p>";
print_r($array);

echo "<p>Data array_unique: menampilkan data tanpa double <br></p>";
print_r(array_unique($array));

echo "<p>Data array_reverse: menampilkan data dengan urutan terbalik <br></p>";
print_r(array_reverse($array));

echo "<p>Data shuffle: mengacak urutan dalam array <br></p>";
shuffle($array);
print_r($array);

echo "<p>Data count: menampilkan total data dalam array <br></p>";
echo count($array);

echo "<p>Data sort: menurutkan data array <br></p>";
sort($array);
print_r($array);


echo "<br/>";
echo "<br/>";

echo "<a href='/belajar_php_pemula'>Kembali</a>";
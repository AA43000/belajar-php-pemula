<?php
echo "<h1>13. Metode Asosiative Array</h1>";

$data = [
    'nama' => 'ahmad',
    'umur' => 22,
    'kerja' => 'programmer'
];

$data2 = [
    'laptop' => 'lenovo',
    'hp'=> 'samsung'
];

echo "<p>Data array: </p>";
print_r($data);

echo "<p>Data array_values: </p>";
print_r(array_values($data));

echo "<p>Data array_keys: </p>";
print_r(array_keys($data));

echo "<p>Data array_merge: </p>";
print_r($data2);
echo "<br>";
print_r(array_merge($data, $data2));

echo "<br/>";
echo "<br/>";

echo "<a href='/belajar_php_pemula'>Kembali</a>";
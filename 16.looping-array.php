<?php
echo "<h1>16. Looping Array</h1>";

$data = ['lenovo', 'thinkpad', 'hp', 'samsung', 'xiomi', 'acer'];

echo "<p>Beberapa data random</p>";
for($x=0;$x<count($data);$x++) {
    echo $data[$x]."<br>";
}

echo "<br/>";
echo "<br/>";

echo "<a href='/belajar_php_pemula'>Kembali</a>";
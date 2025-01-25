<?php
echo "<h1>8. Method Match</h1>";

$text = "Lorem ipsum dolor";

echo "<p>Text: '$text'</p>";

echo "<ul>";
echo "<li>strlen contoh: ".strlen($text)."</li>";
echo "<li>str_word_count contoh: ".str_word_count($text)."</li>";
echo "<li>str_replace contoh: ".str_replace('Lorem', 'Hello', $text)."</li>";
echo "<li>str_repeat contoh: ".str_repeat($text." ", 3)."</li>";
echo "</ul>";

echo "<br/>";
echo "<br/>";

echo "<a href='/belajar_php_pemula'>Kembali</a>";
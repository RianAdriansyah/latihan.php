<?php
$text = "The quick brown jumped over the lazy dog.";
$newtext = wordwrap($text, 15, "<br>");

echo $text. "<br>";
echo $newtext;
?>
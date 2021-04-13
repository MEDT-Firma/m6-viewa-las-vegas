<?php

// namespace Htlw3r\m6-viewa-las-vegas;

require_once './vendor/autoload.php';
require_once "Hotel.php";

// Liste der Hotels kommt aus PHP
$hotels = Hotel::getDemoData();


// 1. Einlesen des HTLM Files
$htmlresponse = readTemplateFile('./Templates/hotels.html');

// 2. Platzhalter ersetzen
foreach ($hotels as $key => $hotel) {
    $htmlresponse = str_replace($key, $hotel, $htmlresponse);

}

// 3. HTML ausgeben
echo $htmlresponse;


function readTemplateFile(string $path): string
{
    $handle = fopen($path, "r");
    $contents = fread($handle, filesize($path));
    fclose($handle);
    return $contents;
}

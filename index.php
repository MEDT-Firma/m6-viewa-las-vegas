<?php

// namespace Htlw3r\m6-viewa-las-vegas;

// initiate TWIG
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './compilation_cache',
]);


require_once './vendor/autoload.php';

// Liste der Hotels kommt aus PHP
$hotels = array(
    new hotel("Hotel Bellagio"),
    new hotel("Hotel Paris"),
    new hotel("Hotel Circa"),
);

echo $twig->render(
    'hotels.html',
    ['hotels' => $hotels]
);

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

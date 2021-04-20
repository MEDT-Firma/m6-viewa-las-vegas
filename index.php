<?php

// namespace Htlw3r\m6-viewa-las-vegas;

require_once './vendor/autoload.php';
require_once "Hotel.php";

// Liste der Hotels kommt aus PHP
$hotels = Hotel::getDemoData();


// 1. Einlesen des HTLM Files
$htmlresponse = readTemplateFile('./Templates/hotels.html');

// 2. Platzhalter ersetzen

$hotels = array("###Hotel1###" => "Hotel Bellagio",
                "###sterne1###" => "★★★★★",
                "###infos1###" => "5 Sterne (★★★★★)",
                "###infos2###" => "ab 205€ pro Nacht",
                "###infos3###" => "Kostenloses WLAN",
                "###contact_address1###" => "3600 S Las Vegas Blvd, Las Vegas, NV 89109,Vereinigte Staaten",
                "###phone1###" => "+1 888-987-6667",
                "###contact_opening_hours1###" => "Rund um die Uhr geöffnet",
                "###Hotel2###" => "Hotel Paris",
                "###sterne2###" => "★★★★",
                "###infos4###" => "4 Sterne (★★★★)",
                "###infos5###" => "ab 80€ pro Nacht",
                "###infos6###" => "Kostenloses WLAN",
                "###contact_address2###" => "3655 S Las Vegas Blvd, Las Vegas, NV 89109,Vereinigte Staaten",
                "###phone2###" => " +1 877-796-2096",
                "###contact_opening_hours2###" => "Rund um die Uhr geöffnet",
                "###Hotel3###" => "Hotel Circa",
                "###sterne3###" => "★★★★★",
                "###infos7###" => "5 Sterne (★★★★★)",
                "###infos8###" => "ab 140€ pro Nacht",
                "###infos9###" => "Kostenloses WLAN",
                "###contact_address3###" => "8 Fremont Street Experience, Las Vegas, NV 89101, Vereinigte Staaten",
                "###phone3###" => "+1 702-247-2258",
                "###contact_opening_hours3###" => "Rund um die Uhr geöffnet",
    );

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

<?php

require_once './vendor/autoload.php';
require_once "Hotel.php";

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplateRootPaths([
    './templates/'
]);

$hotels = Hotel::getDemoData();

$view->assignMultiple([
    'hotels' => $hotels
]);

$paths->setTemplatePathAndFilename('templates/hotels.fluid.html');
$output = $view->render();

echo $output;
<?php

require_once './vendor/autoload.php';
require_once "Hotel.php";

$paths = new \TYPO3Fluid\Fluid\View\TemplatePaths("./templates/hotels.fluid.html");
$paths->setTemplateRootPaths(array('/path/to/templates/'));
$paths->setLayoutRootPaths(array('/path/to/layouts/'));
$paths->setPartialRootPaths(array('/path/to/partials/'));
// pass the constructed TemplatePaths instance to the View
$view = new \TYPO3Fluid\Fluid\View\TemplateView($paths);
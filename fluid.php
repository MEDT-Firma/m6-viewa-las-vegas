<?php

require_once './vendor/autoload.php';
require_once "Hotel.php";

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplateRootPaths([
    './templates/'
]);
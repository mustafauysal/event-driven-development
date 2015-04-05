<?php
require_once "vendor/autoload.php";

$observer = new \Acme\Observer();
$dispatcher = $observer->registerEvents();
$olay = new \Acme\Olay();
$dispatcher->dispatch( 'event.firlattim' ,$olay->setOlay(array("hede" => "hode")) );
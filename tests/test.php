<?php

use Augustowebd\Pharlab\Hello;

require dirname(__DIR__) . '/vendor/autoload.php';


$speaker = new Hello();
$speaker->say();

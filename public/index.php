<?php

chdir(dirname(__DIR__));

require "vendor/autoload.php";

$app = new Solsken\Application(Solsken\Util::fileMerge('config'));
$app->run();

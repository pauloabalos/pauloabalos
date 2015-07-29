<?php
// PHP runtime configuration.
ini_set('date.timezone', 'America/Los_Angeles');
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$time_start = microtime(true);

// Application essential paths
define('PATH_ROOT', dirname(__DIR__));
define('PATH_MODULE', PATH_ROOT . '/module');
define('PATH_VIEW', PATH_ROOT . '/view/default');

// Autoload
$loader = require PATH_ROOT . '/vendor/autoload.php';
$loader->add('', PATH_MODULE);

// Application bootstrap
$app = new \Questwork\App(require PATH_ROOT . '/config/route.php');
//$app->setDatabaseConfig(require PATH_ROOT . '/config/database.php');

// Application execute
try {
    echo $app->execute($loader);
} catch (Exception $error) {
    $app->end($error->getMessage());
}
finally {
    $execution_time = round(microtime(true) - $time_start, 3);
    echo "\n<!-- Execution Time: $execution_time ms -->";
}



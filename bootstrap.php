<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("models/Entities");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_sqlite',
    'path' => 'database/database.sqlite',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

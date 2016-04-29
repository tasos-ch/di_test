<?php

use pi\ControllerA;
use pi\ControllerB;
use pi\DatabaseConnectionInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

require_once '../vendor/autoload.php';


$dic = new ContainerBuilder();
$diConfLoader = new YamlFileLoader($dic, new FileLocator('../'));
$diConfLoader->load('di.yml');

/** @var DatabaseConnectionInterface $dbConnection */
$dbConnection = $dic->get('db_connection');
/** @var LoggerInterface $logger */
$logger = $dic->get('logger');

$a = new ControllerA($dbConnection);
$a->setLogger($logger);
$b = new ControllerB($dbConnection);

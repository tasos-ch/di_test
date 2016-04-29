<?php

use pi\ControllerA;
use pi\ControllerB;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

require_once '../vendor/autoload.php';


$dic = new ContainerBuilder();
$diConfLoader = new YamlFileLoader($dic, new FileLocator('../'));
$diConfLoader->load('di.yml');


/** @var \pi\ControllerAggregateServiceInterface $aggregateService */
$aggregateService = $dic->get('controller_aggregate');

$a = new ControllerA($aggregateService);
$b = new ControllerB($aggregateService);

<?php

require_once __DIR__.'../../vendor/autoload.php';
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Gabriel\BackEscolaOnlineTi\Infraestrutura\ConfigDoctrine\EntityManegerFactory;

// replace with mechanism to retrieve EntityManager in your app
$entityMangerFactory = new EntityManegerFactory();
$entityManager = $entityMangerFactory->getEnityManagerFactory();

return ConsoleRunner::createHelperSet($entityManager);
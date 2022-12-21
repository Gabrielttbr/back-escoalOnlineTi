<?php
namespace Gabriel\BackEscolaOnlineTi\Infraestrutura\ConfigDoctrine;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use  Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__.'/../../../');
$dotenv->load();

class EntityManegerFactory{
    public static function getEnityManagerFactory(){
        $rootDir = __DIR__."/../../";
        $config = ORMSetup::createAnnotationMetadataConfiguration(
            paths: array($rootDir."Dominio/Models/"),
            isDevMode: true
        );
        $conn = array(
            'dbname'=>getenv('db_name'),
            "user" => getenv('db_user'),
            "password" => getenv('db_password'),
            "host" => getenv('db_host'),
            "driver" => "pdo_mysql",
            "port" => getenv('db_port')
        );
        return EntityManager::create($conn, $config);
    }
}
<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php';

$config = parse_ini_file(__DIR__ . '/../../config/config.ini', true);
$appDir = __DIR__ . '/../../';
$config['general']['appDir'] = $appDir;
$pimple = new Rueckgrat\DependencyInjectionContainer($config);
$em = $pimple['entityManager'];

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));
//$helperSet = ($helperSet) ?: new \Symfony\Component\Console\Helper\HelperSet();
\Doctrine\ORM\Tools\Console\ConsoleRunner::run($helperSet);
//$cli = new \Symfony\Component\Console\Application('Doctrine Command Line Interface', Doctrine\DBAL\Version::VERSION);
//$cli->setCatchExceptions(true);
//$cli->setHelperSet($helperSet);
//$cli->addCommands(array(
//    new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(),
//    new \Doctrine\DBAL\Tools\Console\Command\ImportCommand(),
//
//));
//$cli->run();
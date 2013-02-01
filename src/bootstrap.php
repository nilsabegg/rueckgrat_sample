<?php
require_once __DIR__ . '/../config/routing.php';
require_once __DIR__ . '/../vendor/autoload.php';
session_start();
session_set_cookie_params(60*60*24*30);
$config = parse_ini_file(__DIR__ . '/../config/config.ini', true);
$appDir = __DIR__ . '/../';
$config['general']['appDir'] = $appDir;
$pimple = new Rueckgrat\DependencyInjectionContainer($config);
$bootloader = new Rueckgrat\Bootloader($pimple);
$bootloader->route();
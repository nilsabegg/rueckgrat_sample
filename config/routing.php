<?php

$routing = array(
	'/admin\/(.*?)\/(.*?)\/(.*)/' => 'admin/\1_\2/\3'
);

$default['controller'] = 'Index';
$default['action'] = 'index';
$_SERVER['SERVER_NAME'] = 'localhost/rueckgrat_sample';
<?php
require_once "config/autoload_link.php";
use src\controller\RolesController;
$roleDao = new RolesController();
//echo $roleDao->add();
echo $roleDao->getAll();
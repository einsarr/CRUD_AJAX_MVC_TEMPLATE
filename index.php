<?php
require_once "config/autoload_link.php";

$roleDao = new RolesController();
echo $roleDao->add();
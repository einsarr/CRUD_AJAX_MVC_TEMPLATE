<?php

use libs\system\BootStrap;

require_once "config/autoload_link.php";
//use src\controller\RolesController;
//$roleDao = new RolesController();
//echo $roleDao->add();
//echo $roleDao->getAll();

$mvc = new BootStrap();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <a href="http://localhost:8080/mesprojets/orm/Roles/getAll">Lister</a>
        <a href="http://localhost:8080/mesprojets/orm/Roles/add">Add</a>
    </body>
</html>
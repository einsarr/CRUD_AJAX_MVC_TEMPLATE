<?php
namespace libs\system;
class BootStrap
{
    public function __construct()
    {
        if(isset($_GET["url"]))
        {
            $url = explode("/",$_GET["url"]);

            $controller_file = "src/controller/".$url[0]."Controller.php";
            if(file_exists($controller_file))
            {
                require_once $controller_file;
                $file = $url[0]."Controller";
                $controller_object = new $file();
            }else{
                die($controller_file." n'existe pas");
            }
        }else{
            echo "MVC";
        }
    }
}
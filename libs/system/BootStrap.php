<?php
namespace libs\system;
class BootStrap
{
    public function __construct()
    {
        if(isset($_GET["url"]))
        {
            echo $_GET["url"];
        }else{
            echo "MVC";
        }
    }
}
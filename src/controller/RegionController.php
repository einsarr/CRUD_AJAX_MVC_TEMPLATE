<?php
use libs\system\Controller;
use src\model\RegionDb;

class RegionController extends Controller
{
    public function login()
    {
        return $this->view->load("login/login");
    }
    public function index()
    {
        $region = new RegionDb();
        $regions = $region->findAll();
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("regions/lister");
        $footer = $this->view->load("assets/footer");
        $tab = array($header,$side,$top,$reg,$footer,$regions);
        return $tab;
    }
    public function add()
    {
        $region = new RegionDb();
        $regions = $region->findAll();
        
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("regions/add");
        $footer = $this->view->load("assets/footer");
        $tab = array($header,$side,$top,$reg,$footer,$regions);
        return $tab;
    }
    public function save()
    {
        $nomR = $_POST["nomR"];
        $region = new RegionDb();
        $data="";
        if($region->add($nomR)){
            echo "Ajout réussie avec succès";
        }else{
           echo "Erreur d'ajout";
        }
    }
    public function getAll()
    {
        $region = new RegionDb();
        $regions = $region->findAll();
        return $this->view->load("regions/add",$regions);
    }
    public function delete($id)
    {
        echo $id; 
    }
    public function edit($id)
    {
        echo $id; 
    }
    public function update()
    {
        $nom = $_POST["nom"];
        
        return $this->view->load("roles/getAll");
    }
}


?>
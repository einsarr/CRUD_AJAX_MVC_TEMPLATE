<?php
use libs\system\Controller;
use src\model\RegionDb;

class RegionController extends Controller
{
    public function login()
    {
        return $this->view->load("roles/login");
    }
    public function index()
    {
        $header = $this->view->load("public/template/assets/header");
        $side = $this->view->load("public/template/assets/sideBar");
        $top = $this->view->load("public/template/assets/topBar");
        $reg = $this->view->load("regions/lister");
        $footer = $this->view->load("public/template/assets/footer");
        $tab = array($header,$side,$top,$reg,$footer);
        return $tab;
    }
    public function add()
    {
        $header = $this->view->load("public/template/assets/header");
        $side = $this->view->load("public/template/assets/sideBar");
        $top = $this->view->load("public/template/assets/topBar");
        $reg = $this->view->load("regions/add");
        $footer = $this->view->load("public/template/assets/footer");
        $tab = array($header,$side,$top,$reg,$footer);
        return $tab;
    }
    public function save()
    {
        $nom = $_POST["nom"];
        $role = new RegionDb();
        $data="";
        if($role->add($nom)){
            $data = "Ajout réussie avec succès";
        }else{
            $data = "Erreur d'ajout";
        }
        return $this->view->load("roles/add",$data);
    }
    public function getAll()
    {
        $role = new RegionDb();
        $roles = $role->findAll();//array("ROLE_USER","ROLE_ADMIN");
        return $this->view->load("roles/getAll",$roles);
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
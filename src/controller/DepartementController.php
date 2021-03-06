<?php
use libs\system\Controller;
use src\model\DepartementDb;

class DepartementController extends Controller
{
    public function login()
    {
        return $this->view->load("roles/login");
    }
    public function index()
    {
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("departements/lister");
        $footer = $this->view->load("assets/footer");
        $tab = array($header,$side,$top,$reg,$footer);
        return $tab;
    }
    public function add()
    {
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("departements/add");
        $footer = $this->view->load("assets/footer");
        $tab = array($header,$side,$top,$reg,$footer);
        return $tab;
    }
    public function save()
    {
        $nom = $_POST["nom"];
        $role = new DepartementDb();
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
        $role = new DepartementDb();
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
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
        return $this->view->load("roles/pageTest");
    }
    public function add()
    {
        return $this->view->load("roles/add");
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
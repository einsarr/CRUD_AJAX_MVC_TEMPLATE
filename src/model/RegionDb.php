<?php
namespace src\model;
use libs\system\Model;
class RegionDb extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM Roles r")
                    ->getResult(); 
    }
    public function add($nomR)
    {
        $region = new \Region();
        $region->setNomR($nomR);
        $this->entityManager->persist($region);
        $this->entityManager->flush();
        return  $region->getIdR();
    }
}
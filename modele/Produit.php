<?php 
class Produit{
    private int $id;
    private string $libelle;
    private int $qteStock;
    private int $prix;

    public function getId(){
        return $this->id;
    }
    public function getLibelle(){
        return $this->libelle;
    }
    public function getQteStock(){
        return $this->qteStock;
    }
    public function getPrix(){
        return $this->prix;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function setLibelle($libelle){
        $this->libelle=$libelle;
    }
    public function setQteStock($qteStock){
        $this->qteStock=$qteStock;
    }
    public function setPrix($prix){
        $this->prix=$prix;
    }
}
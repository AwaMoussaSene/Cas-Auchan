<?php 
class Personne{
    protected int $id;
    protected string $nom;
    protected string $prenom;

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function setPrenom($prenom){
        $this->nom=$prenom;
    }
}
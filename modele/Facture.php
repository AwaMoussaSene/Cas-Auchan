<?php 
class Facture{
    private int $id;
    private int $date;
    private int $numero;
    private int $montant;

    public function getId(){
        return $this->id;
    }
    public function getDate(){
        return $this->date;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getMontant(){
        return $this->montant;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setDate($date){
        $this->date=$date;
    }
    public function setNumero($numero){
        $this->numero=$numero;
    }
    public function setMontant($montant){
        $this->montant=$montant;
    }
}
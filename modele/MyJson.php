<?php 


class MyJson{
    private string $fileName="Date/data.json";
    public function toArray($key=null){
        $json=file_get_contents($this->fileName);
       $dec=json_decode($json,true);
       return $key==null?$dec:$dec[$key];
    }
    
    
    function arraytojson(array $newdemande,string $key){
        $dec=$this->toArray();
        $dec[$key][]=$newdemande;
        $json=json_encode($dec);
        file_put_contents($this->fileName,$json);
    }
}
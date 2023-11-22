<?php

namespace macan;

trait suara {
    public function bunyi(){
        return "Rawr";
    }
}

abstract class makanan {
    abstract public function makan();
}

class macan extends makanan{
    use suara; 

    protected $nama;//atribut
    protected $kelamin;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setKelamin($kelamin){
        $this->kelamin = $kelamin;
    }

    public function getKelamin(){
        return $this->kelamin;
    }

    public function makan(){
        return "Daging";
    }
    
}

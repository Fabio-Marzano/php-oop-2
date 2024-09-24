
<?php

    // RICHIAMO LA CLASSE PADRE//
    require_once __DIR__ . '/products.php';

    class accessories extends products {
        public $type;
        

        //ATTIVO LA FUNZIONE//
        public function setType($type){
            $this->type = $type;
        }
        
        //SCONTI DEL 20%//
        public function setPrice($price)
        {
            if($this->id >= 200 && $this->id <= 300){
                $this->price = floor($price + ($price *22) / 100) - (($price * 20) / 100) - ($price * ($this->discount / 100));
            } else{
                $this->price = floor($price + (($price *22) / 100) - ($price * $this->discount / 100));
            }
        }
    }


?>
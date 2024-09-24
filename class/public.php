
<?php

    // RICHIAMO LA CLASSE PADRE//
    require_once __DIR__ . '/products.php';

    class health extends products {
        public $type;
        protected $subType;
        protected $availability;

        
        public function setSubType($subType){
            $this->subType = $subType;
        }


        
        public function setType($type){
            $this->type = $type;
        }
        
        //ATTIVO FUNZIONE PER DISPONIBILITA' PRODOTTI//
        public function setAvailability(){
            
            if($this->subType === 'antipulci' && date("m.d.y") == "03.16.22" ){
                $this->availability = false;
            } elseif ( $this->subType === 'antizecche' && date("m.d.y") == "06.16.22"){
                $this->availability= false;
            } else {
                $this->availability = true;
            }
        }
    }


?>
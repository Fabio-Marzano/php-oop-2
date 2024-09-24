
<?php

    // RICHIAMO CLASSE PADRE//
    require_once __DIR__ . '/products.php';

    class food extends products {
        public $type;
        protected $ingredients;

        
        public function setType($type){
            $this->type = $type;
        }
        
        //ATTIVO LA FUNZIONE PER GENERARE GLI INGREDIENTI//
        public function setIngredients(...$ingredients){
            $this->ingredients=$ingredients;
        }
    }


?>
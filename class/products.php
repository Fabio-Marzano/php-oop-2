<?php

    require_once __DIR__ . '/user.php';
    class products extends user {

        //VARIABILI//
        public $name;
        public $id;
        protected $price;

        // ATTIVO LA FUNZIONE DEL PRODOTTO//
        public function __construct($username, $mail, $name, $id)
        {
            parent::__construct($username, $mail);

            $this->name = $name;
            // ID > DI 0//
            if(is_numeric($id) && $id > 0){
                $this->id = $id;
            } else{
                $this->id = '<em> Id sconosciuto </em>';
            }
        }

        // ATTIVO FUNZIONE SET PER L'IVA//
        public function getPrice($price){
            
            $this->price = floor($price + (($price *22) / 100) - ($price * $this->discount / 100));
        }


    }



?>
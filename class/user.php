<?php

    class user {

        public $username;
        protected $mail;
        protected $discount=0;
        private $users = ['gino@gmail.com', 'pino@gmail.com', 'dino@gmail.com'];
        protected $cardNumber;
        protected $cardExpiration;
        protected $cardValid;

        public function __construct($username, $mail)
        {
            $this->username = $username;

            if(stripos($mail, '@') == true && strpos($mail, '.') == true){
                $this->mail = $mail;
            } else {
                $this->mail = 'Mail non fornita!';
            }
          

            if(in_array($mail, $this->users)){
                $this->discount = 20;
            }

        }

        public function setCardNumber(){

            $cardNumber='';

            for ($i=0; $i < 15 ; $i++) { 
                $cardNumber .= rand(0,9);
            }

            $this->cardNumber = $cardNumber;
        }

        public function getCardExpiration(){
            

            $fMin = strtotime('01-01-2022');
            $fMax = strtotime('01-01-2032');

            $fVal = mt_rand($fMin, $fMax);

            $cardExpiration = date('d-m-Y', $fVal);

            
            $this->cardExpiration = $cardExpiration;
            
        }

        public function getCardValid(){

            $today = date('d.m.y');
            $todayInt = strtotime($today);

            $cardExpirationInt = strtotime($this->cardExpiration);

            if($cardExpirationInt < $todayInt){
                $this->cardValid = false;
            } else {
                $this->getCardValid = true;
            }
        }
    }

?>
<?php
/*
* Class Rooter
*
*create roads and find controler
*/
Class Rooter {
    private $request;

    public function __construct($request) {
        $this->request = $request;
    }
    public function renderControler() {
        if ($this->request == 'home') {
            include (CONTROLER.'home.php');
        }
        
        else if ($this->request == 'chapitres') {
            include (CONTROLER.'controlChapitre.php');
        }
        
        else if ($this->request == 'contact') {
            include (CONTROLER.'controlContact.php');
        }
        
        else if ($this->request == 'inscription') {
            include (CONTROLER.'controlInsc.php');
        }
        
         else if ($this->request == 'connection') {
            include (CONTROLER.'controlConnec.php');
        }
        
         else {
            echo 'OOOoooohh petite erreur 404';
        }
    }
}
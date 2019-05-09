<?php

/*
* Class Rooter
*
*create roads and find controler
*/
Class Rooter {
    
    public $request;

    public function __construct($request) {
        $this->request = $request;
    }
    public function renderControler() {

        if ($this->request == 'home') {
            include (CONTROLER.'home.php');
        }
        
        else if ($this->request == 'chapters') {
            include (CONTROLER.'controlChapitre.php');
        }
        
        else if ($this->request == 'contact') {
            include (VIEW.'viewContact.php');
        }

        else if ($this->request == 'envoi') {
            include (CONTROLER.'controlMail.php');
        }
        
         else if ($this->request == 'connection') {
            include (CONTROLER.'controlConnec.php');
        }

        else if ($this->request == 'deconnexion') {
            include (CONTROLER.'deconnexion.php');
        }

         else if ($this->request == 'edition') {
             include (CONTROLER.'editChapitres.php');
         }

         else if ($this->request == 'changer_identifiants') {
            include (CONTROLER.'changePseudoPass.php');
        }

        else if ($this->request == 'change_pseudo') {
            include (CONTROLER.'change_pseudo.php');
        }
         
        else if ($this->request == 'change_pass') {
            include (CONTROLER.'change_pass.php');
        }

        else if ($this->request == 'saveChapter') {
            include (CONTROLER.'saveChapter.php');
        }

        else if ($this->request == 'chapter') {
            include (CONTROLER.'controlchapters.php');
        }
        
        else if ($this->request == 'controlcomments') {
            include (CONTROLER.'controlcomments.php');
        }
        else if ($this->request == 'majChapter') {
            include (CONTROLER.'majChapter.php');
        }
         else {
            echo '<p class="erreur">OOOoooohh grosse erreur 404</p>';
        }
        
    }
}
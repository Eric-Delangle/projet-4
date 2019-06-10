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
            include (CONTROLLER.'home.php');
        }
        if ($this->request == 'chapters') {
            include (CONTROLLER.'frontend.php');
            showAllChap();
        }
        else if ($this->request == 'chapter') {
            include (CONTROLLER.'frontend.php');
            showOneChap();
        }
        else if ($this->request == 'commentaire') {
            include (CONTROLLER.'frontend.php');
            creatCom($_GET['id']);
        }
        else if ($this->request == 'signal') {
            include (CONTROLLER.'backend.php');
            signal();
        }
        else if ($this->request == 'edition') {
            include (CONTROLLER.'backend.php');
            sidejaco();
           // listChapForModif();
            //affichSign();
        }
        else if ($this->request == 'deco') {
            include (CONTROLLER.'backend.php');
            deco();
        }
        else if ($this->request == 'saveChapter') {
            include (CONTROLLER.'backend.php');
            creatChap();
        }
        else if ($this->request == 'modifier') {
            include (CONTROLLER.'backend.php');
            modifChap();
        }
        else if ($this->request == 'retablir') {
            include (CONTROLLER.'backend.php');
            unSignCom();
        }
        else if ($this->request == 'supprimer') {
            include (CONTROLLER.'backend.php');
            supCom();
        }
        else if ($this->request == 'majChapter') {
            include (CONTROLLER.'backend.php');
            updateChap($id);
        }
        else {
            echo '<p class="erreur">OOOoooohh grosse erreur 404</p>';
        }
        
    }
}
        /*
        else if ($this->request == 'contact') {
            include (VIEW.'viewContact.php');
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

        else if ($this->request == 'modifcom') {
            include (CONTROLER.'modifcom.php');
        }
       
        else if ($this->request == 'mail') {
            include (CONTROLER.'controlMail.php');
        }

        else if ($this->request == 'signal') {
            include (CONTROLER.'signaler.php');
        }
        */
 
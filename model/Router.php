<?php

/*
* Class Router
*
*create roads and find controler
*/
Class Router
{
    
    public $request;

    public function __construct($request) {
        $this->request = $request;
    }
    
    public function renderControler() {

        try { 
            if ($this->request == '') {
                include (CONTROLLER.'home.php');
            }
            else if ($this->request == 'home') {
                include (CONTROLLER.'home.php');
            }
            else if ($this->request == 'chapters') {
                include (CONTROLLER.'frontend.php');
                showAllChap();
            }
            else if ($this->request == 'chapter') {
                include (CONTROLLER.'frontend.php');
                showOneChap();
            }
            else if ($this->request == 'commentaire') {
                include (CONTROLLER.'frontend.php');
                creatCom($_GET['number']);
            }
            else if ($this->request == 'signal') {
                include (CONTROLLER.'frontend.php');
                signal();
            }
            else if ($this->request == 'edition') {
                include (CONTROLLER.'backend.php');
                sidejaco();
            }
            else if ($this->request == 'deco') {
                include (CONTROLLER.'backend.php');
                deco();
            }
            else if ($this->request == 'saveChapter') {
                include (CONTROLLER.'backend.php');
                creatChap();
            }
            else if ($this->request == 'supChap') {
                include (CONTROLLER.'backend.php');
                supChap();
            }
            else if ($this->request == 'retablir') {
                include (CONTROLLER.'backend.php');
                unSignCom();
            }
            else if ($this->request == 'supprimer') {
                include (CONTROLLER.'backend.php');
                supCom();
            }
            else if ($this->request == 'modifier') {
                include (CONTROLLER.'backend.php');
                modifChap($chapter_number);
            }
            else if ($this->request == 'majChapter') {
                include (CONTROLLER.'backend.php');
                updateChap($_GET['number']);
            }
        }

        catch (Exception $e) {
            echo $e;
        }
    }
}       
 
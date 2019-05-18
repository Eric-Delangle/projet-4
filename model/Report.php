<?php
namespace projet4;

class Report 
{
    
    public function signalCom($id) {
        if(isset($_GET['Signaler'])) { 
        $db = new \projet4\DataBase('comments');
        $req = $db->prepare("UPDATE comments SET signalement = 1 WHERE id_chap = '".$_GET[id]."'", (array('signalement' => true)), 'comments', true);
        
            echo 'Ce commentaire a bien été signalé';
        }
           else {
           
               echo 'Ce commentaire n\'a pas été signalé !';
           }
    }
}
  

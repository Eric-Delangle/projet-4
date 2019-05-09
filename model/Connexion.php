<?php
namespace projet4;
require_once (MODEL.'DataBase.php');
//require_once (CONTROLER.'editChapitres.php');
require_once (CONTROLER.'controlConnec.php');

$admin = new \projet4\Connexion($datas);
$admin->connecMembre('pseudo', 'pass');
var_dump($admin);

class Connexion {

    public $datas;
    public $db;

    public function __construct() {
       $this->datas = $datas;
       $this->db = $db;

    }

    public function connecMembre($datas){
        
        if(isset($_POST['pseudo']) && isset($_POST['pass'])) {

            $db = new \projet4\DataBase('membres');
            $db->query('SELECT id,pass,pseudo FROM membres');
        // lignes qui me pose problème
        var_dump($admin);
            $db->$req->fetch();
            $isPasswordCorrect = password_verify($_POST['pass'], $admin->pass);

//var_dump($isPasswordCorrect);
//var_dump($db);
//var_dump($admin);

                if ($isPasswordCorrect) {

                    
                    session_start();
                    $_SESSION['pseudo']=$_POST['pseudo'];
                    $_SESSION['pass']=$_POST['pass'];
                    header('location: edition');
                }
        
            }
        else {

            echo 'On refait !';
           // var_dump($datas);
          //  var_dump($isPasswordCorrect);
           // var_dump($pass);
            }
        
    }
}

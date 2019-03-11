<?php
class FormInscConnec
{
    private $data;
    public $paragraph = 'p';

    public function __construct($data){
        $this->$data = $data;
    }
// pour englober mes inputs dans des paragraphes
    private function paragraph ($html) {
        return "<{$this->paragraph}>{$html}</{$this->paragraph}>";
    }
// je crée maon premier input
    public function input($name) {
        return $this->paragraph('<input type="text" name="'.$name.'">');
    }
// fonction ajout d'un membre
    public function inscMembre($data){
        $_memmbre = new pushMembre($data);
    }
// fonction connection d'un membre
    public function connecMembre($data){
        if (isset($_POST['pseudo']) AND isset($_POST['pass']))
        {// Recupération des données
        $req=$bdd->prepare('SELECT id,pass FROM membres WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $_POST['pseudo']));
        $membre = $req->fetch();
        $isPasswordCorrect = password_verify($_POST['pass'], $membre['pass']);
        }
         if ($isPasswordCorrect)
 
         {
            session_start();
            $_SESSION['id']=$membre['id'];
            $_SESSION['pseudo']=$_POST['pseudo'];
            $_SESSION['pass']=$_POST['pass'];
            header('location: index.php');
         }

           else
        {
           
            echo 'Vos identifiants ne sont pas valides,vous allez être redirigé(e)';
        }
    }

    public function submit() {
        return $this->paragraph('<button type="submit">Envoyer</button>');
    }
}

<?php
require_once ('DataBase.php');
/*
* Class InscMember
*
*create a new member 
*/
class InscMembre { 

  private $_pseudo;
  private $_pass;
  private $_passVerif;
  private $_mail;
  public $bd;
  
// on teste si le pseudo et le mail sont dispos

    public function checkInscription()
    { 
        $db = new DataBase('ericd995946', 'vaosjv8xde', 'ericd995946');
        $datas = $db->query('SELECT pseudo FROM membres WHERE pseudo',[$_GET['pseudo']],true);
        
        if ($datas)
            {
              $erreur = "Ce pseudo est déja utilisé.Vous allez être redirigé(e)";
            }
        $datas = $db->query('SELECT email FROM membres WHERE email',[$_GET['mail']],true);
         
        if ($datas)
            {
            $erreur = "Cet email est déja utilisé.Vous allez être redirigé(e)";
            }

// puis on fait toute une batterie de test

        if(empty($_POST['pseudo']) OR empty($_POST['pass']) OR empty($_POST['passverif']) OR empty($_POST['email']))
        {
          $erreur= "Un champs ou plus est manquant.Vous allez être redirigé(e)";
        }
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
          $erreur = "Veuillez entrer une adresse mail valide.Vous allez être redirigé(e).";
        }
        if($pseudolenght >= 60)
        {
        $erreur= "Votre pseudo doit comporter moins de 60 caractères.Vous allez être redirigé(e)";
        }
        if(!preg_match('/^[a-zA-Z0-9_]+$/', $_pseudo))
        {
          $erreur = "Votre pseudo n'est pas valide.Veuillez utiliser seulement des caratères aplhanumériques.Vous allez être redirigé(e).";
        }
        if($pass!= $passverif)
        {
          $erreur = "Vos mots de passe ne sont pas identiques.Vous allez être redirigé(e)";
        }

// si il y a une erreur on l'indique par le message adéquat et on redirige vers le formulaire

        if($erreur)
        {
          //header('Refresh:3;url=../index.php?r=inscription');
          echo $erreur;

        }
        else
        {

        // si tout est bon on crypte le mot de passe
          $pass_hache = password_hash(htmlspecialchars($_POST['pass']), PASSWORD_DEFAULT);

    } 
  }// fin fonction checkInscription 

// puis on insère le nouveau membre
    public function validInscription()
    {     
      var_dump($db);
          $db->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, now())',true);
          $datas->execute(array(

            'pseudo' => $_POST['pseudo'],

            'pass' => $pass_hache,

            'email' => $_POST['email']));
            $_SESSION ['id'];
            $_SESSION ['pseudo']=$_POST['pseudo'];
            $_SESSION ['pass']=$_POST['pass'];
            {
            header ('location:../index.php?r=home');
            }
    }// fin de la fonction validInscription 
}
?>
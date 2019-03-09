<?php
session_start();
require 'model/model.php';
?>
<?php
class Membres { 

          $pseudo=($_POST['pseudo']);
          $pass=($_POST['pass']);
          $passverif =($_POST['passverif']);
          $mail=($_POST['email']);
          $pseudolenght=strlen($pseudo);

    
    // on teste si le pseudo et le mail sont dispos
public fonction checkInscription ()
{ 
    $req = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = ?');
    $req->execute(array($_POST['pseudo']));
    $donnees = $req->fetch();

        if ($donnees)
        {
          $erreur = "Ce pseudo est déja utilisé.Vous allez être redirigé(e)";
        }
    $req = $bdd->prepare('SELECT email FROM membres WHERE email = ?');
    $req->execute(array($_POST['email']));
    $donnees = $req->fetch();

        if ($donnees)
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
        if(!preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo']))
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
      header('Refresh:3;url=controler/inscription.php');
      echo $erreur;
    }
    else
    {

    // si tout est bon on crypte le mot de passe
      $pass_hache = password_hash(htmlspecialchars($_POST['pass']), PASSWORD_DEFAULT);

} // fin fonction checkInscription 

// puis on insère le nouveau membre
    public fonction validInscription ()
    { 
          $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, now())');

        $req->execute(array(

            'pseudo' => $_POST['pseudo'],

            'pass' => $pass_hache,

            'email' => $_POST['email']));
            $_SESSION ['id'];
            $_SESSION ['pseudo']=$_POST['pseudo'];
            $_SESSION ['pass']=$_POST['pass'];
            {
            header ('location: view/index.php');
            }
    }// fin de la fonction validInscription 
  }
}
?>
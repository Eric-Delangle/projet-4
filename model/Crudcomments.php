<?php
namespace projet4;

/*
class CRUD for comments view and use all sql's comments commands
*/
class Crudcomments extends Crudchapters
{

    
    // je récupère la liste de tous les commentaires

    public function getComments() {
        try { 
            $db = $this->getPDO();
            $com = $db->query("SELECT *,DATE_FORMAT(date_comment, '%d/%m/%Y à %Hh%i minutes')
            AS date_comment_fr FROM comments  WHERE chapter_number = '".$_GET['number']."' ORDER BY date_comment DESC "); 
            return $com;
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }
    
    // je recupère les coms signalés pour les modifier
    public function getSignComments() {
        try { 
            $db = $this->getPDO();
            $signCom = $db->query("SELECT * FROM comments WHERE signalement = 1"); 
            return $signCom;    
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }

    // je crée un commentaire
    public function createComment () { 
        try { 
         // Captcha
            // Ma clé privée
            $secret = "6Ld5ZXAUAAAAAMBXzJ3sw3O4nygYe4QbTCZLHjWy";
            // Paramètre renvoyé par le recaptcha
            $response = $_POST['g-recaptcha-response'];
            // On récupère l'IP de l'utilisateur
            $remoteip = $_SERVER['REMOTE_ADDR'];

            $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
                . $secret
                . "&response=" . $response
                . "&remoteip=" . $remoteip ;

            $decode = json_decode(file_get_contents($api_url), true);

            if ($decode['success'] == true) {
                // le code de vérification est correct
                $db = new \projet4\DataBase('comments');
                $db->prepare('INSERT INTO comments (chapter_number, auth, comment, date_comment)VALUES (:chapter_number, :auth, :comment, now())',
                (array('chapter_number' => htmlspecialchars($_GET['number']),'auth' => htmlspecialchars($_POST['auth']),'comment' => htmlspecialchars($_POST['contenuComment']))));
                ?>
                    <script language="javascript">
                        alert("Votre commentaire a bien été enregistré. Vous allez être redirigé(e).");
                    </script>
                <?php
                header("Refresh:3;url=chapter?number=".$_GET['number']."");
            }

            else {
                // le code de vérification est incorrect
                ?>
                    <script language="javascript">
                        alert("Veuillez préciser que vous n'êtes pas un robot. Vous allez être redirigé(e).");
                    </script>
                <?php
                header("Refresh:3;url=chapter?number=".$_GET['number']."");
            }
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }
        
    // je rétablis le commentaire signalé
    public function updateComment() {
        try { 
            $db = $this->getPDO();
            $db->query("UPDATE comments SET signalement = 0 WHERE id = '".$_GET['id']."' ");
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }

    // je supprime le commentaire signalé
    public function deleteComment() {
        try { 
            $id = $_GET['id'];
            $db = new \projet4\DataBase('comments');
            $db->query("DELETE FROM comments WHERE id = $id ");   
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }


    // je signale un commentaire
    public function signalCom() {
        try { 
            $alert = new \projet4\DataBase('comments');
            $signal = $alert->query("UPDATE comments SET signalement = 1
            WHERE id = '".$_GET['id']."' ");
            
            if ($signal == true) {
                ?>
                <script language="javascript">
                    alert("Ce commentaire a bien été signalé. Vous allez être redirigé(e) vers le sommaire des chapitres.");
                </script>
            
                <?php
                
                header("Refresh:3;url=chapter?number=".$id."");
            }
            else {
                ?>
                <script language="javascript">
                    alert("Ce commentaire n'a pas été signalé.");
                </script>
            
                <?php
            }
            return $signal;
            
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }

}

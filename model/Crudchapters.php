<?php
namespace projet4;

/*
class CRUD for use all sql's commands
*/
class Crudchapters extends DataBase
{
    
    // la j'affiche la page chapters avec tous ses chapitres les uns sous les autres
    public function showChapters(){ 

        try { 
            $db = $this->getPDO();
            $allChapters = $db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')
            AS date_parution_fr FROM chapters ORDER BY chapter_number ");
            return $allChapters;
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }
        
    // au click sur le lien j'affiche le chapitre demandé
    public function showChapter() {
        try { 
            $db = $this->getPDO();
            $chap = $db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr 
            FROM chapters WHERE chapter_number = ".$_GET['number'].""); 
            return $chap;
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }

    // je crée un chapitre  
    public function createChapter ($chapter_number, $title, $contents, $date_parution) {
        try { 
            $db = new \projet4\DataBase('chapters');
            $req = $db->prepare("INSERT INTO chapters(chapter_number, title, contents, date_parution)
            VALUES(:chapter_number, :chapter_title, :contents, now())", 
            (array(
                'chapter_number' => $_POST['chapter_number'],
                'chapter_title' => $_POST['chapter_title'], 
                'contents' => $_POST['contents'])));
                echo 'Ce chapitre a bien été créé.';
                header("Refresh:3;url=edition");
        } 
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }

    // je mets à jour le chapitre
    public function updateChatper($title, $contents) {

        try{ 
            $db = new \projet4\DataBase('chapters');
            $req = $db->prepare("UPDATE chapters SET title = :title,
                                                    contents = :contents 
            WHERE chapter_number = ".$_GET['number']." ",
            (array('title' => $title, 'contents' => $contents)));
            echo 'Ce chapitre a bien été mit à jour. Vous allez être redirigé.';
            header("Refresh:3;url=edition");
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }

    // je supprime le chapitre
    public function deleteChapter() {
        try { 
            $db = new \projet4\DataBase('chapters');
            $dbc = new \projet4\DataBase('comments');
            $db->prepare("DELETE FROM chapters WHERE chapter_number = ".$_GET['number']." ", []);  
            $dbc->prepare("DELETE FROM comments WHERE chapter_number = ".$_GET['number']." ", []);   
        }
        catch (Exception $e) {
            echo 'Attention cette action retourne une erreur : ',  $e->getMessage();
        }
    }
        
}
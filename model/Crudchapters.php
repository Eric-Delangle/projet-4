<?php
namespace projet4;

/*
class CRUD for use all sql's commands
*/
class Crudchapters extends DataBase
{
    
    // la j'affiche la page chapters avec tous ses chapitres les uns sous les autres
    public function showChapters(){ 
        $db = $this->getPDO();
        $allChapters = $db->query("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')
        AS date_parution_fr FROM chapters ORDER BY chapter_number ");
        return $allChapters;  
    }
        
    // au click sur le lien j'affiche le chapitre demandé
    public function showChapter($chapter_number) {
        $db = $this->getPDO();
        $chap = $db->prepare("SELECT *, DATE_FORMAT(date_parution, '%d/%m/%Y')AS date_parution_fr 
        FROM chapters WHERE chapter_number = ?"); 
        $chap->execute(array($chapter_number));
        return $chap;
    }

    // je crée un chapitre  
    public function createChapter ($chapter_number, $title, $contents, $date_parution) {
        $db = $this->getPDO();
        $req = $db->prepare("INSERT INTO chapters(chapter_number, title, contents, date_parution)
        VALUES(:chapter_number, :chapter_title, :contents, now())"); 
        $req->execute(array(
                            'chapter_number' => $_POST['chapter_number'],
                            'chapter_title' => $_POST['chapter_title'], 
                            'contents' => $_POST['contents']));
        echo 'Ce chapitre a bien été créé. Vous allez être redirigé.';
        header("Refresh:3;url=edition");
    } 
    
    // je mets à jour le chapitre
    public function updateChatper($title, $contents) {
        $db = $this->getPDO();
        $req = $db->prepare("UPDATE chapters SET title = :title,
                                                 contents = :contents 
            WHERE chapter_number = ".$_GET['number']." ");
        $req->execute(array('title' => $title, 'contents' => $contents));
        echo 'Ce chapitre a bien été mit à jour. Vous allez être redirigé.';
        header("Refresh:3;url=edition");   
    }

    // je supprime le chapitre
    public function deleteChapter($chapter_number) {
        $db = $this->getPDO();
        $req = $db->prepare("DELETE FROM chapters WHERE chapter_number = ? "); 
        $req->execute(array($chapter_number));
        $del = $db->prepare("DELETE FROM comments WHERE chapter_number = ? "); 
        $del->execute(array($chapter_number));
    }  
    
    //test chapitre suivant ou précédent

    
    public function getLastNumber($chapter_number) { 
        
        if(!empty($chapter_number)) { 
            $chapter_number--;
            header("location: chapter?number=".$chapter_number."");
        } 
    }

    public function getNextNumber($chapter_number) {
        
        if(!empty($chapter_number)) { 
            $chapter_number++;
            header("location: chapter?number=".$chapter_number."");
          }
    }
}
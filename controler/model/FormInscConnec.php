<<<<<<< HEAD
<?php
namespace projet4;
/*
* Class FormInscConnec
*
*create a formulaire
*/

class FormInscConnec
{
    private $data;
    public $paragraph = 'p';

    public function __construct($data = array()){
        $this->$data = $data;
    }
// pour englober mes inputs dans des paragraphes
    private function paragraph ($html) {
        return "<{$this->paragraph}>{$html}</{$this->paragraph}>";
    }
// Pour récuperer le contenu de mes champs si ils sont définis
    private function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
// je crée maon premier input
    public function input($name,$placeholder) {
        return $this->paragraph('<input type="text" name="'.$name.'" placeholder="'.$placeholder.'" style="text-align:center">');
    }
// je crée un textarea
    public function textarea($name) {
      return $this->paragraph('<textarea name="'.$name.'"></textarea>');
    }
   
// je mets un bouton submit
    public function submit() {
        return $this->paragraph('<button type="submit" name="valider" class="liens_h1" value="envoyer">Envoyer</button>');
    }
=======
<?php
namespace projet4;
/*
* Class FormInscConnec
*
*create a formulaire
*/

class FormInscConnec
{
    private $data;
    public $paragraph = 'p';

    public function __construct($data = array()){
        $this->$data = $data;
    }
// pour englober mes inputs dans des paragraphes
    private function paragraph ($html) {
        return "<{$this->paragraph}>{$html}</{$this->paragraph}>";
    }
// Pour récuperer le contenu de mes champs si ils sont définis
    private function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
// je crée maon premier input
    public function input($name,$placeholder) {
        return $this->paragraph('<input type="text" name="'.$name.'" placeholder="'.$placeholder.'" style="text-align:center">');
    }
// je crée un textarea
    public function textarea($name) {
      return $this->paragraph('<textarea name="'.$name.'"></textarea>');
    }
   
// je mets un bouton submit
    public function submit() {
        return $this->paragraph('<button type="submit" name="valider" class="liens_h1" value="envoyer">Envoyer</button>');
    }
>>>>>>> 6b0edd753de8e5895b1f8659fb17fc0e663b8ef0
}
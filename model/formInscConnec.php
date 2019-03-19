<?php
/*
* Class FormInscConnec
*
*create a formulaire
*/

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
}
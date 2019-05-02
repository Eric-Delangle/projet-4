<?php
class InscripForm
{
    private $data;
    public $surround = 'p';

    public function __construct($data){
        $this->$data = $data;
    }
// pour englober mes inputs dans des paragraphes
    private function surround ($tag) {

    }

    public function input($pseudo) {
        return $this->surround('<input type="text" name="'$pseudo'">');
    }

    public function input($pass) {
        return $this->surround('<input type="password" name="'$pass'">');
    }

    public function submit() {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}
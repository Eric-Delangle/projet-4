<<<<<<< HEAD
<?php

namespace projet4;

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
=======
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
>>>>>>> 6b0edd753de8e5895b1f8659fb17fc0e663b8ef0
}
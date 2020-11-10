<?php

class Developper extends Person
{
    // quand une classe A étend une classe B, elle récupère tout le code présent dans la classe B qui n'est pas en "private"

    public $langage;
    public $pc;

    public function __construct($nameParam, $ageParam, $blagueParam,$langageParam, $pcParam) 
    {
        $this->name = $nameParam;
        $this->age = $ageParam;
        $this->blague = $blagueParam;
        $this->langage = $langageParam;
        $this->pc = $pcParam;
    }

    // Je ré-écris la méthode sayHello()
    /*
    public function sayHello() {
        echo 'Bonjour, je suis '.$this->name . ' et je suis développeur.';
        // Pour montrer le cheminement du code, on affiche une message de debug
        // __CLASS__ est comme __DIR__, c'est une constante magique contenant le nom de la classe dans laquelle on y accède
        echo ' [classe '.__CLASS__.']';
        echo '<br>';
    }
    */

    public function coder()
    {
        echo $this->name . " s'arrache les cheveux en faisant du " . $this->langage;
        echo '<br>';
    }
}
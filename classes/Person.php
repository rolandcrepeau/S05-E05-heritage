<?php


// Public = tout le monde peut accéder à la propriété ou méthode
// Private = on ferme à clés
// Protected = on ferme à clés et on donne un double des clés aux enfants

// Ma classe
class Person 
{
    // protected = private + autorisation aux classes "enfants"
    protected $name;
    public $age;
    private $blague;

    
    public function __construct($nameParam, $ageParam, $blagueParam) {
        $this->name = $nameParam;
        $this->age = $ageParam;
        $this->blague = $blagueParam;
    }
    
    public function sayHello() {
        echo 'Bonjour, je suis '.$this->name;
        echo '<br>';
        // Pour montrer le cheminement du code, on affiche une message de debug
        // __CLASS__ est comme __DIR__, c'est une constante magique contenant le nom de la classe dans laquelle on y accède
        echo ' [classe '.__CLASS__.']';
        echo '<br>';
        echo ' [method '. __METHOD__.']';
        echo '<br>';
    }
}



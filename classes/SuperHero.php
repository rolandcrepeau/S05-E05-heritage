<?php

class SuperHero extends Person
{
    private $capacity;
    

    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */ 
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function saySuperHello() 
    {
        // On appelle la méthode sayHello() qui est déclarée dans la classe parente Person
        // $this->sayHello();

        echo 'Bonjour, je suis un super héro, je m\'appelle ' . $this->name;
        echo ' et mon pouvoir sera ' . $this->capacity;
        echo '<br>';
        echo ' [classe '.__CLASS__.']';
        echo '<br>';
        echo ' [method '. __METHOD__.']';
        echo '<br>';
    }
}
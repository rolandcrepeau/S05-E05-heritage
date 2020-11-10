# S05-E05-heritage-Marion

## Héritage

- une classe ne peut hériter que d'une seule classe
- une classe peut avoir plusieurs "enfants"
- elle hérite de toutes les propriétés et de toutes les méthodes (comme un gros copié-collé)

### exemple : 

```php
<?php

class Computer {
    protected $processor;
    protected $hardDisk;
    protected $ram;
    protected $operatingSystem;
    // [...]
}
```

```php
<?php

class Laptop extends Computer {
    // Adding properties to Computer properties
    protected $screenSize;
    // [...]

    // Adding methods to Computer methods
    // [...]
}
```

```php
<?php

class Server extends Computer {
    // Adding properties to Computer properties
    protected $units;
    // [...]

    // Adding methods to Computer methods
    // [...]
}
```

`Laptop` et `Server` sont des classes "enfants" de `Computer`. Elles héritent donc de ses propriétés et méthodes.
Mais l'intérêt est d'ajouter des propriétés et/ou méthodes spécifiques à `Laptop` et spécifiques à `Server`.


## Visibilité

Par défaut, si on ne précise rien, les propriétés et les méthodes sont publiques. On peut avoir un controle sur la visibilité des propriétés et des méthodes :

### `public`

C'est "open bar".

Les propriétés sont accessibles et modifiables **depuis n'importe quelle partie du code**.  (du coup, pas besoin de getters et de setters)
Les méthodes peuvent être appelées **depuis n'importe quelle partie du code**.

### `private`

C'est "fermé à clés".

Les propriétés sont accessibles et modifiables **depuis le code de la classe uniquement**.  
Les méthodes peuvent être appelées **depuis le code de la classe uniquement**.

## `protected`

C'est "pour la famille".

![The Godfather](https://media.giphy.com/media/l0Iy89owS5CYP7Hk4/giphy-downsized.gif)

Les propriétés sont accessibles et modifiables **depuis le code de la classe, de ses enfants et de ses ancêtres**.  
Les méthodes peuvent être appelées **depuis le code de la classe, de ses enfants et de ses ancêtres**.

### Analogie

_Je suis dans ma maison, et toutes les portes et fenêtres sont grandes ouvertes_  
=> `public`

_Je suis dans ma maison, et j'ai fermé les fenêtres et fermé les portes à double-tour_  
=> `private`

_Je suis dans ma maison, et j'ai fermé les fenêtres et fermé les portes à double-tour, mais j'ai donné un double à mes parents et à mes enfants_  
=> `protected`

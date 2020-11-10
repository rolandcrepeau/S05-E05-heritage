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
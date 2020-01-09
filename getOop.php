<?php

// GOAL:
//- Definire la classe Persona caratterizzata da nome e cognome
//- Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
//- Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
//- Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
//- Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi

//svolgimento :

// Definire la classe Persona caratterizzata da nome e cognome OK
class Persona {

    public $nome;
    public $cognome;

    // generare costruttore che acq. 2 dim.
    function __construct($nome, $cognome) {

     $this -> nome = $nome;
     $this -> cognome =  $cognome;

    }

   public function __toString() {
   /* rappresentazione testuale dell'oggetto */
     return   $this -> nome . "\n"
            . $this -> cognome;
   }
}

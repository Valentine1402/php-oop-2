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
     return   "Nome: " . $this -> nome . "\n"
            . ", Cognome: " . $this -> cognome;
   }
}

//- Definire la classe Ospite (che eredita da Persona) caratterizzata da nome,
//cognome e anno di nascita
class Ospite extends Persona {

    public $annoDnascita;

  //- Per ogni classe definire costruttore e toString in maniera appropriata,
  //eventualmente richiamando i metodi della classe padre
  function __construct($nome, $cognome , $annoDnascita) {

    parent::__construct($nome, $cognome);
    $this -> annoDnascita = $annoDnascita;

  }


  function __toString() {

    return parent:: __toString() ."\n". ", Anno di nascita: " . $this -> annoDnascita;

  }
}

//- Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
class Pagante extends Persona {

    public $residenza;

  function __construct($nome, $cognome , $residenza) {
    parent:: __construct($nome, $cognome);
    $this -> residenza = $residenza;

  }


  function __toString() {

    return parent:: __toString() ."\n". ", Indirizzo: " . $this -> residenza;

  }
}

 //- Eseguire dei test, istanziando ogni classe definita e testando la
 //correttezza dei risultati attesi
 $pers = new Persona (Frida, Khalo);
 echo $pers . "<br>";
 echo "\n". "\n" ."<br>";
 $osp = new Ospite (Frida, Khalo, 1907);
 echo $osp . "<br>";
 echo "\n". "\n"."<br>";
 $res = new Pagante (Frida, Khalo, Coyoacán);
 echo $res . "\n". "\n";

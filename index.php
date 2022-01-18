<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>


    <?php
    /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */


    class Persona {

       private $nome;
       private $cognome;
       private $dataNascita;

        public function __construct($nome, $cognome) {

            $this ->  setNome($nome);
            $this ->  setCognome($cognome);
        }

        public function getNome() {

            return $this -> nome;
        }

        public function setNome($nome) {

            $this -> nome = $nome;
        }

        public function getCognome() {

            return $this -> cognome;
        }

        public function setCognome($cognome) {

            $this -> cognome = $cognome;
        }

        public function getDataNascita() {

            return $this -> dataNascita;
        }

        public function setDataNascita($dataNascita) {

            $this -> dataNascita = $dataNascita;
        }

        public function printFullPerson() {
            
            echo $this -> nome . " " . $this -> cognome . ": " . $this -> dataNascita;
        }


        public function __toString() {

            return $this -> nome . " " . $this -> cognome . ": " . $this -> dataNascita;
        }
    }

    class Employee extends Persona {

        private $stipendio;
        private $dataAssunzione;

        public function __construct($nome, $cognome, $stipendio) {

            $this ->  setNome($nome);
            $this ->  setCognome($cognome);
            $this -> setStipendio($stipendio);
        }

        public function getStipendio() {

            return $this -> stipendio;
        }

        public function setStipendio($stipendio) {

            $this -> stipendio = $stipendio;
        }

        public function getDataAssunzione() {

            return $this -> dataAssunzione;
        }

        public function setdataAssunzione($dataAssunzione) {

            $this -> dataAssunzione = $dataAssunzione;
        }

        public function printFullEmployee() {
            
            echo $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getStipendio() . " (" . $this -> getDataAssunzione() . ")";
        }


        public function __toString() {
            
            return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getStipendio() . " (" . $this -> getDataAssunzione() . ")";
        }


    }

    $p1 = new Persona("Daniele", "Oliva");
    $p1 -> setDataNascita("28-07-1998");

    echo "Stampa con toString  ---->   " . $p1 . "<br>";
    echo "Stampa con printFullPerson()  ---->   ";
    $p1 -> printFullPerson();
    echo "<br>";
    echo "<br>";


    $e1 = new Employee("Daniele", "Oliva", "1300€");
    $e1 -> setdataAssunzione("21-12-2020");

    echo "Stampa con toString  ---->   " . $e1 . "<br>";
    echo "Stampa con printFullEmployee  ---->   ";
    $e1 -> printFullEmployee();

?>

</head>
<body>
    
</body>
</html>
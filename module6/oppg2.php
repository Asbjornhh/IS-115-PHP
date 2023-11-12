<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fjern Kode</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        form div {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">

    <?php
    class Bruker {
        // Definerer klasseegenskaper

        public $fornavn;
        public $etternavn;
        public $brukernavn;
        public $fodselsdato;
        public $registreringsdato;

        // Konstruktør for å initialisere objektet med verdier
        function __construct($fornavn, $etternavn, $brukernavn, $fodselsdato, $registreringsdato) {
            $this->fornavn = $fornavn;
            $this->etternavn = $etternavn;
            $this->brukernavn = $brukernavn;
            $this->fodselsdato = $fodselsdato;
            $this->registreringsdato = $registreringsdato;
        }

        // Metode som henter fullt navn
        public function hentFulltNavn() {
            return $this->fornavn . ' ' . $this->etternavn. '  ' ;
        }

        // Metode henter brukernavn
        public function hentBrukernavn() {
            return $this->brukernavn;
        }
    }

    $bruker1 = new Bruker("Tore", "Pallesen", "tp123", "1999-11-10", "2020-11-11");
    $bruker2 = new Bruker("Guri","Storli","GuriS", "1999-11-10","1999-11-10");

        class Student extends Bruker {
    public $studentID;

    // Konstruktør for å initialisere Student-objektet
    function __construct($fornavn, $etternavn, $brukernavn, $fodselsdato, $registreringsdato, $studentID) {
    parent::__construct($fornavn, $etternavn, $brukernavn, $fodselsdato, $registreringsdato);
    $this->studentID = $studentID;
    }

    // Overstyrer hentFulltNavn-metoden fra Bruker-klassen
    public function hentFulltNavn() {
    return parent::hentFulltNavn() . "<br>". "StudentID: ". $this->studentID;
    }

    // Ny metode spesifikk for Student-klassen
    public function hentStudentInfo() {
    return "Navn:".$this->hentFulltNavn(). "<br>". "Brukernavn:". $this->hentBrukernavn();
    }
    }

    // Eksempel på bruk av klassen
    $student1 = new Student("Olga", "Ulsteinvik", "olga321", "2001-11-15", "2023-01-01", "0001");


    echo "Bruker nr.1" ."<br>". "Navn: ". $bruker1->hentFulltNavn(). "<br>";
    echo "Brukernavn:  ".$bruker1->hentBrukernavn(). "<br>";

    echo "<br>". "Bruker nr.2". "<br>". "Navn:". $bruker2->hentFulltNavn(). "<br>";
    echo "Brukernavn:  ".$bruker2->hentBrukernavn(). "<br>". "<br>";

    echo "Student 1:". "<br>" . $student1->hentStudentInfo();
    ?>

</div>
<br>
<br>

<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
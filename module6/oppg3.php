<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valider E-post</title>
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

        public $fornavn;
        public $etternavn;
        protected $brukernavn;
        public $fodselsdato;
        protected $registreringsdato;
        static $slettedeBrukere = []; // Statisk matrise for å lagre slettede brukernavn

        function __construct($fornavn, $etternavn, $fodselsdato) {
            $this->fornavn = $fornavn;
            $this->etternavn = $etternavn;
            $this->fodselsdato = $fodselsdato;
            $this->brukernavn = substr(md5(uniqid(rand(), true)), 0, 7);
            $this->registreringsdato = date("Y-m-d");
        }

        function __destruct() {
            self::$slettedeBrukere[] = $this->brukernavn; // Legger brukernavnet til i matrisen ved sletting
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


    // Oppretter to objekter
    $bruker1 = new Bruker("Tore", "Pallesen", "tp123", "1999-11-10", "2020-11-11");
    $bruker2 = new Bruker("Guri","Storli","GuriS", "1999-11-10","1999-11-10");

    // Sletter brukerobjekter
    unset($bruker1);
    unset($bruker2);

    // Skriver ut slettede brukernavn
    echo "Slettede brukernavn: <br>";
    foreach (Bruker::$slettedeBrukere as $brukernavn) {
        echo $brukernavn . "<br>";
    }

    ?>



</div>
<br><br>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
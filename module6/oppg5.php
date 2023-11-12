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
    </style>
</head>
<body>

<div class="container">
    <?php
    class Validering {
        private $verdi;

        function __construct($verdi) {
            $this->verdi = $verdi;
        }

        // Metode for å validere input basert på type
        public function valider() {
            if ($this->erEmail()) {
                return $this->validerEmail();
            } elseif ($this->erMobilnummer()) {
                return $this->validerMobilnummer();
            } elseif ($this->erPassord()) {
                return $this->validerPassord();
            } else {
                return false;
            }
        }


        private function erEmail() {
            return filter_var($this->verdi, FILTER_VALIDATE_EMAIL) !== false;
        }

        private function validerEmail() {
            return "E-postadresse er gyldig.";
        }

        private function erMobilnummer() {
        // Eksempel på utvidet sjekk for norske mobilnummer
        return preg_match('/^[49]\d{7}$/', $this->verdi);
        }

        private function validerMobilnummer(){
            if ($this->erMobilnummer()) {
                return "Mobilnummer er gyldig.";
            } else {
                return "Mobilnummer er ikke gyldig.";
            }
        }

        private function erPassord() {
            return preg_match('/^(?=.*[A-Z])(?=.*\d.*\d)(?=.*[!@#$%^&*]).{9,}$/', $this->verdi);
        }

        private function validerPassord(){
            if ($this->erPassord()) {
                return "Passord er gyldig.";
            } else {
                return "Passord er ikke gyldig.";
            }
        }


        public function skrivUtValideringsresultat() {
            $resultat = $this->valider();
            echo is_string($resultat) ? $resultat : "Ugyldig";
        }




    }

    // Tester

    $gyldigEmail = new Validering("gyldig@eksempel.com");
    $ugyldigEmail = new Validering("ugyldigemail@");


    $gyldigMobil = new Validering("41234567");
    $ugyldigMobil = new Validering("1234567"); // Mindre enn 8 sifre


    $gyldigPassord = new Validering("St@rkPass123");
    $ugyldigPassord = new Validering("svakt123"); // Mangler stor bokstav og spesialtegn


    echo "".  $gyldigEmail->skrivUtValideringsresultat(). "<br>";

    echo "".    $ugyldigEmail->skrivUtValideringsresultat(). "<br>";

    echo "".    $gyldigMobil->skrivUtValideringsresultat(). "<br>";

    echo "".    $ugyldigMobil->skrivUtValideringsresultat(). "<br>";

    echo  "".    $gyldigPassord->skrivUtValideringsresultat(). "<br>";

    echo  "".    $ugyldigPassord->skrivUtValideringsresultat(). "<br>";
    ?>



</div>

<br>
<br>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
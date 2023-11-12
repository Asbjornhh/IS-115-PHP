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
    class emailValidering {

        public $email;

        // Konstruktør for å initialisere objektet
        function __construct($email) {
            $this->email = $email;
        }

        // validerer e-postadresse
        public function validerEmail() {
            return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
        }

        // Resultat skrives ut
        public function skrivUtValideringsresultat() {
            if ($this->validerEmail()) {
                echo "E-postadressen '{$this->email}' er gyldig.". "<br>";
            } else {
                echo "E-postadressen '{$this->email}' er ikke gyldig.". "<br>";
            }
        }
    }

    // Opprette et objekter
    $testEmail = new emailValidering("eksempel@eksempel.com");
    $test = new emailValidering("ddd@email.no");
    $test2 = new emailValidering("asdsaemial.com");



    $testEmail->skrivUtValideringsresultat();
    $test2->skrivUtValideringsresultat();
    $test->skrivUtValideringsresultat();
    ?>

    </table>

</div>
<br>
<br>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
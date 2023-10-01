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
    $endret = false;
    $data = [
        'navn' => 'Asbjørn Håland Hestnes',
        'mobilnummer' => '12345678',
        'epost' => 'asbjornhh@uia.no'
    ];

    // Sjekker om skjemaet er sendt med POST-metoden
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Går gjennom hvert felt i skjemaet
        foreach ($data as $felt => $verdi) {
            // Sjekker om dataen er endret
            if ($data[$felt] !== $_POST[$felt]) {
                $data[$felt] = $_POST[$felt];
                $endret = true;
            }
        }
    }
    ?>

    <h1>Registrering av ny bruker</h1>
    <p><span class="error">* Nødvendig informasjon</span></p>
    <form method="post" action="">
        <div>
            Navn: <input type="text" name="navn" value="<?= $data['navn']; ?>" required><span class="error">*</span>
        </div>
        <div>
            Mobilnummer: <input type="number" name="mobilnummer" min="10000000" max="99999999" pattern="\d{8}" value="<?= $data['mobilnummer']; ?>" required><span class="error">*</span>
        </div>
        <div>
            E-post: <input type="email" name="epost" value="<?= $data['epost']; ?>" required><span class="error">*</span>
        </div>
        <div>
            <input type="submit" name="submit" value="Registrer">
        </div>
    </form>

    <?php
    // Sjekker om dataen er endret og viser en melding
    if ($endret) {
        echo "<h2>Bruker er endret.</h2>";
    }
    ?>



</div>
<br><br>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
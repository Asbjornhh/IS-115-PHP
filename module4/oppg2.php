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
    // setter variabler for å lagre brukerdata
    $data = [];

    // Sjekker om skjemaet er sendt med POST-metoden
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // lagrer dataen fra skjemaet
        $data['navn'] = ($_POST['navn']);
        $data['mobilnummer'] = ($_POST['mobilnummer']);
        $data['epost'] = ($_POST['epost']);
    }
    ?>

    <!-- Skjema for brukerregistrering, lager restriksjonene hovedsaklig her -->
    <h1>Registrering av ny bruker</h1>
    <p><span class="error">* Nødvendig informasjon</span></p>
    <form method="post" action="">
        <div>
            Navn: <input type="text" name="navn" required><span class="error">*</span>
        </div>
        <div>
            Mobilnummer: <input type="number" name="mobilnummer" min="10000000" max="99999999" required><span class="error">*</span>
        </div>
        <div>
            E-post: <input type="email" name="epost" required><span class="error">*</span>
        </div>
        <div>
            <input type="submit" name="submit" value="Registrer">
        </div>
    </form>

    <?php
    // Sjekker om data er mottatt
    if (!empty($data)) {
        // Skriver ut brukerdata
        echo "<h2>Den nye brukeren er registrert med følgende data:</h2>";
        foreach ($data as $key => $value) {
            echo ucfirst($key) . ": " . $value . "<br>";
        }
    }
    ?>


</div>
<br>
<br>

<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
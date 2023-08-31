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
    function ValiderEpost($epost) {
        return filter_var($epost, FILTER_VALIDATE_EMAIL) ? "Gyldig e-post" : "Ugyldig e-post";
    }

    // Oppretter en Array for å teste flere eposter
    $epostListe = [
        "asbjorn@email.com",
        "email.email.com",
        "TT@example.com",
        "test.org"
    ];

    // Foreach for å loope gjennom listen
    foreach ($epostListe as $epost) {
        $ValidertEpost = ValiderEpost($epost);
        echo "Resultat for: $epost: $ValidertEpost<br>";
    }
    ?>


</div>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
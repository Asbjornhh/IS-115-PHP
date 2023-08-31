<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skjekk av etternavn</title>
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
    //oppretter en funksjon som tar og gjør alle bokstavene til små for å så lage den første bokstaven stor
    function FormatertEtternavn($etternavn) {
        return ucfirst(strtolower($etternavn));
    }

    // Variabel etternavn
    $etternavn = "hEsTNeS";

    // formaterer
    $formatertetternavn = FormatertEtternavn($etternavn);

    // bruker echo til å skrive det formaterte etternavnet
    echo "<p>Formatert etternavn: " . $formatertetternavn . "</p>";

    // bruker echo til å skrive antall bokstaver som er i etternavnet
    echo "<p>Lengen på etternavnet: " . strlen($formatertetternavn) . "</p>";
    ?>

    <a href="Index.php" class="button">Tilbake til oppgaver</a>
</div>

</body>
</html>
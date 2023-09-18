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
    // Få dagens dato
    $today = new DateTime();
    $today->setTime(0, 0);  // Sett tid til midnatt for å bare sammenligne dato

    // Sett utløpsdatoer for jobbannonser
    $jobExpiryDates = [
        'IT-konsulent' => new DateTime('2023-10-01'),
        'Power-Platform konsulent' => new DateTime('2023-09-11'),
        'Cloud Engineer' => new DateTime('2023-11-20')
    ];



    // Sjekk om jobbannonsene har utløpt
    foreach ($jobExpiryDates as $job => $date) {
        if ($today > $date) {
            echo "$job har utløpt.<br>";
        } else {
            echo "$job har ikke utløpt.<br>";
        }
    }
    // Sett dato for event
    $eventDate = new DateTime('2023-09-13');
    $eventDate->setTime(0, 0);  // Sett tid til midnatt for å bare sammenligne dato


    // Sjekk om eventet er gjennomført
    if ($today > $eventDate) {
        echo "Eventet er allerede gjennomført.<br>";
    } else {
        echo "Eventet er ikke gjennomført.<br>";
    }
    ?>
    </div>

<a href="Index.php" class="button">Tilbake til oppgaver</a>

</body>
</html>
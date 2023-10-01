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
    // Lager en matrise med tre forskjellige jobbannonser
    $jobbannonser = [
        [
            'Stillingstittel' => 'Erfaren Kokk søkes',
            'Jobbbeskrivelse' => 'Vi søker en erfaren kokk til vår nyåpnede restaurant.',
            'Søknadsfrist' => '2023-10-20',
            'Hvor' => 'Stavanger'
        ],
        [
            'Stillingstittel' => 'Dyktig Gartner søkes',
            'Jobbbeskrivelse' => 'Vi søker en dyktig gartner for vedlikehold av parkområder.',
            'Søknadsfrist' => '2023-11-05',
            'Hvor' => 'Kristiansand'
        ],
        [
            'Stillingstittel' => 'Engasjert Lærer søkes',
            'Jobbbeskrivelse' => 'Vi søker en engasjert lærer til vår grunnskole.',
            'Søknadsfrist' => '2023-12-15',
            'Hvor' => 'Tromsø'
        ]
    ];
    ?>

    <h1>Jobbannonser</h1>
    <table border="10">
        <tr>
            <th>Stillingstittel</th>
            <th>Jobbbeskrivelse</th>
            <th>Søknadsfrist</th>
            <th>Hvor</th>
        </tr>
        <?php
        foreach ($jobbannonser as $annonse) {
            echo "<tr>";
            echo "<td>" . $annonse['Stillingstittel'] . "</td>";
            echo "<td>" . $annonse['Jobbbeskrivelse'] . "</td>";
            echo "<td>" . $annonse['Søknadsfrist'] . "</td>";
            echo "<td>" . $annonse['Hvor'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</div>
<br>
<br>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
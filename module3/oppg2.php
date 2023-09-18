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
    </style>
</head>
<body>

<div class="container">
    <?php
    //oppretter starttid for å regne ut tiden skriptet tar og telle med alle pausene og summen
    $startTid = time();
    $summert = 0;

    //Kjører en forloop og itterere gjennom 0 frem til 9 og printer ut, sleep(venter 1 sekund)
    for ($i = 1; $i < 10; $i++) {
        echo "{$i}";
        flush();
        $summert = $summert + $i;
        sleep(1);
    }
    //venter 2 sekund etter tellingen med å printe ut resultatet
    sleep(2);
    $sluttTid = time();

    echo "Ferdig å telle! Summen av tallene ble {$summert}.";



    $totalTid = $sluttTid - $startTid;

    echo "Tid for å kjøre dette skriptet er $totalTid sekunder";


    ?>
    <br>
    <br>

    <a href="Index.php" class="button">Tilbake til oppgaver</a>
</div>

</body>
</html>
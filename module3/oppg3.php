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
    //skjekker om formen er registrert
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // tar imot data fra formen
        $startSaldo = $_POST["startSaldo"];
        $rente = $_POST["rente"];
        $aar = $_POST["aar"];

        //Oppretter saldo variabel med start saldo
        $saldo = $startSaldo;

        //viser startdata
        echo "Startsaldo: {$startSaldo}<br>";
        echo "Rente: {$rente}%<br>";
        echo "Antall år: {$aar}<br><br>";

        //Kalkulerer og viser saldo for hvert år
        for ($i = 1; $i <= $aar; $i++) {
            $saldo += ($saldo * $rente / 100);
            echo "Saldo etter {$i} år: " . $saldo;
            echo "<br>";
        }
        // viser den totale saldo etter alle år
        echo "<br>Total saldo etter {$aar} år er " . round($saldo, 2);
    } else {
        echo '<form method="post" action="">
                    Startsaldo: <input type="number" name="startSaldo"><br>
                    Rente: <input type="number" name="rente"><br>
                    Antall år: <input type="number" name="aar"><br>
                    <input type="submit" value="Beregn">
                  </form>';
    }
    ?>


</div>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
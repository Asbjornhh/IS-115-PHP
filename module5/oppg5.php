<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temperatur konvertering C/F</title>
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

<br>

<br>
<div class="container">
    <?php
    //Setter opp startverdier
    $result = '';
    $temperatureF = '';
    $temperatureC = '';

    //Skjekker om vi har fått data fra skjemaet
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST['temperature'];
        $scale = $_POST['scale'];


        if ($scale == "celsius") {
            // Konverter fra Fahrenheit til Celsius / setter opp formel for å regne ut celsius
            $convertedTemperature = (5/9) * ($temperature - 32);
            $result = "$temperatureF tilsvarer " . round($convertedTemperature, 2) . "°C";
        } elseif ($scale == "fahrenheit") {
            // Konverter fra Celsius til Fahrenheit/ setter opp formelen å regne ut fahrenheit
            $convertedTemperature = ($temperature * 9/5) + 32;
            $result = "$temperatureC tilsvarer " . round($convertedTemperature, 2) . "°F";
        }
    }

    ?>

    <form action="" method="post">
        <label for="temperature">Temperatur:</label>
        <input type="number" id="temperature" name="temperature" required>

        <!--Lager en drop down meny for å velge hvilke konvertering som er ønsket-->
        <label>
            <select name="scale" required>
                <option value="celsius">Fahrenheit til Celsius</option>
                <option value="fahrenheit">Celsius til Fahrenheit</option>
            </select>
        </label>

        <input type="submit" value="Konverter">
    </form>

    <br>
    <!--Printer resultatet-->
    <p><?= $result ?></p>


</div>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
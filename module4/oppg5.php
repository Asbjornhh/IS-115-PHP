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
    //variabler for å lagre data
    $navn = $epost = $emne = $melding = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $navn = $_POST['navn'];
        $epost = $_POST['epost'];
        $emne = $_POST['emne'];
        $melding = $_POST['melding'];
    }
    ?>

    <h1>Kontaktskjema</h1>
    <form method="post" action="">
        Navn: <input type="text" name="navn" required><br><br>
        E-post: <input type="email" name="epost" required><br><br>
        Emne: <input type="text" name="emne" required><br><br>
        Melding: <textarea name="melding" required></textarea><br><br>
        <input type="submit" name="submit" value="Send Melding">
    </form>

    <!-- Viser meldingen på skjermen -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Melding mottatt:</h2>";
        echo "Navn: " . $navn . "<br>";
        echo "E-post: " . $epost . "<br>";
        echo "Emne: " . $emne . "<br>";
        echo "Melding: " . $melding . "<br>";
    }
    ?>


</div>

<br>
<br>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
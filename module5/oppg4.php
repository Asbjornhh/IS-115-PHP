<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kryptering/Dekryptering</title>
    <meta charset="UTF-8">
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

    // Funksjon for å kryptere teksten ved hjelp av Caesar cipher, som tar inn tekst og shift for å forskyve antall plassering bassert på Ceasar cipher
    function encrypt($text, $shift = 3): string
    {
        $encryptedText = "";
        foreach(str_split($text) as $char) {
            $encryptedText .= chr((ord($char) + $shift) % 256); // Bruker modulus 256 for å sikre at det forblir en gyldig ASCII-verdi
        }
        return $encryptedText;
    }

    // Funksjon for å dekryptere teksten, tar inn encryptet tekst og shifter 3 tilabke i alfabetet
    function decrypt($encryptedText, $shift = 3): string
    {
        $decryptedText = "";
        foreach(str_split($encryptedText) as $char) {
            $decryptedText .= chr((ord($char) - $shift + 256) % 256); // Legger til 256 før modulus for å unngå negative tall
        }
        return $decryptedText;
    }
    //Gjør det mulig for å kopiere den krypterte/dekrypterte teksten på en egen side
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['encrypt'])) {
            $text = $_POST['textToEncrypt'];
            $encryptedText = encrypt($text);
            echo "Kryptert tekst: " . $encryptedText;
            echo '<br><br><a href="oppg4.php" class="button">Gå tilbake for dekryptering</a>'; //Gjør det mulig for å kopiere teksten for å dekryptere

        } elseif (isset($_POST['decrypt'])) {
            $text = $_POST['textToDecrypt'];
            $decryptedText = decrypt($text);
            echo "Dekryptert tekst: " . $decryptedText;
            echo '<br><br><a href="oppg4.php" class="button">Gå tilbake for kryptering</a>'; // Gjør det mulig for å gå tilbake samtidig vise den dekrypterte teksten

        }
    } else {
        ?>




        <body>

        <form action="" method="post">
            <label for="textToEncrypt">Tekst til kryptering:</label><br>
            <input type="text" id="textToEncrypt" name="textToEncrypt"><br><br>
            <input type="submit" name="encrypt" value="Krypter">
        </form>

        <br><br>

        <form action="" method="post">
            <label for="textToDecrypt">Tekst til dekryptering:</label><br>
            <input type="text" id="textToDecrypt" name="textToDecrypt"><br><br>
            <input type="submit" name="decrypt" value="Dekrypter">
        </form>

        <?php
    }
    ?>


</div>
<br>
<br>
<a href="Index.php" class="button">Tilbake til oppgaver</a>
</body>
</html>
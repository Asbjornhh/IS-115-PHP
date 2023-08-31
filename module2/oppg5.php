<!DOCTYPE html>
<html lang="no">
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
    function PassordGenerering() {
        $Tegn = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $passord = '';

        // Generer 6  tilfeldige bokstaver fra settet over
        for ($i = 0; $i < 6; $i++) {
            $passord .= $Tegn[rand(0, strlen($Tegn) - 1)];
        }

        // Sørger for at minst en bokstav er stor
        $storeBokstaver = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $passord .= $storeBokstaver[rand(0, strlen($storeBokstaver) - 1)];

        // Sikrer at det er minst et tall
        $tall = '0123456789';
        $passord .= $tall[rand(0, strlen($tall) - 1)];

        // bruker str_shuffle til å "shufle passordet"
        return str_shuffle($passord);
    }

    $generertPassord = PassordGenerering();
    echo "Det genererte passordet er: $generertPassord";
    ?>

    <a href="Index.php" class="button">Tilbake til oppgaver</a>
</div>

</body>
</html>
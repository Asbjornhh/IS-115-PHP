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

    function Differanse($tall1, $tall2)
    {
        $differanse = abs($tall1 - $tall2);
        return "Differansen av $tall1 og $tall2 er $differanse";
    }

    $tall1 = 60;
    $tall2 = 20;

    $differansen = Differanse($tall1, $tall2);

    echo $differansen;
    ?>

    <a href="Index.php" class="button">Tilbake til oppgaver</a>
</div>

</body>
</html>
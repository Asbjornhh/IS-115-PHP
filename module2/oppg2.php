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
        //oppretter en funksjon som stripper variablen som skal bli printet ut for HTML og PHP kode
        function BehandleEtternavn($etternavn){
            return strip_tags($etternavn);
        }

        $etternavn = "<script></script><h1>Hestnes</h1><a href='http://example.com'></a><?php echo 'HHHADSAJKDLAS'; ?>";

        $behandletetternavn = BehandleEtternavn($etternavn);

        echo "Bearbeidet etternavn: $behandletetternavn";


    ?>

    <a href="Index.php" class="button">Tilbake til oppgaver</a>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <title> Oppgave 2: Instillinger i php.ini</title>
</head>
<body>

<h1 style="color: #007bff">Oppg 2</h1>

<p style="color: deeppink">display_errors</p>
<p style="color: cyan"> Denne funksjonen forteller om errors skal bli printet ut som en del av outputtet eller ikke, og på min så står det at den er på som vil si at errors vil bli printet som en del av outputtet, display_errors=ON både i Local Value(gjeldene scriptet) og Master value (Globale standeren). Dette kan være en vital der når det kommer til debugging eller ved utvikling av en applikasjon, men i systemutvikling kan det være viktig og ikke vise disse errorene da det kan vise detaljer en ikke vil ha på avveie </p>
<p style="color: deeppink">document_root</p>
<p style="color: cyan">Dette viser directoryen til av mappen hvor nettsidens filer er lagret på serveren og i dette tilfellet er det:
    <?php
    echo $_SERVER['DOCUMENT_ROOT'];
    ?>. Dette funker som "hjemmemappen" for nettstedet på en server. </p>

<a href="index.php" style="padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px;">Tilbake til oppgaver</a>

</body>
</html>

<?php

    phpinfo();
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
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
    </style>
</head>
<body>

<div class="container">
    <h1>Oppgaver</h1>
    <?php
    // Define the number of modules you have
    $moduleCount = 7; // Change this to your total number of modules

    for ($i = 1; $i <= $moduleCount; $i++) {
        echo "<h2>Modul $i</h2>";
        echo "<ul>";

        // Dynamically generate the number of tasks for each module if they differ
        // For now, assuming 5 tasks per module as an example
        $taskCount = 5; // Change this to the actual number of tasks per module if needed
        for ($j = 1; $j <= $taskCount; $j++) {
            echo "<li><a href='module$i/oppg$j.php'>Oppgave $j</a></li>";
        }
        echo "</ul>";
    }
    ?>
</div>

</body>
</html>
<?php
$testo = 'Sono anni che ti alleno a dire "oh vaffanculo scemo!"
Canto del più e del meno e grido "oh vaffanculo scemo!"
E quando mi vedi in giro grida "oh vaffanculo scemo!"
"Oh vaffanculo scemo!"
"Oh vaffanculo scemo!"';
$testoSenzaParolacce = str_replace($_GET['badWord'], '***', $testo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>
        Hello PHP
    </h1>
    <h2>
        <?php echo $testo; ?>
    </h2>
    <span>Il testo è lungo: <?php echo strlen($testo)  ?> parole</span><br><br><br>


    <form action="">
        <input type="text" name="badWord" method="GET" placeholder="Elimina una parola volgare">
        <button>Cancella</button>
    </form><br><br><br>
    <span>Hai cancellato <?php echo $_GET['badWord']; ?></span>
    <h2>
        <?php echo $testoSenzaParolacce; ?>
    </h2>
    <span>Il testo è lungo: <?php echo strlen($testoSenzaParolacce)  ?> parole</span><br>
</body>

</html>
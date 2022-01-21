<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <!-- Descrizione:
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
    
    <!-- Creo la variabile che contiene il paragrafo -->
    <?php
        $testo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla purus neque, elit in nunc sed, fermentum elit metus. Quisque elit augue nec tellus pellentesque, in elit leo cursus.';
    ?>

    <h2>Paragrafo e lunghezza originali</h2>
    <!-- Stampo a schermo il paragrafo -->
    <p>
        <?php echo $testo; ?>
    </p>

    <!-- Stampo la lunghezza del paragrafo -->
    <div>
        Lunghezza del paragrafo: <?php echo strlen($testo); ?>
    </div>

    <!-- Passo la parola da censurare tramite parametro GET -->
    <p>
        <?php
            $censored_word = $_GET['word'];
        ?>
    </p>

    <h2>Paragrafo e lunghezza modificati</h2>
    <!-- Sostituisco tutte le occorrenze della parola da censurare con '***' -->
    <!-- Stampo il nuovo paragrafo  -->
    <p>
        <?php
            $uncensored = str_replace($censored_word, '***', $testo);
            echo $uncensored;
        ?>
    </p>

    <!-- Stampo la lunghezza del nuovo paragrafo -->
    <p>
        La lunghezza del paragrafo modificato è: <?php echo strlen($uncensored); ?>
    </p>
    
</body>
</html>
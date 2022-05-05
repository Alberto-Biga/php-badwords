<?php

    $paragrafo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore vitae iure atque accusantium saepe quibusdam dignissimos incidunt,
                  laudantium veniam aspernatur suscipit ut at reprehenderit consectetur maxime quos? Voluptatem, voluptatibus tenetur?
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore vitae iure atque accusantium saepe quibusdam dignissimos incidunt,
                  laudantium veniam aspernatur suscipit ut at reprehenderit consectetur maxime quos? Voluptatem, voluptatibus tenetur?';

    $parolaCensurata = ( isset($_GET['parola']) ) ? $_GET['parola'] : '' ;  
    $paragrafoCensurato = str_replace($parolaCensurata, '*' , $paragrafo);            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    
    <p>
        <?php 
            echo $paragrafo;                    
        ?>
    </p>
    <p>
        La lunghezza del paragrafo e' di <?php echo strlen($paragrafo)?> caratteri totali
    </p>  
    <p>
        Per selezionare la parola da eliminare aggiungere all'URL "  ?parola=parolaScelta  "
    </p>
     
    
    <!-- PERCHE' NON FUNZIONA??? -->
    <p>
        La parola da censurare e': <?php $parolaCensurata; ?>
    </p>


    <p>
        <?php echo str_replace($parolaCensurata, '*' , $paragrafo) ?>
    </p>
    <p>
        La lunghezza del paragrafo censurato e' di <?php echo strlen($paragrafoCensurato)?> caratteri totali
    </p>

    
</body>
</html>
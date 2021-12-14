<?php

    $nume = $_POST['num_pren'];
    $adress = $_POST['adr'];
    echo 'Clientul este: '.$nume.'<br>';
    echo 'Adresa este: '.$adress.'<br>';
    
    echo 'Produsele sunt: ';
    echo '<ul>';
    foreach ($_POST['prod'] as $pr)
        echo '<li>'.$pr.'</li>';
    echo '</ul>'
?>
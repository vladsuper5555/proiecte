<?php
    $rez = 0;
    if (isset($_POST['q1']) && $_POST['q1'] == 'corect')
        $rez += 2;
    if (isset ($_POST['q21']) && $_POST['q21'] == 'corect' && isset ($_POST['q22']) && $_POST['q22'] == 'corect' && isset ($_POST['q23']) && $_POST['q23'] == 'corect')
        $rez += 2;
    if (isset ($_POST['q3']) && $_POST['q3'] == 'corect')
        $rez += 2;
    if (isset ($_POST['q4']) && $_POST['q4'] == 'corect')
        $rez += 2; 
    if (isset ($_POST['q5']) && $_POST['q5'] == 'corect')
        $rez += 2;
    if ($_POST['sex'] == 'f')
        echo '<label> Rezultatul dumneavoastra domnisoara/doamna '.$_POST['nume'].' este de '.$rez;
    else
        echo '<label> Rezultatul dumneavoastra domnule '.$_POST['nume'].' este de '.$rez;
?>

<?php
$conexiune=mysqli_connect('localhost','root','');
mysqli_select_db($conexiune,'postuniv');

$selectie_note=mysqli_query($conexiune,'select *,avg(nota) as medie from situatie where id='.$_GET['id'].' group by id');
$inregistrare=mysqli_fetch_array($selectie_note);

echo 'Media elevului este '.round($inregistrare['medie'],2);

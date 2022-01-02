<?php

function find_name($id, $conn)
{
    $res = mysqli_query($conn, 'select * from utilizatori where id_utilizator = ' . $id . ';');
    $values = mysqli_fetch_array($res);
    return $values['nume_utilizator'] . ' ' . $values['prenume_utilizator'] . ' ' . $values['cnp_utilizator'];
}
function find_book($id, $conn)
{
    $res = mysqli_query($conn, 'select * from carti where id_carte = ' . $id);
    $values = mysqli_fetch_array($res);
    return $values['prenume_autor'] . ' ' . $values['nume_autor'] . ' ' . $values['titlul_cartii'] . ' ' . $values['anul_aparitiei'];
}
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'biblioteca');


$res = mysqli_query($conn, 'select * from imprumut');

while ($i = mysqli_fetch_array($res)) {
    echo '<form method="post" action="../back_end/stergere_imprumut.php">';
    echo find_book($i['id_carte'], $conn) . ' | ' . find_name($i['id_utilizator'], $conn) . ' | ' . $i['data_imprumut'] . ' | ' . $i['data_retur'] . ' ';

    echo '<input type = "hidden" name = "id" value = "' . $i['id_carte'] . '/' . $i['id_utilizator'] . '" />';
    echo '<input type = "submit" name = "submit" value = "Sterge" />';
    echo '</form>';
}
echo "<a href='../../biblioteca_virtuala.php'> Inapoi </a>";

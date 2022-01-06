<html>

<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, 'reciclare');

    $res = mysqli_query($conn, 'select * from firme');
    while ($i = mysqli_fetch_array($res)) {
        echo '<ul>';
        echo '<lh> Firma <b>' .  $i['nume'] . '</b> are urmatoarele produse reciclate: </lh>';
        $res2 = mysqli_query($conn, 'select nume_prod from produse where id_firma = "' . $i['id'] . '"');
        while ($k = mysqli_fetch_array($res2)) {
            echo '<li>' . $k['nume_prod'] . '</li>';
        }
        echo '</ul>';
    }
    ?>
</body>
<html>
Mediile elevilor
<ul>
    <?php
    function find_name_materie($conn, $id_materie)
    {
        $res = mysqli_query($conn, 'select denumire_disc from disciplina where id_materie = "' . $id_materie . '"');
        $res = mysqli_fetch_array($res);
        return $res['denumire_disc'];
    }

    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, 'postuniv');

    $res = mysqli_query($conn, 'select * from elev');
    while ($i = mysqli_fetch_array($res)) {
        $res1 = mysqli_query($conn, 'select * from elev where id_clasa  = " ' . $i['id_clasa'] . '"');
        while ($j = mysqli_fetch_array($res1)) {
            $res2 = mysqli_query($conn, 'select avg(nota) as media from situatie where id = "' . $j['id'] . '"');
            echo $j['nume_elev'] . ' ' . $j["prenume_elev"] . '<ul>';
            while ($k = mysqli_fetch_array($res2)) {
                echo round($k['media'], 2);
            }
            echo '</ul>';
        }
    }
    ?>

</ul>
<br><a href="index.php">Inapoi</a>
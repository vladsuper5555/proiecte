<form action="situatie_modificata.php" method="post">
    Alege nota <select name="id">
        <?php

        $conn = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($conn, 'postuniv');

        function find_res($id_mat, $conn)
        {
            $rep = mysqli_query($conn, 'select * from disciplina');
            while (true) {
                $i = mysqli_fetch_array($rep);
                if ($i['id_materie'] == $id_mat)
                    return $i['denumire_disc'];
            }
        }

        function find_res2($id, $conn)
        {
            $rep = mysqli_query($conn, 'select * from elev');
            while (true) {
                $i = mysqli_fetch_array($rep);
                if ($i['id'] == $id)
                    return $i['nume_elev'] . ' ' . $i['prenume_elev'];
            }
        }
        $res = mysqli_query($conn, 'select * from situatie');
        while ($i = mysqli_fetch_array($res))
            echo '<option value="' . $i['id'] . '//' . $i['id_materie'] . '//' . $i['data'] . '">' . find_res2($i['id'], $conn) . ' ' . find_res($i['id_materie'], $conn) . ' ' . $i['nota'] . '</option>';

        ?>
    </select>
    <br>
    Introdu nota noua
    <input type="text" name="nota_noua">
    <br>
    <input type='submit' value='Trimite'>


</form>
<br><a href="index.php">Inapoi</a>
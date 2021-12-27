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

        $res = mysqli_query($conn, 'select * from situatie');
        while ($i = mysqli_fetch_array($res))
            echo '<option value="' . $i['id'] . '">' . find_res($i['id_materie'], $conn) . ' ' . $i['nota'] . '</option>';

        ?>
    </select>
    <br>
    Introdu nota noua
    <input type="text" name="nota_noua">
    <br>
    <input type='submit' value='Trimite'>


</form>
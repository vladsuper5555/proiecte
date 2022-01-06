<html>

<body>
    <form method="post" action="./produs_sters.php">
        Alege produs pentru stergere:
        <select name='id'>
            <?php
            function find_firma($id, $conn)
            {
                $res = mysqli_query($conn, 'select nume from firme where id = "' . $id . '"');
                return mysqli_fetch_array($res)['nume'];
            }
            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, 'reciclare');

            $res = mysqli_query($conn, 'select * from produse');
            while ($i = mysqli_fetch_array($res))
                echo '<option value = "' . $i['id'] . '">' . find_firma($i['id_firma'], $conn) . ' ' . $i['nume_prod'] . '</option>';
            ?>
        </select>
        <input type="submit" name="submit" value="Trimite" />
    </form>


</body>

</html>
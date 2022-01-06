<html>

<body>
    <form method="post" action="./firma_stearsa.php">
        <select name='id'>
            <?php
            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, 'reciclare');

            $res = mysqli_query($conn, 'select * from firme');
            while ($i = mysqli_fetch_array($res))
                echo '<option value = "' . $i['id'] . '">' . $i['nume'] . '</option>';
            ?>
        </select>
        <input type='submit' name='submit' value='Trimite' />
    </form>
</body>


</html>
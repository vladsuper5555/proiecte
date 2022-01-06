<html>

<body>
    <form method="post" action="./produs_adaugat.php">
        Alege firme pentru reciclare:
        <select name='id'>
            <?php
            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, 'reciclare');

            $res = mysqli_query($conn, 'select * from firme');
            while ($i = mysqli_fetch_array($res))
                echo '<option value = "' . $i['id'] . '">' . $i['nume'] . '</option>';
            ?>
        </select>
        <br />
        Nume produs pentru reciclare:
        <input type='name' name='produs' /> <br>
        Numar produse adaugate:
        <input type='number' name='cnt' /> <br>
        <input type='submit' name='submit' value='Trimite' />
    </form>
</body>

</html>
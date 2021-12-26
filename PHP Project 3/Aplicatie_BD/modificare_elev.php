<form method="post" action="elev_modificat.php">
    Alege elevul care va fi modificat
    <select name="de_modificat" size='3'>
        <?php

        $conexiune = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($conexiune, 'postuniv');

        $selectare_clasa = mysqli_query($conexiune, "select * from elev");
        while ($inregistrare = mysqli_fetch_array($selectare_clasa))
            echo '<option value = "' . $inregistrare['id'] . '"> ' . $inregistrare['nume_elev'] . ' ' . $inregistrare['prenume_elev'] . "</option>";
        ?>
    </select>
    <br>
    Nume nou elev <input type="text" name="nume" value="" /> <br>
    Prenume nou elev <input type="text" name="prenume" value="" /> <br>
    Clasa noua elev <input type="text" name="denumire_clasa" value="" /> <br>
    <br>
    <input type="Submit" value="OK">
</form>
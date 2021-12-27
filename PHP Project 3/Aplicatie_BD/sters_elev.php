<form action='stergere_elev.php' method='get'>
    Alege elevul pentru stergere
    <select name='elev'>
        <?php

        $conexiune = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($conexiune, 'postuniv');

        $selectare_clasa = mysqli_query($conexiune, "select * from elev");
        while ($inregistrare = mysqli_fetch_array($selectare_clasa))
            echo '<option value = "' . $inregistrare['id'] . '"> ' . $inregistrare['prenume_elev'] . ' ' . $inregistrare['nume_elev'] . ' ' . "</option>";
        ?>
    </select>
    <br>
    <input type="submit" value="Trimite">
</form>
<br><a href="index.php">Inapoi</a>
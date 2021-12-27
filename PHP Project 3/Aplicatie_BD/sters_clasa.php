<form action='stergere_clasa.php' method='get'>
    Alege clasa pentru stergere
    <select name='clasa'>
        <?php

        $conexiune = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($conexiune, 'postuniv');

        $selectare_clasa = mysqli_query($conexiune, "select * from clasa");
        while ($inregistrare = mysqli_fetch_array($selectare_clasa))
            echo '<option value = "' . $inregistrare['id_clasa'] . '"> ' . $inregistrare['denumire'] . "</option>";
        ?>
    </select>
    <br>
    <input type="submit" value="Trimite">
</form>
<br><a href="index.php">Inapoi</a>
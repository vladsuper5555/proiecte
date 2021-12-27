<form method="post" action="clasa_modificata.php">
    Alege clasa care va fi modificata
    <select name="de_modificat" size='3'>
        <?php

        $conexiune = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($conexiune, 'postuniv');

        $selectare_clasa = mysqli_query($conexiune, "select * from clasa");
        while ($inregistrare = mysqli_fetch_array($selectare_clasa))
            echo '<option value = "' . $inregistrare['id_clasa'] . '"> ' . $inregistrare['denumire'] . "</option>";
        ?>
    </select>
    <br>
    Nume nou al clasei <input type="text" name="denumire_clasa" value="" />
    <br>
    <input type="Submit" value="OK">
</form>
<br><a href="index.php">Inapoi</a>
<form method="post" action="disciplina_modificata.php">
    Alege materia care va fi modificata
    <select name="de_modificat" size='3'>
        <?php

        $conexiune = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($conexiune, 'postuniv');

        $selectare_disciplina = mysqli_query($conexiune, "select * from disciplina where id_materie");
        while ($inregistrare = mysqli_fetch_array($selectare_disciplina))
            echo '<option value = "' . $inregistrare['id_materie'] . '"> ' . $inregistrare['denumire_disc'] . "</option>";
        ?>
    </select>
    <br>
    Nume disciplina noua <input type="text" name="denumire_disciplina" value="" />
    <br>
    <input type="Submit" value="OK">

</form>
<br><a href="index.php">Inapoi</a>
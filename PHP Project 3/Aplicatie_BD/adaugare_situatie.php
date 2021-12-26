<form method="post" action="situatie_adaugata.php">
    <div>
        Materie <select name='materie' size="3" style="margin: 5px">
            <?php
            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, 'postuniv');

            $materii = mysqli_query($conn, 'select * from disciplina');
            while ($i = mysqli_fetch_array($materii))
                echo "<option value = '" . $i['id_materie'] . "'>" . $i['denumire_disc'] . "</option>";

            ?>
        </select>
    </div>
    <div>
        Data <input type='date' name='data_nota' />
    </div>
    <select name='nota' size='3'>
        <?php
        for ($i = 1; $i <= 10; ++$i)
            echo '<option value = "' . $i . '">' . $i . '</option>';
        ?>
</form>
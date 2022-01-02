<html>
<form method="post" action="../back_end/modificare_utilizator.php">
    Alege elevul caruia sa ii modifici datele
    <select name='elev'> <?php
                            $conn = mysqli_connect('localhost', 'root', '');
                            mysqli_select_db($conn, 'biblioteca');
                            $res = mysqli_query($conn, 'select * from utilizatori');
                            while ($i = mysqli_fetch_array($res))
                                echo '<option value = "' . $i['id_utilizator'] . '">' . $i['nume_utilizator'] . ' ' . $i['prenume_utilizator'] . $i['cnp_utilizator'] . '</option>';
                            ?>
    </select> <br>
    Nume nou:
    <input type='text' name='nume' /> <br>
    Prenume nou:
    <input type='text' name='prenume' /> <br>
    CNP nou:
    <input type='text' name='cnp' /> <br>

    <input type='submit' value='Continua'>
</form>
<a href='../../biblioteca_virtuala.php'> Inapoi </a>

</html>
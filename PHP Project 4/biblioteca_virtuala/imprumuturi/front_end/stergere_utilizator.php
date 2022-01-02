<html>
<form method="post" action="../back_end/stergere_utilizator.php">
    Alege elevul pentru stergere
    <select name='elev'> <?php
                            $conn = mysqli_connect('localhost', 'root', '');
                            mysqli_select_db($conn, 'biblioteca');
                            $res = mysqli_query($conn, 'select * from utilizatori');
                            while ($i = mysqli_fetch_array($res))
                                echo '<option value = "' . $i['id_utilizator'] . '">' . $i['nume_utilizator'] . ' ' . $i['prenume_utilizator'] . $i['cnp_utilizator'] . '</option>';
                            ?>
    </select> <br>
    <input type='submit' value='Continua'>
</form>

</html>
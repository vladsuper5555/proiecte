<html>
<form method="post" action="../back_end/stergere_carte.php">
    Alege cartea pentru stergere
    <select name='carte'> <?php
                            $conn = mysqli_connect('localhost', 'root', '');
                            mysqli_select_db($conn, 'biblioteca');
                            $res = mysqli_query($conn, 'select * from carti');
                            while ($i = mysqli_fetch_array($res))
                                echo '<option value = "' . $i['id_carte'] . '">' . $i['nume_autor'] . ' ' . $i['prenume_autor'] . ' ' . $i['titlul_cartii'] . ' ' . $i['anul_aparitiei'] . '</option>';
                            ?>
    </select> <br>
    <input type='submit' value='Continua'>
</form>
<a href='../../biblioteca_virtuala.php'> Inapoi </a>

</html>
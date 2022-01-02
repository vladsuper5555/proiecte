<html>
<form method="post" action="../back_end/modificare_carte.php">
    Alege cartea caruia sa ii modifici datele
    <select name='carte'> <?php
                            $conn = mysqli_connect('localhost', 'root', '');
                            mysqli_select_db($conn, 'biblioteca');
                            $res = mysqli_query($conn, 'select * from carti');
                            while ($i = mysqli_fetch_array($res))
                                echo '<option value = "' . $i['id_carte'] . '">' . $i['nume_autor'] . ' ' . $i['prenume_autor'] . ' ' . $i['titlul_cartii'] . ' ' . $i['anul_aparitiei'] . '</option>';
                            ?>
    </select> <br>
    Nume nou:
    <input type='text' name='nume' /> <br>
    Prenume nou:
    <input type='text' name='prenume' /> <br>
    Titlu nou:
    <input type='text' name='titlu' /> <br>
    An nou:
    <input type='number' name='an' /> <br>
    <input type='submit' value='Continua'>
</form>

</html>
<form method="post" action="../back_end/adaugare_imprumut.php">
    Carte:
    <select name='carte'> <?php
                            $conn = mysqli_connect('localhost', 'root', '');
                            mysqli_select_db($conn, 'biblioteca');
                            $res = mysqli_query($conn, 'select * from carti');
                            while ($i = mysqli_fetch_array($res))
                                echo '<option value = "' . $i['id_carte'] . '">' . $i['nume_autor'] . ' ' . $i['prenume_autor'] . ' ' . $i['titlul_cartii'] . ' ' . $i['anul_aparitiei'] . '</option>';
                            ?>
    </select> <br>
    Utilizator:
    <select name='elev'> <?php
                            $conn = mysqli_connect('localhost', 'root', '');
                            mysqli_select_db($conn, 'biblioteca');
                            $res = mysqli_query($conn, 'select * from utilizatori');
                            while ($i = mysqli_fetch_array($res))
                                echo '<option value = "' . $i['id_utilizator'] . '">' . $i['nume_utilizator'] . ' ' . $i['prenume_utilizator'] . ' ' . $i['cnp_utilizator'] . '</option>';
                            ?>
    </select> <br>
    Imprumut:
    <input type='date' name='out' /> <br>
    Retur:
    <input type='date' name='in' /> <br>
    <input type='submit' value='Trimite' />
</form>
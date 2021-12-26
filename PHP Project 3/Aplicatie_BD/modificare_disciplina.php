<?php
session_start();
$_SESSION['cod'] = $_GET['cod'];
?>
<form method="post" action="disciplina_modificata.php">
    <?php
    $conexiune = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conexiune, 'postuniv');

    $selectare_disciplina = mysqli_query($conexiune, "select * from disciplina where id_materie=" . $_GET['cod']);
    $inregistrare = mysqli_fetch_array($selectare_disciplina);

    ?>
    Nume disciplina <input type="text" name="denumire_disciplina" value="<?php echo $inregistrare['denumire_disc']; ?>">
    <input type="Submit" value="OK">

</form>
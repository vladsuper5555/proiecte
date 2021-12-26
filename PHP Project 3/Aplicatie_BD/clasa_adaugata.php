<?php
$conexiune = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexiune, "postuniv");

$sql = "insert into clasa(denumire) values('" . $_POST['nume'] . "')";
mysqli_query($conexiune, $sql);


echo "<meta http-equiv='refresh' content='0;url=adaugare_clasa.php'>";

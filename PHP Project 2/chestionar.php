<?php
    $num = $_POST['nume_pren'];
    $sex = $_POST['sex'];
?>
<form action = 'final.php' method = "POST">
    1. Procesorul de text Word permite creeare de tabele? <br>
    <input type = 'radio' value = 'corect' name = 'q1'> DA </input> <br>
    <input type = 'radio' value = 'incorect' name = 'q1'> NU </input> <br>
    2. Care dintre aplicatii permite crearea de tabele? <br>
    <input type = 'checkbox' value = 'corect' name = 'q21'> Word </input> <br>
    <input type = 'checkbox' value = 'corect' name = 'q22'> Excel</input> <br>
    <input type = 'checkbox' value = 'corect' name = 'q23'> PowerPoint </input> <br>
    3. In word, formulele se recalculeaza automat? <br>
    <input type = 'radio' value = 'incorect' name = 'q3'> DA </input> <br>
    <input type = 'radio' value = 'corect' name = 'q3'> NU </input> <br>
    4. O prezentare PowerPoint porneste cu tasta ... <br>
    <input type = 'radio' value = 'corect' name = 'q4'> F5 </input> <br>
    <input type = 'radio' value = 'incorect' name = 'q4'> F1 </input> <br>
    <input type = 'radio' value = 'incorect' name = 'q4'> F6 </input> <br>
    5. Adresa $A$5 este ... <br>
    <input type = 'radio' value = 'corect' name = 'q5'> adresa relativa </input> <br>
    <input type = 'radio' value = 'incorect' name = 'q5'> adresa absoluta </input> <br>
    <input type = 'submit' value = 'Calculeaza Rezultatul' name = 'Submit'>
    <input type = 'hidden' value = "<?php echo $num?>" name = 'nume'> </input>
    <input type = 'hidden' value = "<?php echo $sex?>" name = 'sex'> </input>
</form>
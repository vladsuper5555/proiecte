<?php
    if (isset($_POST['submit']))
    {
        if (!isset($_POST['participate']))
            echo '<label> Nu ati selectat nici o varianta !</label>';
        else if ($_POST['participate'] == 'nu')
            echo '<label> Ne pare rau ca nu doriti sa participati </label>';
        else
            header('Location: initial.php');
    }
?>

<div>
    <form method="post">
        Doriti sa faceti un test ? <br>
        <input type = "radio" name="participate" value = 'da'> DA </input> <br>
        <input type = "radio" name="participate" value = 'nu'> NU </input> <br>
        
        <input type = 'submit' name = 'submit' value = 'Continua'> </input>
    </form>
</div>
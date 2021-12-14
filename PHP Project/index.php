
<form method="post" action = "list.php">
    <div id = 'nume_si_prenume'> 
        Numele si prenumele dumneavoastra:
        <input type = 'text' value = '' name = 'num_pren'>
    </div>
    <div id = 'adresa'>
        Adresa:
        <input type = text value = '' name = 'adr'>       
    </div>
    <div id = 'produse'>
        Selectati unul sau mai multe produse
        <select name = 'prod[]' multiple size = 4>
            <option value = 'Televizor'> Televizor </option>
            <option value = 'CD-Player'> CD-Player </option> 
            <option value = 'Calculator'> Calculator </option>
            <option value = 'Unitate centrala'> Unitate centrala </option>
            <option value = 'Memorii'> Memorii </option> 
    </select>
    <div id = 'ss'>
        <input type = 'submit' name = 'submit' value = 'Submit'>
    </div>
</form>
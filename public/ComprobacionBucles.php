<?php
$numeros = fgets(STDIN);
$limite = explode(" ",trim($numeros));
?>
<table border="solid 1px">
<?php for ($i=0; $i < $limite[0]; $i++) ?>
    <tr>
<?php for ($j=0; $j < $limite[1] ; $i++) ?>
        <td></td>
<?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>

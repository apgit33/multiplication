<?php
session_start();
$_SESSION['nav'] = 'TABLE 3';

include 'header.php';

echo "
<section class='table-x table3'> 
    <header>
        <h2>Affichage de la table de 3</h2>
    </header>
    <div class='ligne-x'>
        <header>
            <h3>Table de 3</h3>
        </header>
";

for($i=1;$i <= 10;$i++) {
    echo "
    <p class='multiplication'>3 x $i = ".(3*$i)."</p>";
}

echo " 
    </div>
</section>";
include 'footer.php';

?>
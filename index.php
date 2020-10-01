<?php
session_start();
$_SESSION['nav']= 'HOME';

include 'header.php';

echo "
<section class='intro'> 
    <header>
        <h1>Les Tables de Multiplications</h1>
    </header>
    <p class='text-intro'>Tout ce qu'il vous faut pour réviser ou apprendre vos tables, pour les grands et les petits</p>

    <ul>
        <li>Page 1 : Table de 3</li>
        <li>Page 2 : Liste Tables</li>
        <li>Page 3 : Checkbox Tables</li>
        <li>Page 4 : Mode de révision simple</li>
        <li>Page 5 : Mode de révision simple js</li>
        <li>Page 6 : Super mode de révision</li>
        <li>Page 7 : Super mode de révision - ajax</li>
    </ul>
</section>
";
include 'footer.php';

?>
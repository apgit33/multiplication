<?php

session_start();
$_SESSION['nav']= 'LISTE TABLE';


$choix = (isset($_POST['table'])) ? $_POST['table']:  1;
$table ="
  <div class='ligne-x'>
    <header>
      <h3>Table de $choix</h3>
    </header>";

include 'header.php';



echo "
<section class='table-x'>
  <header>
    <h2>Choix de la table</h2>
  </header>
  <form action='liste-table.php' method='post' class='d-flex jc-center'>
    <div class='select'>
        <select name='table' class='select-table'>"; 
    
  for($i=1; $i<=10; $i++) {

    $selected = ($i == $choix) ? 'selected' : '';

    echo "
          <option value=$i $selected>Table de $i</option>";

    $table .= "
    <p class='multiplication'>$choix x $i = ".$choix*$i."</p>";
  }

echo "
        </select>
      </div>
      <input type='submit' value='SHOW' class='button'>
    </form>
    $table
  </div>
</section>
";

include 'footer.php';
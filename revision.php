<?php
session_start();
$_SESSION['nav']= 'REVISION';

include 'header.php';

$choix = (isset($_POST['table'])) ? $_POST['table']:  1;
$rand = rand(1,10);
$resultat = $choix*$rand;

echo "
<section class='table-x'>     
  <header>
    <h2>Mode de révision</h2>
  </header>
  <form action='revision.php' method='post' class='d-flex jc-center'>
    <div class='select'>
      <select name='table'>
    "; 
    
  for($i=1; $i<=10; $i++) {

    $selected = ($i == $choix) ? 'selected' : '';

    echo "<option value='$i' $selected>Table de $i</option>\n";

  }

  echo "
  </select>
</div>
<input type='submit' value='SHOW' class='button'>
  </form>
<div class='ligne-x'>
  <form action='revision.php' method='post' name='revision' class='d-flex fd-column ai mr-t-0'> 
          <p class='question'>Combien font $choix x $rand ?</p>
          <input type='number' id='number' name='number' required>
          <input name='resultat' type='hidden' value='$resultat'>
          <input type='submit' value='OK' id='validation' name='valider' class='button'>
  </form>
</div>

";

if(isset($_POST['valider'])){  
  $validation = ($_POST['number']==$_POST['resultat']) ?"<p class='reponse_texte'>Félicitation, t'es un génie !</p>": "<p class='reponse_texte'>Dommage, mauvaise réponse !</p>";
} else {
  $validation = "";
}
echo "$validation</section>";
include 'footer.php';
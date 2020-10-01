<?php
session_start();
$_SESSION['nav']= 'REVISION +';

include 'header.php';


echo "
<section class='table-x'>
  <header>
    <h2>Mode de révision - js</h2>
  </header>
  <form action='revision-js.php' method='post' id='table-page5' class='d-flex jc-center'>
    <div class='select'>
      <select name='table'>
"; 
    
  for($i=1; $i<=10; $i++) {
    echo "<option value='$i'>Table de $i</option>\n";
  }

  echo "
      </select>
    </div>
    <input type='submit' value='SHOW' class='button'>
  </form>
  <div class='revision ligne-x'>
    <form action='revision-js.php' method='post' id='revision-page5' class='d-flex fd-column ai mr-t-0'> 
      <p class='question'></p>
      <input type='number' id='number' name='number' required>
      <input type='submit' value='OK' id='validation' class='button'>
    </form>
  </div>
  <p class='reponse_texte'></p>
</section>
";

include 'footer.php';


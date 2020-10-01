<?php
session_start();
$_SESSION['nav']= 'CHECKBOX TABLES';

$choix = (isset($_POST['table'])) ? $_POST['table']:  [];
$content ='';


include 'header.php';


echo "
<section class='table-x'>
  <header>
    <h2>Choix des tables</h2>
  </header>
  <form action='checkbox-tables.php' method='post' class='d-flex fd-column ai'>
    <div class='d-flex jc-center check-list'>
      <div class='groupe-choix d-flex fd-column'>"; 
    
  for($i=1; $i<=10; $i++) {
    echo "
        <input type='checkbox' id ='table$i' name='table[]' value=$i>
        <label for='table$i'>Table de $i</label>";
    if(($i % 2 == 0) && ($i!=10)) { echo "\n\t</div>\n\t<div class='groupe-choix d-flex fd-column'>";}
  }
  echo "
    </div>
  </div>
  <input type='submit' value='SHOW' class='button'>
</form>
  <div class='d-flex wrap'>";
  
foreach ($choix as $table) {

    for($i=1; $i<=10; $i++) {
        $content .= "<p class='multiplication'>$table x $i = ".$table*$i."</p>\n";
    }
    echo "   
    <div class='ligne-x'>
      <header>
        <h3 class='mr-t-0'>Table de $table</h3>
      </header>
      $content
    </div>";
    $content ='';  
}

echo "
  </div>
</section>
 ";
include 'footer.php';
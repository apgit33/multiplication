<?php
session_start();
$score = 0;
$faute = '';
$content ='';
for($i=0; $i<=4; $i++) {
    $r1 = $_POST['result'.$i];
    $r2 = $_POST['result-bis'.$i];
    if (($r1*$r2) == $_POST['rep'.$i]) {
        $score++;
    } else {
      $faute .= "\n\t<p>Vous n'avez pas trouvé $r1 x $r2";
      $faute .= " , la bonne réponse était ".$r1*$r2;
      $faute .= " (votre réponse : ".$_POST['rep'.$i].")</p>";
    }
}
$content .= "\n\t<p class='reponse_texte'>Félicitation votre score est de $score/5</p>";
if ($score != 5) {$content .= "\n\t<p>Apprenez de vos erreurs : </p>$faute\n";} 

echo $content;
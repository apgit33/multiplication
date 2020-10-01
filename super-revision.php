<?php
session_start();
$_SESSION['nav']= 'SUPER REVISION';

include 'header.php';

  
echo "
<section class='table-x'>
    <header>
        <h2>Super mode : 5 questions</h2>
    </header>
        <div class='ligne-x'>
            <form action='super-revision.php' method='post' class='d-flex fd-column ai'>";
            for($i=0; $i<=4; $i++) {
                $r1 = rand(1,10);
                $r2 = rand(1,10);
                echo"
                <div class='groupe'>
                    <p class='question'>Combien font $r1 x $r2 ? :</p>
                    <input type='number' name='rep$i' required/>
                    <input type='hidden' name='result$i' value='".$r1*$r2."'/>
                </div>";
            }
echo "
                <input type='submit' name='valider' value='OK' class='button'>
            </form>
        </div>
";
if(isset($_POST['valider'])){ 
    $score = 0;
    for($i=0; $i<=4; $i++) {
        if ($_POST['rep'.$i] == $_POST['result'.$i])
        { $score++ ;}
    }

    echo "<p class='reponse_texte'>Score final : $score/5</p>";
}
echo "\n</section>";
include 'footer.php';


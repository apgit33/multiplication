<?php
session_start();
$_SESSION['nav']= 'SUPER REVISION AJAX';

include 'header.php';
  
echo "
<section class='table-x'>
    <header>
        <h2>Super mode : 5 questions - ajax</h2>
    </header>
    <div class='ligne-x'>
        <form action='super-revision-ajax.php' method='post' id='form7' class='d-flex fd-column ai'>";
for($i=0; $i<=4; $i++) {
    echo"
            <div class='groupe'>
                <p id='question$i' class='question'></p>
                <div id='reponse$i' class='reponse'></div>
            </div>";
}
echo "
            <input type='submit' name='valider' value='OK' class='button'>
        </form>
    </div>
    <div class='score'></div>
</section>";

include 'footer.php';
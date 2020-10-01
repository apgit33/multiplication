<?php
include 'header.php';

  
echo "<form action='page6.php' method='post' id='form6'>";
for($i=0; $i<=4; $i++) {
    echo"
    <p><span class='question$i'></span> : <input type='number' name='rep$i' required/></p>";
    
}
echo "\n
<p><input type='submit' name='valider' value='OK'></p>
</form>\n

<p class='score'></p>";

include 'footer.php';



// Page 6 
var resultatQ = [];

function randomMasterQuestion (a,i) {
    let y = (Math.floor(Math.random() * 10) + 1);
    return "Combien font <span id='a"+i+"'>"+a+"</span> x <span id='y"+i+"'>"+y+"</span> ?";
}
function newQ() {
    
    for(let i=0; i<=4; i++) {
        $(".question"+i).html(randomMasterQuestion ((Math.floor(Math.random() * 10) + 1),i));
        resultatQ[i] = $("#a"+i).html()*$("#y"+i).html();
        console.log(resultatQ[i]);
        
    }
}

$(function() { //shorthand document.ready function

    newQ();
    
    $('#form6').on('submit', function(e) {
        e.preventDefault();  //prevent form from submitting
        let data = $("#form6").serializeArray();
        let score = 0;

        $.each( data, function( index, valeur ){
            if (valeur.value==resultatQ[index]) {score++;}
        });
        
        $(".score").html("Félicitations, votre score est de "+score+" sur 5");
        this.reset();

        newQ();
    });
});

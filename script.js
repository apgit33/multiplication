function randomQuestion (a) {
    const x = (Math.floor(Math.random() * 10) + 1);
    return "Combien font "+a+" x <span id='x'>"+x+"</span> ?";
}

function reset() {
    this.trigger("reset");
}

var resultat;
var tableChoix;

// Page 5

$(function() {
    
    $('.revision').hide();

    $('#table-page5').on('submit', function(e) {
        e.preventDefault();
        let data = $("#table-page5").serializeArray();
        tableChoix = data[0].value;

        $('.revision').show();
        $('.question').html(randomQuestion(tableChoix));

        resultat = tableChoix*($("#x").html()); 
    });

    $('#revision-page5').on('submit', function(e) {
        e.preventDefault(); 
        let data = $("#revision-page5 :input").serializeArray();
       
        if (data[0].value == resultat) {
            $(".reponse_texte").html("Félicitation, t'es un génie !");
            $('.question').html(randomQuestion(tableChoix));
            resultat = tableChoix*($("#x").html());
            this.reset();

        } else { 
            $(".reponse_texte").html("Dommage, mauvaise réponse !");
        }

    });
});











// Page 7 
    var resultatQ = [];

    //fonction crée une question random
    // @return question (string)
    function randomMasterQuestion (a,i) {
        let y = (Math.floor(Math.random() * 10) + 1);
        return "Combien font <span id='a"+i+"'>"+a+"</span> x <span id='y"+i+"'>"+y+"</span> ? : ";
    }

    // Création de 5 questions random
    // les questions sont injectées directement dans le HTML
    function newQ() {
        
        for(let i=0; i<=4; i++) {
            $("#question"+i).html(randomMasterQuestion ((Math.floor(Math.random() * 10) + 1),i));
            let r1 = $("#a"+i).html();
            let r2 = $("#y"+i).html();
            resultatQ[i] = r1*r2;
            let content = "<input type='number' name='rep"+i+"' required /><input type='hidden' name='result"+i+"' value='"+r1+"'/><input type='hidden' name='result-bis"+i+"' value='"+r2+"'/>";
            $("#reponse"+i).html(content);
        }    
    }

    $(function() {
        
        newQ();
        
        $('#form7').on('submit', function(e) {
            e.preventDefault();
            let donnees = $("#form7").serializeArray();
            console.log(resultatQ);

            $.post(
                'traitement.php',
                donnees,
                function(donnees) {
                    $('.score').html(donnees);
                }
            );
            this.reset();
            newQ();
        });
    });



var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if ((document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) && (screen.width<=1920)){
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 

//overflow bug chrome, du coup l'animation css ne sert plus
$(function() {
    
    (screen.width<=927.8896) ? $('#menu').hide() : '';
    
    $('#burger').on('click',function() {
        ($('#burger').prop('checked')) ? $('#menu').show() : $('#menu').hide();
    });
});
<script>
function tabulateAnswers() {
    var c1score = 0;
    var c2score = 0;


    var choices = document.getElementById('input');

    for(i=0; i<choices.length; i++){
        if(choices[i].checked){
            if(choices[i].value=='c1'){
                c1score = c1score+ 1;
            }
            if(choices[i].value=='c2'){
                c2score = c2score + 1;
            }
        }
    }

    var maxscore= Math.max(c1score,c2score);

    var answerbox = document.getElementById('answer');
    switch(questions){
        case 'q1':
            if(c1score == maxscore){
                answer.innerHTML = "You can consider studing actuarial Science "
            }
        case 'q2':
            if (c1score==maxscore){
                answer.innerHTML = "Businness studies"
            }


    }}
</script>
e<?php
  session_start();
?>
<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Șiruri de caractere</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class='container'>

   <header>
	<img src="logo.png" alt="robi's logo">

	   <nav>
	   	 <ul>
	   	 	<li><a href="index.php">INTRODUCERE</a></li>
	   	 	<li><a href="functii.php">FUNCȚII</a></li>
	   	 	<li><a href="probleme_rezolvate.php">PROBLEME REZOLVATE</a></li>
	   	 	<li><a href="probleme_propuse.php">PROBLEME PROPUSE</a></li>
	   	 	<li><a href="teste.php">TEST</a></li>
	   	 	<li><a href="contact.php">CONTACT</a></li>
        <?php 
          if(!isset($_SESSION['id']))
            echo '<li><a  href="signup.php">LOGIN</a></li>';
          else echo '<li><a  href="log_out.php">LOGOUT</a></li>';
        ?>
	   	 </ul>
           
		
	  </nav>

   </header>

</div>
<div id="quiz"></div>
				<button id="submit">Submit</button>
				<div id="results" style="font-size :30px;margin-bottom: 25px"></div>



<?php
    $servername = "localhost";

  $username = "root";

  $password = "";

  $dbname = "proiect";

  $conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
  $sql = "SELECT * FROM teste WHERE id=$_GET[id]";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $intrebari = explode("!",$row['intrebari']);
  $raspunsuri = explode("!",$row['raspunsuri']);
  $corecte = $row['corecte'];



?>

<a style="display:none" id="fisier" href="" download>DESCARCA TEST-UL</a>




</body>
<script>
  

  var myQuestions = [
  {
    question: "1.<?php echo $intrebari[0] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[0] ?>',
      b: '<?php echo $raspunsuri[1] ?>',
      c: '<?php echo $raspunsuri[2] ?>'
    },
    correctAnswer: '<?php echo $corecte[0] ?>'
  },
  {
    question: "2.<?php echo $intrebari[1] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[3] ?>',
      b: '<?php echo $raspunsuri[4] ?>',
      c: '<?php echo $raspunsuri[5] ?>'
    },
    correctAnswer: '<?php echo $corecte[1] ?>'
  },
  {
    question: "3.<?php echo $intrebari[2] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[6] ?>',
      b: '<?php echo $raspunsuri[7] ?>',
      c: '<?php echo $raspunsuri[8] ?>'
    },
    correctAnswer: '<?php echo $corecte[2] ?>'
  },
  {
    question: "4.<?php echo $intrebari[3] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[9] ?>',
      b: '<?php echo $raspunsuri[10] ?>',
      c: '<?php echo $raspunsuri[11] ?>'
    },
    correctAnswer: '<?php echo $corecte[3] ?>'
  },
  {
    question: "5.<?php echo $intrebari[4] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[12] ?>',
      b: '<?php echo $raspunsuri[13] ?>',
      c: '<?php echo $raspunsuri[14] ?>'
    },
    correctAnswer: '<?php echo $corecte[4] ?>'
  },
  {
    question: "6.<?php echo $intrebari[5] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[15] ?>',
      b: '<?php echo $raspunsuri[16] ?>',
      c: '<?php echo $raspunsuri[17] ?>'
    },
    correctAnswer: '<?php echo $corecte[5] ?>'
  },
  {
    question: "7.<?php echo $intrebari[6] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[18] ?>',
      b: '<?php echo $raspunsuri[19] ?>',
      c: '<?php echo $raspunsuri[20] ?>'
    },
    correctAnswer: '<?php echo $corecte[6] ?>'
  },
  {
    question: "8.<?php echo $intrebari[7] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[21] ?>',
      b: '<?php echo $raspunsuri[22] ?>',
      c: '<?php echo $raspunsuri[23] ?>'
    },
    correctAnswer: '<?php echo $corecte[7] ?>'
  },
  {
    question: "9.<?php echo $intrebari[8] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[24] ?>',
      b: '<?php echo $raspunsuri[25] ?>',
      c: '<?php echo $raspunsuri[26] ?>'
    },
    correctAnswer: '<?php echo $corecte[8] ?>'
  },
  {
    question: "10.<?php echo $intrebari[9] ?>?",
    answers: {
      a: '<?php echo $raspunsuri[27] ?>',
      b: '<?php echo $raspunsuri[28] ?>',
      c: '<?php echo $raspunsuri[29] ?>'
    },
    correctAnswer: '<?php echo $corecte[9] ?>'
  }
];
console.log(myQuestions);
var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');
generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);
function generateQuiz(questions, quizContainer, resultsContainer, submitButton){
  function showQuestions(questions, quizContainer){
    var output = [];
    var answers;
    for(var i=0; i<questions.length; i++){
      answers = [];
      // Pentru fiecare raspuns valabil adaugam un buton radio
      for(letter in questions[i].answers){
        answers.push(
          '<label>'
            + '<input type="radio" name="question'+i+'" value="'+letter+'">'
            + letter + ': '
            + questions[i].answers[letter]
          + '</label>'
        );
      }
      // Pentru fiecare intrebare si raspuns afisam
      output.push(
        '<div class="question">' + questions[i].question + '</div>'
        + '<div class="answers">' + answers.join("<br>") + '</div>'
      );
    }
    quizContainer.innerHTML = output.join('');
  }
  function showResults(questions, quizContainer, resultsContainer){
    // gather answer containers from our quiz
    var answerContainers = quizContainer.querySelectorAll('.answers');
    var userAnswer = '';
    var fisier = '';
    
    var file = document.querySelector('#fisier');
    
    var quiz = document.querySelector('#quiz');
    for ( var i = 0 ; i < quiz.children.length ; i+=2)
    {
      var intrebare  = quiz.children[i];
      var raspunsuri = quiz.children[i+1];
      fisier += intrebare.textContent + '\n';
      var variante = raspunsuri.querySelectorAll('label');
      var selectat = raspunsuri.querySelector('input:checked').value;
      var corect = questions[i/2].correctAnswer;

      for( var j = 0 ; j < 3 ; j++)
      {
        fisier += variante[j].textContent + '\n';
      }
      fisier += 'Raspunsul tau : ' + selectat + '\n' + 'Raspunsul corect: ' + corect + '\n';

    }
    file.href = 'data:application/octet-stream,' + encodeURIComponent(fisier);
    file.download = 'intrebari.txt';
    file.style.display='block';

    var numCorrect = 0;
    for(var i=0; i<questions.length; i++){
      userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
      // Raspuns Corect Verde
      if(userAnswer===questions[i].correctAnswer){
        numCorrect++;
        answerContainers[i].style.color = 'lightgreen';
      }
      // Raspuns Gresit sau Gol Rosu
      else{
        answerContainers[i].style.color = 'red';
      }
    }
    // Afisarea Notei+Mesaj
	if(numCorrect<=4){
    resultsContainer.innerHTML ='Ai obținut nota ' + numCorrect + '.' + 'Trebuie sa inveti mai mult!';
	}
	else if(numCorrect<=8){
    resultsContainer.innerHTML ='Ai obținut nota ' + numCorrect + '.' + 'Esti pe drumul cel bun , mai reia chestiunile pe care nu le stii!';
	}
	else {
    resultsContainer.innerHTML ='Ai obținut nota ' + numCorrect + '.' + 'Felicitari!';
	}
  fisier += 'Ai obtinut nota : ' + numCorrect;
  file.href = 'data:application/octet-stream,' + encodeURIComponent(fisier);
  file.download = 'intrebari.txt';
  file.style.display='block';
  }
  // Afisarea Intrebarilor
  showQuestions(questions, quizContainer);
  // Afisarea Rezultatului
  submitButton.onclick = function(){
    showResults(questions, quizContainer, resultsContainer);
  }
}


</script>


</html>
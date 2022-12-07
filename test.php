<?php
   session_start();
   if(isset($_SESSION['id']) && $_SESSION['status'] != 'admin' )
      header("Location:index.php");
   else if(!isset($_SESSION['id']))
      header("Location:index.php");
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
<br>
<form method="POST" action ="teste_sql.php">
    <input type="text"  name="intrebare1" placeholder="Intrebarea 1" ><br>
    <input type="text" class="varianta" name="raspuns11" placeholder="a)"><br>
    <input type="text" class="varianta" name="raspuns12" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns13" placeholder="c)" ><br>
    <p>Selecteaza raspunsul corect:</p>
    <input type="checkbox"  name="corect_a1" >a
    <input type="checkbox"  name="corect_b1" >b
    <input type="checkbox"  name="corect_c1" >c<br>

    <input type="text"  name="intrebare2" placeholder="Intrebarea 2" ><br>
    <input type="text" class="varianta" name="raspuns21" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns22" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns23" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a2" >a
    <input type="checkbox"  name="corect_b2" >b
    <input type="checkbox"  name="corect_c2" >c<br>

    <input type="text"  name="intrebare3" placeholder="Intrebarea 3" ><br>
    <input type="text" class="varianta" name="raspuns31" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns32" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns33" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a3" >a
    <input type="checkbox"  name="corect_b3" >b
    <input type="checkbox"  name="corect_c3" >c<br>

    <input type="text"  name="intrebare4" placeholder="Intrebarea 4" ><br>
    <input type="text" class="varianta" name="raspuns41" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns42" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns43" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a4" >a
    <input type="checkbox"  name="corect_b4" >b
    <input type="checkbox"  name="corect_c4" >c<br>

    <input type="text"  name="intrebare5" placeholder="Intrebarea 5" ><br>
    <input type="text" class="varianta" name="raspuns51" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns52" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns53" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a5" >a
    <input type="checkbox"  name="corect_b5" >b
    <input type="checkbox"  name="corect_c5" >c<br>

    <input type="text"  name="intrebare6" placeholder="Intrebarea 6" ><br>
    <input type="text" class="varianta" name="raspuns61" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns62" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns63" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a6" >a
    <input type="checkbox"  name="corect_b6" >b
    <input type="checkbox"  name="corect_c6" >c<br>

    <input type="text"  name="intrebare7" placeholder="Intrebarea 7" ><br>
    <input type="text" class="varianta" name="raspuns71" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns72" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns73" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a7" >a
    <input type="checkbox"  name="corect_b7" >b
    <input type="checkbox"  name="corect_c7" >c<br>

    <input type="text"  name="intrebare8" placeholder="Intrebarea 8" ><br>
    <input type="text" class="varianta" name="raspuns81" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns82" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns83" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a8" >a
    <input type="checkbox"  name="corect_b8" >b
    <input type="checkbox"  name="corect_c8" >c<br>

    <input type="text"  name="intrebare9" placeholder="Intrebarea 9" ><br>
    <input type="text" class="varianta" name="raspuns91" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns92" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns93" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a9" >a
    <input type="checkbox"  name="corect_b9" >b
    <input type="checkbox"  name="corect_c9" >c<br>

    <input type="text"  name="intrebare10" placeholder="Intrebarea 10" ><br>
    <input type="text" class="varianta" name="raspuns101" placeholder="a)" ><br>
    <input type="text" class="varianta" name="raspuns102" placeholder="b)" ><br>
    <input type="text" class="varianta" name="raspuns103" placeholder="c)" ><br>
    <input type="checkbox"  name="corect_a10" >a
    <input type="checkbox"  name="corect_b10" >b
    <input type="checkbox"  name="corect_c10" >c<br>
    <br>

    <input type="submit" class="submit" name="TRIMITE">

</form>

</div>


</body>


</html>
<?php  ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html  >
<head>
<title>BLACK'n'GREEN</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
   
<div id="pagewidth">
  <div id="header">
    <h1 id="logo">FORMULARIO</h1>
    <h2 id="slogan">PARA PROFESORES</h2>
  </div>

  <div id="wrapper" class="clearfix">
    <div id="twocols" class="clearfix">
      <div id="maincol">
       <form method="post" >
        
          <h2>TIPO DE CLASE</h2>
        
        
        <label for="prof">Nota1</label><br>
        <input type="radio" name="r1"  value="2">2
        <input type="radio" name="r1"  value="3">3
        <input type="radio" name="r1" value="4">4
        <input type="radio" name="r1" value="5">5 <br>
        <label for="prof">Nota2</label><br>
        <input type="radio" name="r2" value="2">2
        <input type="radio" name="r2" value="3">3
        <input type="radio" name="r2" value="4">4
        <input type="radio" name="r2" value="5">5<br>
        <label for="prof">Nota3</label><br>
        <input type="radio" name="r3" value="2">2
        <input type="radio" name="r3" value="3">3
        <input type="radio" name="r3" value="4">4
        <input type="radio" name="r3" value="5">5<br>
        <label for="prof">Nota4</label><br>
        <input type="radio" name="r4" value="2">2
        <input type="radio" name="r4" value="3">3
        <input type="radio" name="r4" value="4">4
        <input type="radio" name="r4" value="5">5<br>
        <button>sumar</button>
        <?php 
$r1 = $_POST['r1'];
$r2 = $_POST['r2'];
$r3 = $_POST['r3'];
$r4 = $_POST['r4'];
$result= $r1+$r2+$r3+$r4;
if ($r1 == "") {
  echo "olvido selecionar la primera nota <br>";
}
if ($r2 == "") {
  echo "olvido selecionar la segunda nota <br>";
}
if ($r3 == "") {
  echo "olvido selecionar la tercera nota <br>";
}
if ($r4 == "") {
  echo "olvido selecionar la cuarta nota <br>";
}
echo " <br>  <h2>la suma es:</h2> <br><center> <h1> $result </h1></center>";
 ?>
   
   </form>      
        
        
 
      </div>
      <div id="rightcol">
      <hr>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <br>

    </p>
      <hr>
      <hr>
      <hr>
      <hr>

      </div>
    </div>
    <form>
    <div id="leftcol">
    
     <h1>Dato de los alumnos</h1>
      <p>
      <label></label>
     
<input minlength="8" maxlength="10" type="text" name="number" placeholder="CREDENCIAL" required ="" pattern="[0-9]+"><br>
<label></label>
<input type="text" placeholder="NOMBRE DEL ALUMNO" required="" pattern="[a-zA-Z]+"><br>
<label></label>
<input type="email" name="t" placeholder="EMAIL" required=""><br>
<label>FECHA</label>
<input type="date" name="t" min="2023-01-01" max="2023-01-31" step="5"> <br>
<label> Hora</label>
<input type="time" name="t" value="07:05" min="07:05" max="21:05"><br>
<label>nivel</label>
<select>
<option>CATEGORIZACIÓN</option>
<option>ORIENTACION</option> 
<option>PREBÁSICO</option>
<option>BÁSICO</option>
<option>INTERMEDIO</option>
<option>AVANZADO</option>
<option>TOEFL</option>
<label>clase</label>
</select><br>
</select>
<label>CLASE</label>
<select>
<option>PREBASICO</option>
<option>SPEAK UP</option> 
<option>GRAMMAR</option>
<option>CLUB</option>
<option>REFUERZO</option>
<option>REPASO</option>
<option>EVALUACIÓN </option>
</select><br>
</select>
<label>unidad</label>
<select>
<option>PB</option>
<option>PB2</option> 
<option>PB3</option>
<option>PHONETICS</option>
<option>EVALUACION</option>
<option>AVANZADO</option>
<option>TOEFL</option>
</select>

</p>
    
  </div>

<button type="submit">enviar</button>
</div>

   -->
</form>
</body>
</html>

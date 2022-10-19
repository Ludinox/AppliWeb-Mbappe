<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fecha</title>
</head>
<body>
  <!--Hoja de estilo y div para marcar la clase de la cuota en este caso-->
 <link rel="stylesheet" type="text/css" href="style.css">
<div class="blockquote-wrapper">
  <div class="blockquote">
    <!--Insertar la hora como tal ademas de datos de mi, Adrian Perez-->
    <h1>
     La Fecha es: <span style="color:#ffffff"><?php 
echo date('d-m-y');

?></span> Cada vez falta menos para<span style="color:#ffffff"> Halloween.</span>
     </h1>
    <h4>&mdash;Adrian Eduardo Perez Martinez<br>
Programacion 5PV<br>
Desarrolla Aplicaciones Web<br><em>PHP is amazing!</em></h4>
  </div>
</div>
</body>
</html>



<!DOCTYPE html">
<html lang="en">
<head>
<meta charset="utf-8" >
<title>desarrollo del ejercicio 6</title>

</head>
<body>   
 <p>ejercicio 6  Pedir un número entre 0 y 9.999, decir si es capicúa.   </p>
 <form id="Datos" name="Datos" method="post" action="desrrollo_6.php">
         <label>Ingrese algun numero</label> 
         <input id="numero" name="numero" placeholder='Ingrese un numero' onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" required="required"/><br><br>
         <button type="submit">Enviar</button>
         <br /><br />
       
        

                        </form>  
       
</body>
</html>
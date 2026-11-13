<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Multi Operaciones</title> 
</head> 
<body> 
 
    <h2>REGISTRO DE TRES PRODUCTOS</h2> 
 
    <form method="POST" action=""> 
 
    <?php 
 
    for ($i = 0; $i < 3; $i++) { 
        echo "Numero 1:"; 
        echo "<input type='number' name='numeros1[]'>" . " "; 
     
        echo "Numero 2:"; 
        echo "<input type='number' name='numeros2[]'>" . " "; 
        echo "<br><br>"; 
    }   ?> 
 
    <button type="submit" name="guardar" value="guardar"> 
    Guardar y calcular </button> </form>
     
    <?php 
    if (isset($_POST['guardar'])) { 
 
        $numeros1 = $_POST['numeros1']; 
        $numeros2 = $_POST['numeros2']; 

        $suma= array(); 
        $resta= array(); 
        $multiplicacion = array(); 
        $division= array(); 

        for ($i = 0; $i < 3; $i++) { 
 
            $suma[$i] = $numeros1[$i] + $numeros2[$i];
         
            $resta[$i] = $numeros1[$i] - $numeros2[$i];

            $multiplicacion[$i] = $numeros1[$i] * $numeros2[$i]; 

            $division[$i] = $numeros1[$i] / $numeros2[$i]; 

        }
        echo "<h3>Numero 1</h3>";


        for ($i = 0; $i < 3; $i++) { 
        echo number_format($numeros1[$i], 2) . "<br>"; 
        } 

        echo "<h3>Numero 2</h3>";
        for ($i = 0; $i < 3; $i++) { 
            echo number_format($numeros2[$i], 2) . "<br>"; 
        } 

        echo "<h3>ARREGLO DE SUMA</h3>"; 
 
        for ($i = 0; $i < 3; $i++) { 
       echo "$" . number_format($suma[$i], 2) . "<br>"; 
        } 
 
        echo "<h3>ARREGLO DE RESTA</h3>"; 
 
        for ($i = 0; $i < 3; $i++) { 
            echo "$" . number_format($suma[$i], 2) . "<br>"; 
        } 
 
      
        echo "<h3>ARREGLO DE MULTIPLICACION</h3>"; 
 
        for ($i = 0; $i < 3; $i++) {
                echo "$" . number_format($multiplicacion[$i], 2) . "<br>"; 
        } 
 
        echo "<h3>ARREGLO DE DIVISION</h3>"; 
 
        for ($i = 0; $i < 3; $i++) { 
            echo "$" . number_format($division[$i], 2) . "<br>"; 
        } 


    }

 

 
    ?> 
 
</body> 
</html>
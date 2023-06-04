<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <?php
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacion'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        
        switch($operacion){
            case 'sumar':
                $resultado = $num1 + $num2;
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                if($num2 != 0){
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = 'Error: división por cero';
                }
                break;
            default:
                $resultado = 'Error: operación no válida';
                break;
        }
        
        echo "<h1>Resultado:</h1>";
        echo "<p>$num1 $operacion $num2 = $resultado</p>";
    }
    ?>
</body>
</html>

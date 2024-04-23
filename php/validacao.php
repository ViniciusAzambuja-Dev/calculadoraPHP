<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
            // Obtém os valores dos campos de entrada
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            // Obtém a operação selecionada
            $operacao = $_POST['operacao'];
        
            // Realiza a operação selecionada
            switch ($operacao) {
                case '+':
                    $resultado = $num1 + $num2;
                    break;
                case '-':
                    $resultado = $num1 - $num2;
                    break;
                case '*':
                    $resultado = $num1 * $num2;
                    break;
                case '/':
                    // Verifica se o segundo número é zero para evitar divisão por zero
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = "Erro: divisão por zero";
                    }
                    break;
                default:
                    $resultado = "Operação inválida";
                    break;
            }
        }
       
      
        
    ?>
    
</body>
</html>
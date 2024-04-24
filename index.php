<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    if (isset($_POST['operacao'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
        $resultado = 0;
        
        if($num1 == "" || $num2 == ""){
            echo    '<p style="color: rgb(239, 58, 58); font-weight: 700;">ERRO, campo vazio!</p>';
        }
        else{
            switch($operacao){
                case "+":
                    $resultado = $num1 + $num2;
                    break;
                
                case "-":
                    $resultado = $num1 - $num2;
                    break;
                
                case "*":
                    $resultado = $num1 * $num2;
                    break;
                
                case "/":
                    if($num1 != 0 && $num2 != 0){
                    $resultado = $num1/$num2;
                    break;
                    }
                    else{
                        echo '<p style="color: rgb(239, 58, 58); font-weight: 700;">ERRO, não existe divisão por 0!</p>';
                        break;
                    }

                case "x^y":
                    $resultado = $num1**$num2;
                
                    break;
                
                case "raiz":
                    $resultado = $num1 + $num2;
                    $resultado = sqrt($resultado);
                
                    break;

                case "x!":
                    $resultado = $num1 + $num2;
                    for($i = $resultado - 1; $i >= 1; $i--){
                        $resultado = $resultado * $i;
                    }
                
                    break;
                    

                default: '<p style="color: rgb(239, 58, 58); font-weight: 700;">ERRO, atualize a sua página!</p>';
                break;
            }
        }
    }
    
?>
   
    <header>
        <h1 class="titulo"><b>Bem vindo a nossa Calculadora!</b></h1>
        <p>Dentro da calculadora, há dois campos que devem ser preenchidos com <b>números</b>!</p>
        <p>Após o preenchimento, clique na operação que deseja realizar! As operações estão representadas pelos botões abaixo!</p>
        <p>Ao final clique no " = " para calcular!</p>
    </header>

    <main>

        <!--Tirar os labels e colocar os inputs dentro da parte preta, dividir a parte preta, colocar com flex talvez
        colocar um background só para os inputs e colocar uma parte para aparecer o resultado!!-->
        <!--Pra imprimir algo dentro do php, você abre o escopo dentro da onde vc quer imprimir..-->
        <div class="divContainerForm">
            <form action="index.php" method="post">
                
                    

                    <div class="containerCalculadora">
                        <p class="tituloOperações">Operações</p>
                        <div class="backgroundCalculadora">
                            <div class="campoImprimeVariavel">
                            <?php
                              if (isset($resultado)) {
                                echo number_format($resultado, 2, ',','.');
                                }
                            ?>
                            </div>
                                <div class="containerInput">
                                        
                                    <div class="divInputPai">
                                        <label for="num1">Primeiro número: </label>
                                        <div class="divInputFilho">
                                            <input type="number" name="num1" id="num1" placeholder="Digite o numero">
                                        </div>
                                    </div>
                
                                    <div class="divInputPai">
                                        <label for="num2">Segundo número: </label>
                                        <div class="divInputFilho">
                                            <input type="number" name="num2" id="num2" placeholder="Digite o numero"> 
                                        </div>
                                    </div>
                                        
                                </div>
                                <div class="containerButtons">
                                    <div class="divButtons">
                                        <button type="submit" name="operacao" value="+" class="button" id="fonteSoma">+</button>
                                        <button type="submit" name="operacao" value="-" class="button" id="fonteSubtracao">-</button>
                                    </div>
                                    <div class="divButtons">
                                        <button type="submit" name="operacao" value="*" class="button" id="fonteMultiplicacao">&#215;</button>
                                        <button type="submit" name="operacao" value="/" class="button" id="fonteDivisao">&#247;</button>
                                    </div>
                                    <div class="divButtons">
                                        <button type="submit" name="operacao" value="x^y" class="button">x<sup>y</sup></button>
                                        <button type="submit" name="operacao" value="raiz" class="button">√</button>
                                    </div>
                                    <div class="divButtons">
                                        <button type="submit" name="operacao" value="x!" class="button">x!</button>
                                        <button type="button" value=".">.</button>
                                    </div>
                                </div>
                        </div>
                    </div>
            </form>
        </div>

    </main>

</body>
</html>

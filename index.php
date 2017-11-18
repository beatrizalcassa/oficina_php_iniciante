<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

            /*$cor = "amarelo"; // campo para comentário
            $cor = "vermelho";
            echo $cor;
      
            var_dump(array("maçã", "maracujá"));
      
            $nome = "Ana";
            echo "Olá " . $nome . "!";
      
            $a = 3;
            $b = 5;
            $resultado = $a +$b;
            $resultado = $a -$b;
            echo $resultado;
      
            $a = 5;
            $b = 2;
            
            if($a > $b) {
              echo "a é maior que b";
            } else if($a == $b) {
              echo "a e b são iguais";
            } else {
              echo "b é maior que a";
            }
      
            $a = 1;
            $b = 3;
            
            if($a > $b) {
              echo "a é maior do que b";
            } else if($a < $b) {
              echo "a é menor do que b";
            } else if($a == $b) {
              echo "a e b são iguais";
            }
      
            $i = 1;
            while($i < 10) {
              $i = $i +1;
              echo $i . "<br>";
            }
      
            $i = 1;
            while($i < 10) {
              $i = $i + 1; 
            if($i%2 == 0) {
              echo "O valor de $i é par<br>";
            } else {
              echo "O valor de $i é impar<br>"; 
            }
            }
            
      
            for ($i = 1; $i < 10; $i ++) {
              echo "O valor de i é: $i<br>";
            }
            
            $nome = "Ana";
            switch ($nome) {
              case "Ana":
                echo"Olá Ana";
                break;
              
              case "Pedro":
                echo"Olá Pedro";
                break;
              
              default:
                echo "Não sei quem é.";
                
              
            }
      
            function soma($a, $b) {
              $resultado = $a + $b;
              return $resultado;
            }
            
            $numero1 = 10.2;
            $numero2 = 6;
      
            $resultadoFuncao = soma($numero1, $numero2);
            echo $resultadoFuncao;     
      
            $cores = ["vermelho", "azul"];
            echo $cores[0];
      
            $pessoa = ["nome" => "Ana", "idade" => 23];
            echo $pessoa["nome"];
      
            $numeros = [1, 2, 3];
            array_push($numeros, 4);
            echo $numeros[3];
      
            $frutas = array("maçã", "laranja", "morango");
            foreach($frutas as $fruta) {
              echo "A fruta é $fruta<br>";
            }*/
      
            $comidas = array("macarrão", "arroz", "feijão");
            foreach($comidas as $comida) {
              echo "A comida é $comida<br>";
            }
      
            array_push($comidas, "sopa de cebola");
            foreach($comidas as $comida) {
              echo "A comida é $comida<br>";
            }
            
            array_pop($comidas);
            foreach($comidas as $comida) {
              echo "A comida é $comida<br>";
            }
              
             
        
            
          
         
      
            
            

        ?>

    </body>
</html>
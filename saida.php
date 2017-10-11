<?php
                $valori_tabuada =  $_POST['valori_tabuada'];
                $valorf_tabuada = $_POST['valorf_tabuada'];
                $multi_tabuada = $_POST['multi_tabuada'];
                $multf_tabuada = $_POST['multf_tabuada'];
                $VarControle = $multi_tabuada;



?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/Estilo.css">
    <title>Tabuadas</title>
</head>
    <body class=""  >
    <img src="cerebro2.jpg" alt="logo faculdade" title="cerebro">    
        <h2 class="titulos">Tabuadas</h2>
        <?php   
                while ($valori_tabuada <=  $valorf_tabuada){
                    echo "<div class = alinhar >";
                    echo "<p class=centro>Tabuada do ".$valori_tabuada."</p>";
                    echo "<table class=saida >";
                    echo "<tr><th class=titulotabela>Formula</th>";
                    echo "    <th class=titulotabela>Valor</th></tr>";
                    while ($multi_tabuada <= $multf_tabuada){
                        $resto = $multi_tabuada;

                        if ($resto %= 2)
                        {$corlinha= 'class=cinza';}
                    else{$corlinha = 'class=preto';} 
                  

                    echo "<tr ".$corlinha."><td>".$valori_tabuada." x ".$multi_tabuada."</td>";
                    echo     "<td>".$valori_tabuada*$multi_tabuada."</td>";
                    echo "</tr>";
                         $multi_tabuada++;
                         
                        }
                    $multi_tabuada = $VarControle;
                    echo "</table>";
                    echo "</div>";
                    $valori_tabuada++;
                    
                }
        ?>
        
    </body>
</html>
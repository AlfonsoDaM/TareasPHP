<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuegoDeDados</title>

    <header>
        <h1>Juego de los cinco dados</h1>
        <h3>Actualice la página para mostrar una nueva tirada</h3>
    </header>

</head>
<body>
    <?php

        define ('D1',  " &#9856;");
        define ('D2',  " &#9857;");
        define ('D3',  " &#9858;");
        define ('D4',  " &#9859;");
        define ('D5',  " &#9860;");
        define ('D6',  " &#9861;");

        $dado=[D1,D2,D3,D4,D5,D6];

        function jugadas($dadorecibido){
            $datosjugador=[];
            for($i=0;$i<5;$i++){//ciclo que genera los dados aleatorios y los metete en la tirada del jugador
                $jugadaaleratoria = $dadorecibido[rand(0,5)];
                array_push($datosjugador,$jugadaaleratoria);//metodo para agregar datos al array
            }
            
            $Enterodedados=[]; //Array creado para guardar los valores valores enteros de tu tirada
                    //dados[]   as  'D1'  => 'cara1'

            foreach ($datosjugador as $value) {//foreach es el ciclo qeu recorre el array dadosjugador y va iterando (recorriendo) el contenido
                echo $value;                    //$value e

                switch($value){ //$value es el valor numerico(Entero) de uno de los dados de tu tirada que sera comparado en los case del switch
                    case ' &#9856;':
                        array_push($Enterodedados,1);
                        break;
                    case " &#9857;":
                        array_push($Enterodedados,2);
                            break;
                    case " &#9858;":
                        array_push($Enterodedados,3);
                            break;
                    case " &#9859;":
                        array_push($Enterodedados,4);
                            break;
                    case " &#9860;":
                        array_push($Enterodedados,5);
                            break;
                    case " &#9861;":
                        array_push($Enterodedados,6);
                            break;
                }
            }
            /*foreach ($Enterodedados as $key => $value) {
                # code...
                echo $value;
            }*/
            
            //echo ' total '.$puntajeobtenido=array_sum($Enterodedados)-max($Enterodedados)-min($Enterodedados);
            return $puntajeobtenido=array_sum($Enterodedados)-max($Enterodedados)-min($Enterodedados). " puntos";
        }
        
        function ganador($puntosjugador1,$puntosjugador2){
            if($puntosjugador1==$puntosjugador2){
                echo 'Empate';
            }elseif($puntosjugador1>$puntosjugador2){
                echo 'Gana jugador1';
            }else{
                echo 'Gana jugador2';
            }
        }
    ?>
    
    <table>
        <tr>
            <th style="font-size: 3rem;">jugador1<?=$jugador1=jugadas($dado);?></th>
        </tr>

        <tr>
            <th style="font-size: 3rem;">jugador2<?=$jugador2 = jugadas($dado);?></th>
        </tr>

        <tr>
            <th style="font-size: 3rem"><?=ganador($jugador1,$jugador2)?></th>
        </tr>
    </table>
</body>
</html>
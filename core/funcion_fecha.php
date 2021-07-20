<?php
    function fecha($di, $ti)
    {
        $mes = date("m");
        $anio = date("Y");
        $dia = date("d");
        $anio = $anio + 0;
        $dia = $dia + 0;
        $mes = $mes + 0;
        $dias = $di +0;
        if($anio %4 == 0)
        {
            //bisiesto
            switch ($mes)
            {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                //31 dias
                    $suma= $dia + $dias;
                    
                    if($suma > 31)
                    {
                        $suma = $suma - 31;
                        if($mes == 12)
                        {
                            $mes = 1;
                            $anio = $anio + 1;
                        }
                        else
                        {
                            $mes = $mes + 1;
                        }
                    }
                    break;  
                case 2:
                //29 dias
                    $suma= $dia + $dias;
                    if($suma > 29)
                    {
                        $suma = $suma - 29;
                        $mes = $mes + 1;
                    }
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                //30 dias
                    $suma= $dia + $dias;
                    if($suma > 30)
                    {
                        $suma = $suma - 30;
                        $mes = $mes + 1;
                    }
                    break;
            }
        }
        else
        {
            //no bisiesto
            switch ($mes)
            {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                //31 dias
                    $suma= $dia + $dias;
                    if($suma > 31)
                    {
                        $suma = $suma - 31;
                        if($mes == 12)
                        {
                            $mes = 1;
                            $anio = $anio + 1;
                        }
                        else
                        {
                            $mes = $mes + 1;
                        }
                    }
                    break;  
                case 2:
                    //28 dias
                    $suma= $dia + $dias;
                    if($suma > 28)
                    {
                        $suma = $suma - 28;
                        $mes = $mes + 1;
                    }
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                //30 dias
                    $suma= $dia + $dias;
                    if($suma > 30)
                    {
                        $suma = $suma - 30;
                        $mes = $mes + 1;
                    }
                    break;
            }
        }
        if($suma < 10)
        {
            $suma = "0".$suma;
        }
        if ($mes < 10)
        {
            $mes = "0".$mes;
        }
        if($ti == 1)
        {
            //fecha bd
            $hora = date("H:i:s");
            return $anio."-".$mes."-".$suma." ".$hora;
        }
        else
        {
            //fecha openpay
            $hora = date("H:i:s");
            return $anio."-".$mes."-".$suma."T".$hora;
        }
    }
?>
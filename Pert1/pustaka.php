<?php
    function operasikan($n1, $n2, $op){
        if ( isset($n1) && strlen($n1)){
            switch ($op){
                case "+" : 
                    {$result = $n1 + $n2; break;}
                case "-" : 
                    {$result = $n1 - $n2; break;}  
                case "x" : 
                    {$result = $n1 * $n2; break;}
                case "/" : 
                    {$result = $n1 / $n2; break;}  
            }
            return $result;
            // var_dump($n1);
        }
        else return 0; 
    }

?>
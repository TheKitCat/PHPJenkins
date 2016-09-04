<?php
class TestPHP{
    
    /**
     * @assert (2, 1) == 3
     * @assert (1, 1) == 2
     * @assert (5, 5) == 10
     * @param type $a
     * @param type $b
     * @return type
     */
   function add($a,$b){
       
        return $a+$b;  
       
   }
   
}

$obj = new TestPHP;
echo $obj->add(1, 2);
?>

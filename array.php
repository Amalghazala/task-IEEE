<?php 

function findSecondMax(array $arr) {
    
    
    $max = 0;
    $secondMax = 0;
    
    foreach($arr as $number) {
        
      
        if($number > $max) {
            
            $secondMax = $max;
            $max = $number;
        }
        
        if($number > $secondMax && $number < $max) {
            $secondMax = $number;
        }
    }
    
    return $secondMax;
}
 
$arr = array(1, 4, 5, 35, 20, 13, 25 , 30);
 
$second_maximum = findSecondMax($arr);
 
echo "The second largest element is ".$second_maximum;



?>


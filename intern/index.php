<?php

$arr = array(4,2,8);
$arr2 = array(4,7,8);
$common = array_intersect($arr,$arr2) ;
$diff = array_diff($arr,$arr2) ;
$merge = array_merge($arr,$arr2) ;

// echo count($common) ;

foreach($merge as $value){
   echo "<br>"."$value".'<br>' ;
}
// foreach($diff as $value){
//    echo "<br>"."$value"."<br>" ;
// }

 echo '<br>'.var_dump($common) ;
 echo '<br>'.(var_dump($merge)) ;
 echo '<br>'.(var_dump($diff)) ;
?>
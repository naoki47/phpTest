<?php 

 
$name = "Naoki"; 
if ($name = "Naoki") { 
 echo "私は" . $name . "です"; 
} else { 
  echo $name .  "ではありません"; 
} 
echo '<br>'; 
 
 $total = 0; 
 for ($i = 0; $i <= 10000; $i++) { 
   $total += $i; 
} 
 echo $total; 
 echo '<br>'; 
 
 
 $fruits = array("apple", "orange", "lemon", "banana", "melon"); 
 foreach($fruits as $fruits){ 
   echo "好きなフルーツは" . $fruits; 
   echo "\n"; 
} 
 echo '<br>'; 
 
 
$start = 1; 
 $end = 100; 

 
for($i = $start; $i <= $end; $i++){ 
  if($i % 5 == 0){ 
    echo $i; 
  } 
} 

?> 


<?php

 function search  (search) {

   $array = [ 10, 21,32, 29,95,36,96,49];
 
   for ( $i=0; $i,<sizeof ($array); $i++)

    { 

    if  ($array [$i]==$search){
     echo  " Number " . $search. "was found in the array";

return 0;
     }
 }

 echo "Number " .$search. " was not found in the array ";
  }
  search (32);

 ?>

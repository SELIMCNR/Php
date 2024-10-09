<?php 

   // Global ve Local Scope

   $x = 5; // Global Scope


   echo $x; // Global Scope

   function test(){
       global $x; // Global Scope
  
       $y = 10; // Local Scope
       echo $y; // Local Scope
       $GLOBALS['y'] = 10; // Global Scope
         echo $x; // Global Scope
       echo $GLOBALS['x']; // Global Scope  
   }
    

?>
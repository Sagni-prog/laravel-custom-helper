<?php 

if(! function_exists('seconds_to_hours')){
   
   function seconds_to_hours(int $second): float {
      
      return $second / 360;
   }
}
<?php 

use Carbon\Carbon;

if(! function_exists('seconds_to_hours')){
   
   function seconds_to_hours(int $second): float {
      
      return $second / 360;
   }
}

if(! function_exists('get_current_data')){
    
    function get_current_data(){
        
        return Carbon::now();
    }
}
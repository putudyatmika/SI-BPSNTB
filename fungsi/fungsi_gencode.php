<?php
function gencode($length) {
    global $code_gen ;
    $kata='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
     $code_gen = ''; 
     for ($i = 0; $i < $length; $i++) { 
         $pos = rand(0, strlen($kata)-1); 
         $code_gen .= $kata{$pos}; 
         
         } 
     return $code_gen; 
    
}
?>
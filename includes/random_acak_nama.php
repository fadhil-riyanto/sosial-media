<?php
$n=10; 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
   $string_random_fadhil = rand();
   $compiled_rand_string = hash("sha1", $string_random_fadhil);
   

   $id_rand_string = uniqid(); 




$name_random = "_Date_".date('dmYHis')."_Rand_".rand(8, 3843192558395555839)."_Str_".
$randomString."_Hash_".$compiled_rand_string."_MD5_";
echo $name_random;

?>
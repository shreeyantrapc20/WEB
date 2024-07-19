<?php 
    
    $string = "\tThis is a string.";
    echo "Original string: ".$string."\n";
    echo "<br> Trim(): ".trim($string); //trim works in programiz online php compiler
    
    $string1 = "This is also a string.";
    
    echo "<br>Strlen(): ".strlen($string1);
    
    $string2 = "THis iS also A strIng.";
    
    echo "<br>strcasecmp(): ".strcasecmp($string1, $string2);
    echo "<br>strcmp(): ".strcmp($string1, $string2);
    
    /*The ASCII value of 'h' (the second character of $string1) is 104.The ASCII value of 'H' (the second character of $string2) is 72. The difference between these ASCII values is 104 - 72 = 32.Thus, strcmp($string1, $string2) returns 32, which indicates that $string1 is greater than $string2 by 32 in terms of ASCII value at the first point of difference.*/
    echo "<br>ucwords(): ".ucwords($string);
    echo "<br>strtolower(): ".strtolower($string);
    echo "<br>strtoupper(): ".strtoupper($string);
    echo "<br>substr(): ".substr($string, 0, 10);
    echo "<br>str_replace(): ".str_replace("string", "buffalo", $string);
    
    
?>
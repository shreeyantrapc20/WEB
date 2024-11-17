<?php 

    //Indexed array
    $fruits = array("Apple", "Banana", "Cumumber");
    $vegetables = ["Potato", "Tomato", "Soyabeans"]; //short syntax

    print_r($fruits);

    echo "<br>";

    foreach ($vegetables as $value) {
        echo "<br>".$value;
    }

    echo "<br>";

    //associative array
    $province = array (
        "Koshi" => "Biratnagar",
        "Madhesh" => "Janakpur",
        "Bagmati" => "Hetauda"
    );
    
    foreach($province as $key => $value) {
        echo "<br> Province: ".$key.",  Capital: ".$value;
    }

    echo "<br>";

    //multidimensional array
    $t20wc = array(
        "Group A" => ["India", "Pakistan", "USA", "Canada", "Ireland"],
        "Group D" => ["South Africa", "Sri Lanka", "Bangladesh", "Nepal", "Netherlands"]
    );
    
    print_r($t20wc);

    //array functions
    echo "<br><br>Count(fruits): ".count($fruits);
    echo "<br>sizeof(vegetables): ".sizeof($vegetables);
    echo "<br>array_key_exists(Group A, t20wc): ".array_key_exists("Group A", $t20wc);
    echo "<br>";

    //delete element from an array
    unset($fruits[1]);
    print_r($fruits);

    //convert array to string
    $fruitsString = implode(",",$fruits );
    echo "<br>".$fruitsString;

    //convert string to array
    $days = "Sun*Mon*Tue*Wed";
    echo "<br>days string: ".$days."<br> days array: ";
    $daysList = explode("*", $days);
    print_r($daysList);

    sort($vegetables);
    echo "<br>";
    print_r($vegetables);


?>
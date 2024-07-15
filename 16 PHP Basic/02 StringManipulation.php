<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    //find the length of string
    $str = "This is a stRIng";
    $len = strlen($str);
    echo "The length of string (\"".$str."\") is ".$len."<br>";

    //calculate number of words in string
    $wordCount = str_word_count($str);
    echo "There are ".$wordCount." words in a string. <br>";
    
    //replace string
    $replace = str_replace("stRIng", "cat", $str);
    echo "Before replacing: ".$str."<br>";
    echo "After replacing: ".$replace."<br>";

    //string position
    $position = strpos($str, "stRIng");
    echo "Position of word \"stRIng\": ".$position."<br>";

    //uppercase and lowercase
    $upper = strtoupper($str);
    $lower = strtolower($str);
    echo "Uppercase: ".$upper."<br> Lowercase: ".$lower."<br>";

    //formatted string
    $name = "Binayak";
    $age = 21;
    $address = "Shivasatakshi";
    $formated = sprintf("My name is %s. I am %d years old. I live in %s.", $name, $age, $address);
    echo $formated."<br>";
    
    
    ?>
</body>
</html>
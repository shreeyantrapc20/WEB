<?php 

    $suggestionList = array("apple", "banana", "cherry", "date", "elderberry", "fig", "grape", "honeydew");
    $query = $_GET["q"];
    $suggestionResult = "";

    if($query !== "") {

        //if the query is not empty

        $query = strtolower($query);
        $length = strlen($query);

        foreach($suggestionList as $suggestion) {

            //searching in an array

            if(stristr($suggestion, $query)) {
                //comparing with not considering case

                if($suggestionResult == "") {

                    //if there is single element found
                    $suggestionResult = $suggestion;

                } else {

                    //if multiple found
                    $suggestionResult .= ", ".$suggestion;

                }
            }
        }
    }

    echo $suggestionResult === "" ? "No suggestions" : $suggestionResult; 
?>
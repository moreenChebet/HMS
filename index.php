<!DOCTYPE>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Chapa kazi</title>
<!-- platform concerning tenants and landlords-->
</head>

<body>
<form method="GET">
     <input type="text" name="person">
     <button>submit</button>
</form>

<?php

    //echo "Hi there <br>";
    //$name = "Daniel";
    $name = $_GET['person'];
    print "Hi there ".$name;
    echo "<br>";
    echo strlen("Hi there"); //getting length of words/strings
    echo "<br>";
    echo str_word_count("Hi there ");//counts the number of words present
    echo "<br>";//creating space between work loads
    echo strrev("Hi there");
    echo "<br>";  
    echo strpos("Hi there","Hi");// returns string position
    echo str_replace("there","Mason", "Hi there");//replaces tthere with mason 

    //comparison operators   meaning of === eqaul sign????????????
    //examples of comparison operators and their meaning
    //logical operators examples and meanings
    $x=10;
    $y=20;

    if ($x==$y){
        echo "False";
    }else{
        echo "True";
    }
    //conditional statements
    //elseif can be repeated many times depeneding with the number of statements involved
    //switch can be used if there are many statements.
    $n=6;
    if ($n==1){
        echo "Daniel is very handsome!";
    }
    elseif($n==2){
        echo "Daniel is kinda handsome!";
    }
    elseif($n==2){
        echo "Daniel is kinda handsome!";
    }
    else{
        echo "Daniel is very ugly!";
    }
    //switch: meant to be used for checking answers and not conditions like the if statements
    $f=7;

    switch ($f){
        case 1:
           echo "The answer is 1";
        break;
        case 2:
           echo "The answer is 2";
        break;
        case "number":
           echo "The answer is number";
        break;
        case 3:
            echo "The asnwer is 3";
        break;
        default:
           echo "There is no answer";
        break;

    }
?>

</body>

</html>
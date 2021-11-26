<!-- loops -->
<!-- while loop-->
<!-- do while loop -->
<!-- for loop-->
<!-- foreach loop -->

<!doctype html>
<html lang ="en">
<head>
<title></title>
</head>
<body>
<?php
   
   $y=1;
   //while loop
   while ($y < 6){
      echo "Have a lovely week<br>";
      $y++;
   }
    // do while loop
    do {
        echo "How is your week<br>";
        $y++;
    }
    while ($y <= 1);

    //for loop
    for ($x=0; $x<=10; $x++){
         echo "Hi<br>";
    }

    //foreach loop
    $array = array("Daniel", "Jane", "Alex");
    foreach ($array as $loopdata){
        echo "My name is ".$loopdata."<br>";
    }

    //The above lines of  code can be simplified by the codes below
    $array = array("Daniel", "Jane", "Alex", "Simon", "Eddah");
    echo $array[3];

    //Functions: set of instructions bundled together to achieve a common outcome

    

    function newCalc($x){
        $newnr = $x*0.75;
        echo "Here is 75% of what you wrote: ".$newnr;
    }
    $x = 100;
    newCalc($x);
    echo "<br>";
    $a = 10;
    newCalc($a);

    //local & global variables
$r=5;

function something(){
    $y = 7;
}
echo $y;

?>

</body>
</html>
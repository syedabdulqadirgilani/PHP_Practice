<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php tutorial</title>
</head>
<body bgcolor="lightcoral">
<div class="container">
this is my first php website
<?php
echo "<br>","hello world from php";
/*  lorem
ipsum */
$v1=10;
$v2=2;
echo "<hr>";
echo "<br>","value1=",$v1;
echo "<br>","value2=",$v2;
Echo "<br>","Sum =",$v1+$v2;
echo "<br>","Subtract =",$v1-$v2;
echo "<br>","Multiplication =",$v1*$v2;
echo "<br>","Division =",$v1/$v2;
echo "<br>","Modulus =",$v1%$v2;
echo "<hr>";
echo "<br>",$v1++;
echo "<br>",$v2++;
echo "<br>",$v1+=1;
echo "<br>",$v2+=1;
// Comparison Operators
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";
    echo "<br>",var_dump(1==1);// Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$v1;
    echo "<br>";
    echo $v1;
    echo "<br>",--$v1;
    echo "<br>",++$v1;
        // Logical Operator
    // and (&&)
    // or (||)
    // xor 
    // !

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);
    // $myVar = (false and true);
    // $myVar = (false xor false);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);
    $a=1;
    $b=1;
echo    !($a==$b);
echo "<br>",true && true;
echo '<br>',true || true;
echo '<br>',!(true xor true);
echo "<br>",var_dump('string');
echo "<br>",var_dump(2);
echo "<br>",var_dump(2.3);
echo "<br>",var_dump(false);
const pi=3.14;
echo "<br>",pi;
if (18>18)
{
    echo "<br>",false;
}
else{
    echo "<br>", true;
}
    // Arrays in php
    $languages = array("Python", "C++", "php", "NodeJs"); 
    // echo count($languages);   
    // echo $languages[0];   
    $age = 6;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "<br>","You are 7 years old";
    }
    else if($age==6){
        echo "<br>", "You are 6 years old";
    }
    else{
        echo "<br>","You can not go to the party";
    }
    // Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }

?>
</div>
</body>
</html>

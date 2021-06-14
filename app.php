<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
div.container{
background-color:lightsalmon;
border:5px ridge saddlebrown;
}
</style>
<title>Document</title>
</head>
<body>
<div class="container">
<?php
echo "hello world";
$a=0;
while ($a<=10)
{
    echo "<br>", $a;
    $a++;
}
echo "<hr>";
for ($a=0;$a<=10;$a++)
{
    echo "<br>",$a;
}
// function func()
// {
//     echo "<br>","this is function body";
// }
// func()
// $s="abc def";
// echo "<br>","strlength= ",strlen($s);
// echo "<br>","str word count= ",str_word_count($s);
// echo "<br>","str reverse= ",strrev($s);
// echo "<br>","str position= ",strpos($s,"f");
// echo "<br>","str replace= ",str_replace("abc","fgh",$s);
// ?>    
</div>
<div>

</div>
</body>
</html>
<?php
echo"Quiz 1 <h2>A description about me</h2>";
echo "My name is Mary Abiodun, a proud Nigerian and a lady with a difference.<br>
I'm a student of Mathematics and Education at the University of Lagos.<br>
I love tech and I believe that with tech, we can solve most of the world's problems.<br>
One fun fact about me is that I'm small but mighty.<br>

I love collaborating and working with guys. They sure have a lot to teach girls.<br><br>";
//Descriptio ends here


echo "Quiz 2<br>";
//Performing simple operations
$a = 3;
$b = 2;
$c = -4;
$d = $a * $c;
$e = $b - $a;
$f = $c/$b;
echo "The product of " . $a . " and " . $c . " is " . $d . "<br>";
echo "The difference between " . $b . " and " . $a . " is " . $e . "<br>";
echo "The division of " . $c . " and " . $b . " is " . $f . "<br><br>";
//Simple operations end here


echo "Quiz 3<br>";
//If...else statement
$temp = 25;
if ($temp <= 20){
    echo "It is really cold today<br><br>";
}elseif ($temp > 20 && $temp<30){
    echo "The weather is just perfect<br><br>";
}elseif ($temp>=30 && $temp < 40){
    echo "It's so hot today<br>";
}else{
    echo"Am I in the Sahara Desert?<br><br>";
}
//if...else statement ends here


echo "Quiz 4<br>";
//Loops
#(1) Displaying every number between 100 and 150.
echo "Show every number between 100 and 150:<br>";
for ($x = 100; $x <= 150; $x++){
    echo "$x <br>";
}
#(2) Displaying all EVEN numbers between 0 and 50 each on a new line.
echo "<br>Show even numbers between 0 and 50:<br>";
$x = 0;
while($x <= 50){
    echo "$x <br>";
    $x+=2;
}
//Loop questions end here



echo "<br>Quiz 5<br>";
//Arrays
$name = array("Dayo", "Helen", "Stephen");
$hobby = array("reading", "singing", "cooking");
$namelength = count($name);
for($i=0; $i < $namelength; $i++){
    echo "My name is " . $name[$i] . ". I love " . $hobby[$i]. "<br>";
}
//End of array question



echo "<br>Quiz 6<br>";
//Functions
function addMultiply($a, $b){
    $add = $a + $b;
    $multiply = $a * $b;
    echo "The sum of " . $a . " and " . $b . " is " . $add . "<br>";
    echo "The product of " . $a . " and " . $b . " is " . $multiply . "<br>";
}
addMultiply(2, 4);
//End of question on function

?>
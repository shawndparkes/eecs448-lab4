<?php

$total = 0;
$one = $_POST["pres"];
$two = $_POST["star"];
$three = $_POST["nin"];
$four = $_POST["wood"];
$five = $_POST["no"];

echo "Question 1: Who was the 16th President of the USA?<br>";
echo "You answered: " . $one . "<br>";
echo "Correct answer: Abraham Lincoln<br><br>";

echo "Question 2: Which of these Star Wars films released first?<br>";
echo "You answered: " . $two . "<br>";
echo "Correct answer: A New Hope<br><br>";

echo "Question 3: How old is Nintendo?<br>";
echo "You answered: " . $three . "<br>";
echo "Correct answer: 127<br><br>";

echo "Question 4: How much wood could a woodchuck chuck if a woodchuck could chuck wood?<br>";
echo "You answered: " . $four . "<br>";
echo "Correct answer: None<br><br>";

echo "Question 5: Is the answer to this question correct?<br>";
echo "You answered: " . $five . "<br>";
echo "Correct answer: No<br><br>";

if($one == "Abraham Lincoln")
{
    $total++;
}

if($two == "A New Hope")
{
    $total++;
}

if($three == "127")
{
    $total++;
}

if($four == "None")
{
    $total++;
}

if($five == "No")
{
    $total++;
}

echo "Total: " . $total . "<br>";
echo "Percent: " . $total * 20 . "%";

?>

<?php 
//Post-increment and Post-decrement Operators in PHP
$score = 100;
$score++; // Increment by 1
echo "After incrementing, score is: " . $score . "\n";
echo "<hr>";
$score--; // Decrement by 1
echo "After decrementing, score is: " . $score . "\n";

//Pre-increment and Pre-decrement Operators in PHP
++$score;
echo "After pre-incrementing, score is: " . $score . "\n";
echo "<hr>";
--$score;
echo "After pre-decrementing, score is: " . $score . "\n";
echo "<hr>";
$score += 2;
echo "After adding 2, score is: " . $score . "\n";
echo "<hr>";
?>
<?php

//only php file so no closing tag
//begin php: variables

//be consistent with naming conventions
$firstName = 'Rory';
//or $first_name, pick a style of variable naming
$lastName = 'Hackney';

echo $firstName; //display to page, like print

//Don't use break <br> tags for real sites
//Can use html tags within the quotes (!)
echo '<br>';
echo '<h2> $firstName </h2>'; //echoes as string
echo '<h2>' . $firstName . '</h2>'; //works
//Enclose HTML tags in quotes and variables without quotes
//Use . to concatenate (doesn't work unless u concat)

//DOUBLE QUOTES
//still prints the variable's value rather than as string
//can inlude HTML tags and strings without separating ???
//Why would u ever not use double quotes ??
echo "Double quotes: $firstName";
echo "<h2>Double quotes H2: $firstName </h2>";

//Causes error
// echo $firstName $lastName;

//separate echo arguments with comma
//use strings with space to add spacing
echo $firstName, ' ', $lastName;

echo '<br><br>';
//or do it with concat
echo $firstName . ' ' . $lastName;
echo '<br>_________________________________________<br><br>';
//ARRAYS

//indexed array
$names[] = 'Sylvia';
$names[] = 'Jenny';
$names[] = 'Ray';
$names[] = 'Dan';
$names[] = 'Allison';

$names = ['Sylvia', 'Jenny', 'Ray', 'Dan', 'Allison'];

$names = array('Sylvia', 'Jenny', 'Ray', 'Dan', 'Allison');

//can't echo arrays
//echo $names; //don't work
//use print_r instead to dispay arrays and objects
print_r($names);
echo '<br>';
//can use echo for a specific instance of an array
echo $names[0];
echo '<br><br>';
//Can also use names rather than numbers for indexing
//This is an associative array (rather than indexed)
//Key => value
$show = array(
  'Name' => 'The Crown',
  'Actor' => 'Clair Foy',
  'Genre' => 'Historical Fiction'
);

//arrays are more efficient for storing related values than variables
//for example:
$showName = 'The Crown';
$showActor = 'Clair Foy';
$showGenre = 'Historical Fiction';

print_r($show);
echo '<br>';
echo("Name: $showName Actor: $showActor Genre: $showGenre");
echo '<br>';

echo "<p>My favorite show is $showName, starring $showActor,
      which is $showGenre.</p>";
//or:
echo '<p>My favorite show is ' . $showName . ', starring ' . $showActor .
      ', which is ' . $showGenre . '.</p>';

//We have been working with strings.
$begAlpha1 = 'abc';
$begAlpha2 = 'def';

echo $begAlpha1 . $begAlpha2;
echo '<br>';
echo $begAlpha1, $begAlpha2;
//what is the difference between using concat and commas?

echo '<br>';
echo $begAlpha1;
$begAlpha1 .= 'def'; //equals itself concatenated with def
echo '<br>';
echo $begAlpha1;
echo '<br> _____________________________________________ <br><br>';
//We will now work with numbers.
$x = 5;
echo $x;
echo '<br>';
$x *= 5;
echo $x;
echo '<br>';
$y = 100;
$y *= .095;
$y = 100 * .023453;
echo $y;
echo '<br>';
//number_format function returns $y as number with two decimal places
//number_format(variable, decimal places)
$y_num = number_format($y, 2);
echo 'My tax rate for $100 is: $' . $y_num;
echo '<br>';
//if you change one of the variales or calculations feeding into it it changes it

$a = 20;
$a += 30;
echo $a;
echo '<br>';

$b = 20;
$b -= 30;
echo $b;
echo '<br>';

$c = 20;
$c /= 30;
echo $c;
echo '<br>';

//substr and str_replace

$text = 'Once upon a time, in a land far far away...';

//substr: target, starting position, number of letters
echo $text . '<br>';
echo substr($text, 0);
echo '<br>';
echo substr($text, 14) . '<br>';
echo substr($text, 0, 4);
echo '<br>';
echo substr($text, 4, 12) . '<br>';
echo substr($text, 4, 21) . '<br>';
echo substr($text, 10, 5) . '<br>';
echo substr($text, -2) . '<br>';

$text2 = ' a giant fell from the sky.';
echo $text2 . '<br>';
echo str_replace('far', 'close', $text2) . '<br>';
echo str_replace(',', ',  long, long ago,', $text2) . '<br>';

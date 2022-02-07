# PHP Tutorial

## Learn PHP
PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.

## What is PHP?
PHP is an acronym for "PHP: Hypertext Preprocessor"
PHP is a widely-used, open source scripting language
PHP scripts are executed on the server
PHP is free to download and use

### PHP is an amazing and popular language!

It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
It is deep enough to run large social networks!
It is also easy enough to be a beginner's first server side language!

### What is a PHP File?
PHP files can contain text, HTML, CSS, JavaScript, and PHP code
PHP code is executed on the server, and the result is returned to the browser as plain HTML
PHP files have extension ".php"

### What Can PHP Do?
PHP can generate dynamic page content
PHP can create, open, read, write, delete, and close files on the server
PHP can collect form data
PHP can send and receive cookies
PHP can add, delete, modify data in your database
PHP can be used to control user-access
PHP can encrypt data
With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.

### Why PHP?
PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
PHP is compatible with almost all servers used today (Apache, IIS, etc.)
PHP supports a wide range of databases
PHP is free. Download it from the official PHP resource: www.php.net
PHP is easy to learn and runs efficiently on the server side

### What's new in PHP 7
PHP 7 is much faster than the previous popular stable release (PHP 5.6)
PHP 7 has improved Error Handling
PHP 7 supports stricter Type Declarations for function arguments
PHP 7 supports new operators (like the spaceship operator: <=>)

## PHP Installation
first download xampp from https://www.apachefriends.org/index.html ,
after that create php file in htdocs to run file .

### What Do I Need?
To start using PHP, you can:

Find a web host with PHP and MySQL support
Install a web server on your own PC, and then install PHP and MySQL

### Use a Web Host With PHP Support
If your server has activated support for PHP you do not need to do anything.Just create some .php files, place them in your web directory, and the server will automatically parse them for you.

You do not need to compile anything or install any extra tools.

Because PHP is free, most web hosts offer PHP support.

## Set Up PHP on Your Own PC
However, if your server does not support PHP, you must:

install a web server
install PHP
install a database, such as MySQL

## PHP Syntax
A PHP script is executed on the server, and the plain HTML result is sent back to the browser.

### Basic PHP Syntax
A PHP script can be placed anywhere in the document.

A PHP script starts with <?php and ends with ?>:

```
<?php
// PHP code goes here
?>

```

The default file extension for PHP files is ".php".

A PHP file normally contains HTML tags, and some PHP scripting code.

Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to output the text "Hello World!" on a web page:

```
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
```

Note: PHP statements end with a semicolon (;).

### PHP Case Sensitivity
In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
but variable name Functiona name are case sesitive .

## PHP Comments

### Comments in PHP
A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.

Comments can be used to:

Let others understand your code
Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
PHP supports several ways of commenting:

Example
Syntax for single-line comments:

```
<!DOCTYPE html>
<html>
<body>

<?php
// This is a single-line comment

# This is also a single-line comment
?>

</body>
</html>

```

Example
Syntax for multiple-line comments:
```
<!DOCTYPE html>
<html>
<body>

<?php
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
?>

</body>
</html>
```

## PHP Variables
Variables are "containers" for storing information.

#### Creating (Declaring) PHP Variables
In PHP, a variable starts with the $ sign, followed by the name of the variable:

Example
```
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>
```
After the execution of the statements above, the variable $txt will hold the value Hello world!, the variable $x will hold the value 5, and the variable $y will hold the value 10.5.

Note: When you assign a text value to a variable, put quotes around the value.

Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.

Think of variables as containers for storing data.


### PHP Variables
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
Remember that PHP variable names are case-sensitive!

Output Variables
The PHP echo statement is often used to output data to the screen.

The following example will show how to output text and a variable:

Example
```
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

```

### PHP is a Loosely Typed Language
In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

## PHP Variables Scope
In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global
static


## Global and Local Scope
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

Example
Variable with global scope:
```
<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
```

A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

Example
Variable with local scope:
```
<?php
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>
```

You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.

### PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):

Example
```
<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>
```

### PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:

Example
```
<?php
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>

```

### PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:

Example

```
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
?>

```
Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

Note: The variable is still local to the function.

### PHP echo and print Statements
With PHP, there are two basic ways to get output: echo and print.
echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

### The PHP echo Statement
The echo statement can be used with or without parentheses: echo or echo().

Display Text

The following example shows how to output text with the echo command (notice that the text can contain HTML markup):

Example

```
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

```

#### Display Variables

The following example shows how to output text and variables with the echo statement:

Example

```
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>
```

### The PHP print Statement

The print statement can be used with or without parentheses: print or print().

Display Text

The following example shows how to output text with the print command (notice that the text can contain HTML markup):

Example

<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>

Display Variables

The following example shows how to output text and variables with the print statement:
Example
```
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>

```

## PHP Data Types

### PHP Data Types
Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

#### PHP String
A string is a sequence of characters, like "Hello world!".

A string can be any text inside quotes. You can use single or double quotes:

Example
```
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>
```

#### PHP Integer
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

Example
```
<?php
$x = 5985;
var_dump($x);
?>
```

#### PHP Float
A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example $x is a float. The PHP var_dump() function returns the data type and value:

Example
```
<?php
$x = 10.365;
var_dump($x);
?>
```
#### PHP Boolean
A Boolean represents two possible states: TRUE or FALSE.

$x = true;
$y = false;

#### PHP Array
An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

Example
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

### PHP Object
Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.


Example
```
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
```

#### PHP NULL Value
Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:

Example
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

#### PHP Resource
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.

## PHP Strings
A string is a sequence of characters, like "Hello world!".

#### PHP String Functions
In this chapter we will look at some commonly used functions to manipulate strings.

#### strlen() - Return the Length of a String
The PHP strlen() function returns the length of a string.

Example
Return the length of the string "Hello world!":
```
<?php
echo strlen("Hello world!"); // outputs 12
?>
```
#### str_word_count() - Count Words in a String
The PHP str_word_count() function counts the number of words in a string.

Example
Count the number of word in the string "Hello world!":
```
<?php
echo str_word_count("Hello world!"); // outputs 2
?>
```

#### strrev() - Reverse a String
The PHP strrev() function reverses a string.

Example
Reverse the string "Hello world!":
```
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
```

#### strpos() - Search For a Text Within a String
The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

Example
Search for the text "world" in the string "Hello world!":
```
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>
```
Tip: The first character position in a string is 0 (not 1).

#### str_replace() - Replace Text Within a String
The PHP str_replace() function replaces some characters with some other characters in a string.

Example
Replace the text "world" with "Dolly":

<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>

## PHP Numbers
One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.

### PHP Integers
2, 256, -256, 10358, -179567 are all integers.

An integer is a number without any decimal part.

An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).

Here are some rules for integers:

An integer must have at least one digit
An integer must NOT have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
PHP has the following predefined constants for integers:

PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes

PHP has the following functions to check if the type of a variable is integer:

is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()

Example
Check if the type of a variable is integer:
```
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>
```

#### PHP Floats
A float is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.

PHP has the following predefined constants for floats (from PHP 7.2):

PHP_FLOAT_MAX - The largest representable floating point number
PHP_FLOAT_MIN - The smallest representable positive floating point number
- PHP_FLOAT_MAX - The smallest representable negative floating point number
PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()

#### PHP Infinity
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()
However, the PHP var_dump() function returns the data type and value:

#### Example
Check if a numeric value is finite or infinite:
```
<?php
$x = 1.9e411;
var_dump($x);
?>
```
#### PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()
However, the PHP var_dump() function returns the data type and value:

Example
Invalid calculation will return a NaN value:
```
<?php
$x = acos(8);
var_dump($x);
?> // output float(NAN)
```
### PHP Numerical Strings
The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

Example
Check if the variable is numeric:
```
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
```

Note: From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.

### PHP Casting Strings and Floats to Integers
Sometimes you need to cast a numerical value into another data type.

The (int), (integer), or intval() function are often used to convert a value to an integer.

Example
Cast float and string to integer:
```
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
```

## PHP Math
PHP has a set of math functions that allows you to perform mathematical tasks on numbers.

#### PHP pi() Function
The pi() function returns the value of PI:

Example
```
<?php
echo(pi()); // returns 3.1415926535898
?>
```

#### PHP min() and max() Functions
The min() and max() functions can be used to find the lowest or highest value in a list of arguments:

Example
```
<?php
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?>
```

#### PHP abs() Function
The abs() function returns the absolute (positive) value of a number:

Example
```
<?php
echo(abs(-6.7));  // returns 6.7
?>
```

PHP sqrt() Function
The sqrt() function returns the square root of a number:

Example
```
<?php
echo(sqrt(64));  // returns 8
?>
```

#### PHP round() Function
The round() function rounds a floating-point number to its nearest integer:

Example
```
<?php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?>
```

#### Random Numbers
The rand() function generates a random number:

Example
```
<?php
echo(rand());
?>
```

## PHP Constants
Constants are like variables except that once they are defined they cannot be changed or undefined.

#### PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

#### Create a PHP Constant
To create a constant, use the define() function.

Syntax
define(name, value, case-insensitive)
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
Example
Create a constant with a case-sensitive name:
```
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
```

Example
Create a constant with a case-insensitive name:
```
<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>
```

#### PHP Constant Arrays
In PHP7, you can create an Array constant using the define() function.

Example
Create an Array constant:
```
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
```

#### Constants are Global
Constants are automatically global and can be used across the entire script.

Example
This example uses a constant inside a function, even if it is defined outside the function:

<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?>

## PHP Operators

Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators

## PHP if...else...elseif Statements
Conditional statements are used to perform different actions based on different conditions.

### PHP Conditional Statements
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed

### PHP - The if Statement
The if statement executes some code if one condition is true.

```
Syntax
if (condition) {
  code to be executed if condition is true;
}
```

Example
Output "Have a good day!" if the current time (HOUR) is less than 20:
```
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>
```

### PHP - The if...else Statement
The if...else statement executes some code if a condition is true and another code if that condition is false.
```
Syntax
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}
```

Example
Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:
```
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
```

PHP - The if...elseif...else Statement
The if...elseif...else statement executes different codes for more than two conditions.

Syntax
```
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
```

Example
Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":
```
<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
```

## PHP switch Statement
The switch statement is used to perform different actions based on different conditions.

The PHP switch Statement
Use the switch statement to select one of many blocks of code to be executed.

Syntax
```
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}
```
This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found.

Example
```
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
```

## PHP Loops

Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

Loops are used to execute the same block of code again and again, as long as a certain condition is true.

In PHP, we have the following loop types:

while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array

#### PHP while Loop
The while loop - Loops through a block of code as long as the specified condition is true.

The PHP while Loop
The while loop executes a block of code as long as the specified condition is true.

Syntax
```
while (condition is true) {
  code to be executed;
}
```

Examples
The example below displays the numbers from 1 to 5:

Example
```
<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>
```

#### PHP do while Loop
The ```do...while``` loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.

The PHP do...while Loop
The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

Syntax

```
do {
  code to be executed;
} while (condition is true);

```

###### Examples
The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the loop will continue to run as long as $x is less than, or equal to 5:

Example
```
<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
```

Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.

#### PHP for Loop

The for loop - Loops through a block of code a specified number of times.

The PHP for Loop
The for loop is used when you know in advance how many times the script should run.

Syntax
```
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

```

Parameters:

init counter: Initialize the loop counter value
test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
increment counter: Increases the loop counter value
Examples
The example below displays the numbers from 0 to 10:

Example
```
<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>
```

#### PHP foreach Loop
The foreach loop - Loops through a block of code for each element in an array.

The PHP foreach Loop
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
```
foreach ($array as $value) {
  code to be executed;
}
```

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

Examples
The following example will output the values of the given array ($colors):

Example
```
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
```

The following example will output both the keys and the values of the given array ($age):

Example
```
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
```

### PHP Break and Continue
#### PHP Break
You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.

This example jumps out of the loop when x is equal to 4:

Example
```
<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>
```

#### PHP Continue
The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.

This example skips the value of 4:

Example
```
<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}`
?>
```

## PHP Functions
The real power of PHP comes from its functions.
PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

### PHP User Defined Functions
Besides the built-in PHP functions, it is possible to create your own functions.

A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.

### Create a User Defined Function in PHP
A user-defined function declaration starts with the word function:

Syntax

```
function functionName() {
  code to be executed;
}

```

Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.

Tip: Give the function a name that reflects what the function does!

In the example below, we create a function named "writeMsg()". The opening curly brace ( { ) indicates the beginning of the function code, and the closing curly brace ( } ) indicates the end of the function. The function outputs "Hello world!". To call the function, just write its name followed by brackets ():

Example
```
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>
```
#### PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:

Example
```
<?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
```
#### PHP is a Loosely Typed Language
In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.

In the following example we try to send both a number and a string to the function without using strict:

Example
```

<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>

```

Example
```
<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
```

To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

In the following example we try to send both a number and a string to the function, but here we have added the strict declaration:

Example
```
<?php declare(strict_types=1); // strict requirement
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>
```
The strict declaration forces things to be used in the intended way.

#### PHP Default Argument Value
The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:

Example
```
<?php declare(strict_types=1); // strict requirement
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>

```

#### PHP Functions - Returning values
To let a function return a value, use the return statement:

Example
```
<?php declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
```

### Passing Arguments by Reference
In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

by using this we can change argument value also .

Example
Use a pass-by-reference argument to update a variable:

```

<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

```

## PHP Arrays
An array stores multiple values in one single variable:

Example
```
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

```

### What is an Array?
An array is a special variable, which can hold more than one value at a time.

If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:
```
$cars1 = "Volvo";
$cars2 = "BMW";
$cars3 = "Toyota";
```

However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

The solution is to create an array!

An array can hold many values under a single name, and you can access the values by referring to an index number.

#### Create an Array in PHP
In PHP, the array() function is used to create an array:

```array();```

In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

#### Get The Length of an Array - The count() Function
The count() function is used to return the length (the number of elements) of an array:

Example
```
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

```

#### PHP Indexed Arrays

#### PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");
or the index can be assigned manually:
```
$cars[0] = "Volvo";
$cars[1] = "BMW";
```



The following example creates an indexed array named $cars, assigns three elements to it, and then prints a text containing the array values:

Example

```
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

```
#### Loop Through an Indexed Array
To loop through and print all the values of an indexed array, you could use a for loop, like this:

Example
```
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
```

### PHP Associative Arrays
#### PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
or:

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
The named keys can then be used in a script:

Example
```
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
```

#### Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop, like this:

Example
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

### PHP Multidimensional Arrays
#### PHP - Multidimensional Arrays
A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

We can store the data from the table above in a two-dimensional array, like this:
```
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
```

Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.

To get access to the elements of the $cars array we must point to the two indices (row and column):

Example
```
<?php
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
```

We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):

Example
```
<?php
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
```

## PHP Sorting Arrays

##### PHP - Sort Functions For Arrays
In this chapter, we will go through the following PHP array sort functions:

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key

#### Sort Array in Ascending Order - sort()
The following example sorts the elements of the $cars array in ascending alphabetical order:

Example
```
<?php
$cars = array("Volvo", "BMW", "Toyota");
// $numbers = array(4, 6, 2, 22, 11);

sort($cars);
?>
```

#### Sort Array in Descending Order - rsort()
The following example sorts the elements of the $cars array in descending alphabetical order:

Example
```
<?php
$cars = array("Volvo", "BMW", "Toyota");
// $numbers = array(4, 6, 2, 22, 11);

rsort($cars);
?>
```
#### Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value:

Example
```
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
?>
```

#### Sort Array (Ascending Order), According to Key - ksort()
The following example sorts an associative array in ascending order, according to the key:

Example
```
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
?>
```
#### Sort Array (Descending Order), According to Value - arsort()
The following example sorts an associative array in descending order, according to the value:

Example
```
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
?>
```
#### Sort Array (Descending Order), According to Key - krsort()
The following example sorts an associative array in descending order, according to the key:

Example
```
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
?>
```

### PHP Global Variables - Superglobals
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:
```
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

```

### PHP Superglobal - $GLOBALS
Super global variables are built-in variables that are always available in all scopes.

#### PHP $GLOBALS
$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

The example below shows how to use the super global variable $GLOBALS:

Example
```
<?php
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>
```

#### PHP Superglobal - $_SERVER
Super global variables are built-in variables that are always available in all scopes.

PHP $_SERVER
$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

The example below shows how to use some of the elements in $_SERVER:

Example

```
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

```

#### PHP Superglobal - $_REQUEST
Super global variables are built-in variables that are always available in all scopes.

PHP $_REQUEST
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field:

Example

```
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>

```

#### PHP Superglobal - $_POST
Super global variables are built-in variables that are always available in all scopes.

PHP $_POST
PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_POST to collect the value of the input field:

Example

```

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>

```

#### PHP Superglobal - $_GET
Super global variables are built-in variables that are always available in all scopes.

#### PHP $_GET
PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.



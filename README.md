# Javascript-Tutorial


JavaScript was invented by Brendan Eich in 1995, and became an ECMA(European Computer Manufacturer's Association) standard in 1997.
ECMA-262 is the official name of the standard. ECMAScript is the official name of the language.

#JavaScript Can Change HTML Content
document.getElementById("demo").innerHTML = "Hello JavaScript";

##JavaScript Can Change HTML Attribute Values
document.getElementById('myImage').src='pic_bulboff.gif'

##JavaScript Can Change HTML Styles (CSS)
document.getElementById("demo").style.color = "red";

##JavaScript Can Hide HTML Elements
document.getElementById("demo").style.display = "none";

#JavaScript Display Possibilities
##JavaScript can "display" data in different ways:

Writing into an HTML element, using innerHTML.
Writing into the HTML output using document.write().
Writing into an alert box, using window.alert().
Writing into the browser console, using console.log().


#JavaScript Code Blocks
JavaScript statements can be grouped together in code blocks, inside curly brackets {...}.

The purpose of code blocks is to define statements to be executed together.

One place you will find statements grouped together in blocks, is in JavaScript functions:

#JavaScript Values
##The JavaScript syntax defines two types of values:

Fixed values
Variable values
Fixed values are called Literals.

Variable values are called Variables.

#JavaScript Variables
In a programming language, variables are used to store data values.

JavaScript uses the keywords var, let and const to declare variables.

An equal sign is used to assign values to variables.

In this example, x is defined as a variable. Then, x is assigned (given) the value 6:

let x;
x = 6;

#JavaScript Expressions
An expression is a combination of values, variables, and operators, which computes to a value.

The computation is called an evaluation.

For example, 5 * 10 evaluates to 50:

#JavaScript Comments
Not all JavaScript statements are "executed".

Code after double slashes // or between /* and */ is treated as a comment.

Comments are ignored, and will not be executed:

#JavaScript Identifiers / Names
Identifiers are JavaScript names.

Identifiers are used to name variables and keywords, and functions.

The rules for legal names are the same in most programming languages.

A JavaScript name must begin with:

A letter (A-Z or a-z)
A dollar sign ($)
Or an underscore (_)
Subsequent characters may be letters, digits, underscores, or dollar signs.


#JavaScript Character Set
JavaScript uses the Unicode character set.

Unicode covers (almost) all the characters, punctuations, and symbols in the world.

#4 Ways to Declare a JavaScript Variable:
Using var
Using let
Using const
Using nothing


#When to Use JavaScript const?
If you want a general rule, always declare variables with const.

If you think the value of the variable can not change, use const.

#You cannot re-declare a variable declared with let or const.

This will not work:

let carName = "Volvo";
let carName;

#let keyword

The let keyword was introduced in ES6 (2015).

Variables defined with let cannot be Redeclared.

Variables defined with let must be Declared before use.

Variables defined with let have Block Scope.


#Block Scope
Before ES6 (2015), JavaScript had only Global Scope and Function Scope.

ES6 introduced two important new JavaScript keywords: let and const.

These two keywords provide Block Scope in JavaScript.

Variables declared inside a { } block cannot be accessed from outside the block:

Example
{
  let x = 2;
}


#Const variable

The const keyword was introduced in ES6 (2015).

Variables defined with const cannot be Redeclared.

Variables defined with const cannot be Reassigned.

Variables defined with const have Block Scope.


#JavaScript Objects
Objects are variables too. But objects can contain many values.

#Common HTML Events
Here is a list of some common HTML events:

Event	Description
onchange	An HTML element has been changed
onclick	The user clicks an HTML element
onmouseover	The user moves the mouse over an HTML element
onmouseout	The user moves the mouse away from an HTML element
onkeydown	The user pushes a keyboard key
onload	The browser has finished loading the page

#JavaScript Strings
##String Length
To find the length of a string, use the built-in length property:

#JavaScript Strings as Objects
Normally, JavaScript strings are primitive values, created from literals:
let x = "John"; // string
let y = new String("John"); //object
Comparing two JavaScript objects always returns false.

#JavaScript String Methods

##Extracting String Parts
There are 3 methods for extracting a part of a string:

slice(start, end)
substring(start, end)
substr(start, length)

##JavaScript String slice()
slice() extracts a part of a string and returns the extracted part in a new string.

The method takes 2 parameters: the start position, and the end position (end not included).

This example slices out a portion of a string from position 7 to position 12 (13-1):

let str = "Apple, Banana, Kiwi";
let part = str.slice(7, 13);

Output "Banana"
If a parameter is negative, the position is counted from the end of the string.
If you omit the second parameter, the method will slice out the rest of the string:

#JavaScript String substring()
substring() is similar to slice().

The difference is that substring() cannot accept negative indexes.

#JavaScript String substr()
substr() is similar to slice().

The difference is that the second parameter specifies the length of the extracted part.

#Replacing String Content
The replace() method replaces a specified value with another value in a string:

let text = "Please visit Microsoft!";
let newText = text.replace("MICROSOFT", "W3Schools");

By default, the replace() method replaces only the first match:
By default, the replace() method is case sensitive. Writing MICROSOFT (with upper-case) will not work:
To replace case insensitive, use a regular expression with an /i flag (insensitive):
let text = "Please visit Microsoft!";
let newText = text.replace(/MICROSOFT/i, "W3Schools");
To replace all matches, use a regular expression with a /g flag (global match):

#Converting to Upper and Lower Case
A string is converted to upper case with toUpperCase():

A string is converted to lower case with toLowerCase():
let text1 = "Hello World!";       // String
let text2 = text1.toLowerCase(); 

#JavaScript String concat()
concat() joins two or more strings:
let text1 = "Hello";
let text2 = "World";
let text3 = text1.concat(" ", text2);

#JavaScript String trim()
The trim() method removes whitespace from both sides of a string:

#JavaScript String Padding
ECMAScript 2017 added two String methods: padStart and padEnd to support padding at the beginning and at the end of a string.
let text = "5";
let padded = text.padStart(4,0);

 // output = 0005

 #JavaScript String charAt()
The charAt() method returns the character at a specified index (position) in a string:

Example
let text = "HELLO WORLD";
let char = text.charAt(0);

// output H

#JavaScript String charCodeAt()
The charCodeAt() method returns the unicode of the character at a specified index in a string:

The method returns a UTF-16 code (an integer between 0 and 65535).

Example
let text = "HELLO WORLD";
let char = text.charCodeAt(0);

#JavaScript String split()
A string can be converted to an array with the split() method:

Example
text.split(",")    // Split on commas
text.split(" ")    // Split on spaces
text.split("|")    // Split on pipe
text.split("")    //Split on  single characters


#JavaScript String Search

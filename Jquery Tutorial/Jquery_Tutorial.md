# jQuery Introduction
The purpose of jQuery is to make it much easier to use JavaScript on your website.

## What is jQuery?
jQuery is a lightweight, "write less, do more", JavaScript library.

The purpose of jQuery is to make it much easier to use JavaScript on your website.

jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.

jQuery also simplifies a lot of the complicated things from JavaScript, like AJAX calls and DOM manipulation.

The jQuery library contains the following features:

HTML/DOM manipulation
CSS manipulation
HTML event methods
Effects and animations
AJAX
Utilities
Tip: In addition, jQuery has plugins for almost any task out there.

### jQuery CDN
If you don't want to download and host jQuery yourself, you can include it from a CDN (Content Delivery Network).

Google is an example of someone who host jQuery:

Google CDN:
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

#### jQuery Syntax
The jQuery syntax is tailor-made for selecting HTML elements and performing some action on the element(s).

Basic syntax is: $(selector).action()

A $ sign to define/access jQuery
A (selector) to "query (or find)" HTML elements
A jQuery action() to be performed on the element(s)
Examples:

$(this).hide() - hides the current element.

$("p").hide() - hides all <p> elements.

$(".test").hide() - hides all elements with class="test".

$("#test").hide() - hides the element with id="test".

### The Document Ready Event
You might have noticed that all jQuery methods in our examples, are inside a document ready event:

 $(document).ready(function(){

  // jQuery methods go here...

});

### More Examples of jQuery Selectors
Syntax	Description	Example
$("*")	Selects all elements	
$(this)	Selects the current HTML element	
$("p.intro")	Selects all <p> elements with class="intro"	
$("p:first")	Selects the first <p> element	
$("ul li:first")	Selects the first <li> element of the first <ul>	
$("ul li:first-child")	Selects the first <li> element of every <ul>	
$("[href]")	Selects all elements with an href attribute	
$("a[target='_blank']")	Selects all <a> elements with a target attribute value equal to "_blank"	
$("a[target!='_blank']")	Selects all <a> elements with a target attribute value NOT equal to "_blank"	
$(":button")	Selects all <button> elements and <input> elements of type="button"	
$("tr:even")	Selects all even <tr> elements	
$("tr:odd")	Selects all odd <tr> elements	

Example
 $(document).ready(function(){
  $("button").click(function(){
    $("p").hide();
  });
});

## jQuery Event Methods

#### What are Events?
All the different visitors' actions that a web page can respond to are called events.

An event represents the precise moment when something happens.

Examples:

moving a mouse over an element
selecting a radio button
clicking on an element
The term "fires/fired" is often used with events. Example: "The keypress event is fired, the moment you press a key".

Here are some common DOM events:

Mouse Events	Keyboard Events	Form Events	Document/Window Events
click	keypress	submit	load
dblclick	keydown	change	resize
mouseenter	keyup	focus	scroll
mouseleave	hover 	blur	unload

#### jQuery Syntax For Event Methods
In jQuery, most DOM events have an equivalent jQuery method.

To assign a click event to all paragraphs on a page, you can do this:

$("p").click();
The next step is to define what should happen when the event fires. You must pass a function to the event:

$("p").click(function(){
  // action goes here!!
});

### jQuery Effects - Hide and Show
Hide, Show, Toggle, Slide, Fade, and Animate. WOW!

#### jQuery hide() and show()
With jQuery, you can hide and show HTML elements with the hide() and show() methods:

Example
$("#hide").click(function(){
  $("p").hide();
});

$("#show").click(function(){
  $("p").show();
});

### Syntax 
$(selector).hide(speed,callback);

$(selector).show(speed,callback);

#### jQuery toggle()
You can also toggle between hiding and showing an element with the toggle() method.

#### fade 
Examples
jQuery fadeIn()
Demonstrates the jQuery fadeIn() method.

jQuery fadeOut()
Demonstrates the jQuery fadeOut() method.

jQuery fadeToggle()
Demonstrates the jQuery fadeToggle() method.

jQuery fadeTo()
Demonstrates the jQuery fadeTo() method.

#### jQuery Effects - Sliding
Examples
jQuery slideDown()
Demonstrates the jQuery slideDown() method.

jQuery slideUp()
Demonstrates the jQuery slideUp() method.

jQuery slideToggle()

## jQuery - Get Content and Attributes

#### Get Content - text(), html(), and val()
Three simple, but useful, jQuery methods for DOM manipulation are:

text() - Sets or returns the text content of selected elements
html() - Sets or returns the content of selected elements (including HTML markup)
val() - Sets or returns the value of form fields

##### Example
$("#btn1").click(function(){
  alert("Text: " + $("#test").text());
});

### jQuery - Set Content and Attributes
##### Set Content - text(), html(), and val()
We will use the same three methods from the previous page to set content:

text() - Sets or returns the text content of selected elements
html() - Sets or returns the content of selected elements (including HTML markup)
val() - Sets or returns the value of form fields

exp 
$("#btn1").click(function(){
  $("#test1").text("Hello world!");
});

###### Callback function example
$("#btn1").click(function(){
  $("#test1").text(function(i, origText){
    return "Old text: " + origText + " New text: Hello world!
    (index: " + i + ")";
  });
});

### Set Attributes - attr()
The jQuery attr() method is also used to set/change attribute values.

The following example demonstrates how to change (set) the value of the href attribute in a link:

Example
$("button").click(function(){
  $("#w3s").attr("href", "https://www.w3schools.com/jquery/");
});

## jQuery - Add Elements
With jQuery, it is easy to add new elements/content.

### Add New HTML Content
We will look at four jQuery methods that are used to add new content:

append() - Inserts content at the end of the selected elements
prepend() - Inserts content at the beginning of the selected elements
after() - Inserts content after the selected elements
before() - Inserts content before the selected elements

exmaple
$("p").append("<b>Some appended text.</b>");

$("p").prepend("Some prepended text.");
$("img").after("Some text after");

$("img").before("Some text before");

## jQuery - Remove Elements
With jQuery, it is easy to remove existing HTML elements.

Remove Elements/Content
To remove elements and content, there are mainly two jQuery methods:

remove() - Removes the selected element (and its child elements)
empty() - Removes the child elements from the selected element
e
exmaple 
$("#div1").remove();
$("#div1").empty();

### jQuery - Get and Set CSS Classes

### jQuery Manipulating CSS
jQuery has several methods for CSS manipulation. We will look at the following methods:

addClass() - Adds one or more classes to the selected elements
removeClass() - Removes one or more classes from the selected elements
toggleClass() - Toggles between adding/removing classes from the selected elements
css() - Sets or returns the style attribute

exmaple 

$("button").click(function(){
  $("h1, h2, p").addClass("blue");
});
$("button").click(function(){
  $("h1, h2, p").removeClass("blue");
});

##### jQuery toggleClass() Method
The following example will show how to use the jQuery toggleClass() method. This method toggles between adding/removing classes from the selected elements:

Example
$("button").click(function(){
  $("h1, h2, p").toggleClass("blue");
});

### jQuery - css() Method
The css() method sets or returns one or more style properties for the selected elements.

### Set a CSS Property
To set a specified CSS property, use the following syntax:

css("propertyname","value");


### Set Multiple CSS Properties
To set multiple CSS properties, use the following syntax:

css({"propertyname":"value","propertyname":"value",...});

### jQuery width() and height() Methods

### jQuery Dimension Methods
jQuery has several important methods for working with dimensions:

width()
height()
innerWidth()
innerHeight()
outerWidth()
outerHeight()

The width() method sets or returns the width of an element (excludes padding, border and margin).

The height() method sets or returns the height of an element (excludes padding, border and margin).

jQuery innerWidth() and innerHeight() Methods
The innerWidth() method returns the width of an element (includes padding).

The innerHeight() method returns the height of an element (includes padding).


## jQuery Traversing - Ancestors
With jQuery you can traverse up the DOM tree to find ancestors of an element.

An ancestor is a parent, grandparent, great-grandparent, and so on.

Traversing Up the DOM Tree
Three useful jQuery methods for traversing up the DOM tree are:

parent() // means  it will add action to the it's parent element 
parents() // means ens it will add action to the it's all parent element 
parentsUntil() // mens it will add action to the it's parent element untile we specify selector in until

exp 

$(document).ready(function(){
  $("span").parent().css("color","red");
});

## jQuery Traversing - Descendants
With jQuery you can traverse down the DOM tree to find descendants of an element.

A descendant is a child, grandchild, great-grandchild, and so on.

Traversing Down the DOM Tree
Two useful jQuery methods for traversing down the DOM tree are:

children()
find()


### jQuery children() Method
The children() method returns all direct children of the selected element.

This method only traverses a single level down the DOM tree.

The following example returns all elements that are direct children of each <div> elements:

Example
$(document).ready(function(){
  $("div").children();
});


### jQuery find() Method
The find() method returns descendant elements of the selected element, all the way down to the last descendant.

The following example returns all <span> elements that are descendants of <div>:

Example
$(document).ready(function(){
  $("div").find("span");
});


The following example returns all descendants of <div>:

Example
$(document).ready(function(){
  $("div").find("*");
});


### jQuery Traversing - Siblings
With jQuery you can traverse sideways in the DOM tree to find siblings of an element.

Siblings share the same parent. 

Traversing Sideways in The DOM Tree
There are many useful jQuery methods for traversing sideways in the DOM tree:

siblings()
next()
nextAll()
nextUntil()
prev()
prevAll()
prevUntil()

### jQuery Traversing - Filtering
The first(), last(), eq(), filter() and not() Methods
The most basic filtering methods are first(), last() and eq(), which allow you to select a specific element based on its position in a group of elements.

Other filtering methods, like filter() and not() allow you to select elements that match, or do not match, a certain criteria.

### jQuery first() Method
The first() method returns the first element of the specified elements.

The following example selects the first <div> element:

Example
$(document).ready(function(){
  $("div").first();
});

### jQuery eq() method
The eq() method returns an element with a specific index number of the selected elements.

The index numbers start at 0, so the first element will have the index number 0 and not 1. The following example selects the second <p> element (index number 1):

Example
$(document).ready(function(){
  $("p").eq(1);
});

### jQuery filter() Method
The filter() method lets you specify a criteria. Elements that do not match the criteria are removed from the selection, and those that match will be returned.

The following example returns all <p> elements with class name "intro":

Example
$(document).ready(function(){
  $("p").filter(".intro");
});

### jQuery not() Method
The not() method returns all elements that do not match the criteria.

Tip: The not() method is the opposite of filter().

The following example returns all <p> elements that do not have class name "intro":

Example
$(document).ready(function(){
  $("p").not(".intro");
});


# jQuery - AJAX Introduction

AJAX is the art of exchanging data with a server, and updating parts of a web page - without reloading the whole page.

### What is AJAX?
AJAX = Asynchronous JavaScript and XML.

In short; AJAX is about loading data in the background and display it on the webpage, without reloading the whole page.

Examples of applications using AJAX: Gmail, Google Maps, Youtube, and Facebook tabs.

### What About jQuery and AJAX?
jQuery provides several methods for AJAX functionality.

With the jQuery AJAX methods, you can request text, HTML, XML, or JSON from a remote server using both HTTP Get and HTTP Post - And you can load the external data directly into the selected HTML elements of your web page!

## jQuery - AJAX load() Method

### jQuery load() Method
The jQuery load() method is a simple, but powerful AJAX method.

The load() method loads data from a server and puts the returned data into the selected element.

Syntax:

 $(selector).load(URL,data,callback);
The required URL parameter specifies the URL you wish to load.

The optional data parameter specifies a set of querystring key/value pairs to send along with the request.

The optional callback parameter is the name of a function to be executed after the load() method is completed.

##### Here is the content of our example file: "demo_test.txt":

<h2>jQuery and AJAX is FUN!!!</h2>
<p id="p1">This is some text in a paragraph.</p>
The following example loads the content of the file "demo_test.txt" into a specific <div> element:

Example
$("#div1").load("demo_test.txt");

It is also possible to add a jQuery selector to the URL parameter.

The following example loads the content of the element with id="p1", inside the file "demo_test.txt", into a specific <div> element:

Example
$("#div1").load("demo_test.txt #p1");

The optional callback parameter specifies a callback function to run when the load() method is completed. The callback function can have different parameters:

responseTxt - contains the resulting content if the call succeeds
statusTxt - contains the status of the call
xhr - contains the XMLHttpRequest object

Example
$("button").click(function(){
  $("#div1").load("demo_test.txt", function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
      alert("External content loaded successfully!");
    if(statusTxt == "error")
      alert("Error: " + xhr.status + ": " + xhr.statusText);
  });
});


## jQuery - AJAX get() and post() Methods

###### HTTP Methods
GET
POST
PUT
HEAD
DELETE
PATCH
OPTIONS

The jQuery get() and post() methods are used to request data from the server with an HTTP GET or POST request.

HTTP Request: GET vs. POST
Two commonly used methods for a request-response between a client and server are: GET and POST.

GET - Requests data from a specified resource
POST - Submits data to be processed to a specified resource
##### GET is basically used for just getting (retrieving) some data from the server. Note: The GET method may return cached data.

GET is used to request data from a specified resource.

GET is one of the most common HTTP methods.

Note that the query string (name/value pairs) is sent in the URL of a GET request:

/test/demo_form.php?name1=value1&name2=value2
Some other notes on GET requests:

GET requests can be cached
GET requests remain in the browser history
GET requests can be bookmarked
GET requests should never be used when dealing with sensitive data
GET requests have length restrictions
GET requests are only used to request data (not modify)

###### POST can also be used to get some data from the server. However, the POST method NEVER caches data, and is often used to send data along with the request.

###### The POST Method
POST is used to send data to a server to create/update a resource.

The data sent to the server with POST is stored in the request body of the HTTP request:

POST /test/demo_form.php HTTP/1.1
Host: w3schools.com

name1=value1&name2=value2

##### POST is one of the most common HTTP methods.

Some other notes on POST requests:

POST requests are never cached
POST requests do not remain in the browser history
POST requests cannot be bookmarked
POST requests have no restrictions on data length

### jQuery $.get() Method
The $.get() method requests data from the server with an HTTP GET request.

Syntax:

$.get(URL,callback);
The required URL parameter specifies the URL you wish to request.

The optional callback parameter is the name of a function to be executed if the request succeeds.

The following example uses the $.get() method to retrieve data from a file on the server:

Example
$("button").click(function(){
  $.get("demo_test.asp", function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});

### jQuery $.post() Method
The $.post() method requests data from the server using an HTTP POST request.

Syntax:

$.post(URL,data,callback);
The required URL parameter specifies the URL you wish to request.

The optional data parameter specifies some data to send along with the request.

The optional callback parameter is the name of a function to be executed if the request succeeds.

The following example uses the $.post() method to send some data along with the request:

Example
$("button").click(function(){
  $.post("demo_test_post.asp",
  {
    name: "Donald Duck",
    city: "Duckburg"
  },
  function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});

### jQuery - The noConflict() Method
What if you wish to use other frameworks on your pages, while still using jQuery?

jQuery and Other JavaScript Frameworks
As you already know; jQuery uses the $ sign as a shortcut for jQuery.

There are many other popular JavaScript frameworks like: Angular, Backbone, Ember, Knockout, and more.

What if other JavaScript frameworks also use the $ sign as a shortcut?

If two different frameworks are using the same shortcut, one of them might stop working.

The jQuery team have already thought about this, and implemented the noConflict() method.

#### The jQuery noConflict() Method
The noConflict() method releases the hold on the $ shortcut identifier, so that other scripts can use it.

You can of course still use jQuery, simply by writing the full name instead of the shortcut:

Example
 $.noConflict();
jQuery(document).ready(function(){
  jQuery("button").click(function(){
    jQuery("p").text("jQuery is still working!");
  });
});

##### You can also create your own shortcut very easily. The noConflict() method returns a reference to jQuery, that you can save in a variable, for later use. Here is an example:

Example
var jq = $.noConflict();
jq(document).ready(function(){
  jq("button").click(function(){
    jq("p").text("jQuery is still working!");
  });
});

If you have a block of jQuery code which uses the $ shortcut and you do not want to change it all, you can pass the $ sign in as a parameter to the ready method. This allows you to access jQuery using $, inside this function - outside of it, you will have to use "jQuery":

Example
$.noConflict();
jQuery(document).ready(function($){
  $("button").click(function(){
    $("p").text("jQuery is still working!");
  });
});


### jQuery - Filters

#### Filter Tables
Perform a case-insensitive search for items in a table:
```

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

```


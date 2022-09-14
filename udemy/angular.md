###  how to improve nodejs performance 

Caching is one of the common ways of improving the Node Js performance. Caching can be done for both client-side and server-side web applications.

However, server-side caching is the most preferred choice for Node Js performance optimization because it has JavaScript, CSS sheets, HTML pages, etc. The main usage of caching in web applications is to get faster data retrievals.


#### What are class decorators?
Class Decorators are the highest-level decorators that determine the purpose of the classes. They indicate to Angular that a specific class is a component or module. And the decorator enables us to declare this effect without having to write any code within the class.

#### What are Method decorators?
Method decorators are used to add functionality to the methods defined within our class.

Example: @HostListener, is a good example of method decorators.

#### What are property decorators?
These are the second most popular types of decorators. They enable us to enhance some of the properties in our classes. We can certainly understand why we utilize any certain class property by using a property decorator.

There are many property decorators available for example @Input(), @Output, @ReadOnly(), @Override() 

#### What are HTTP interceptors ?
it is work like middleware in angular .
Using the HttpClient, interceptors allow us to intercept incoming and outgoing HTTP requests. They are capable of handling both HttpRequest and HttpResponse. We can edit or update the value of the request by intercepting the HTTP request, and we can perform some specified actions on a specific status code or message by intercepting the answer.


#### What is view encapsulation in Angular?
View encapsulation specifies if the component's template and styles can impact the entire program or vice versa.

Angular offers three encapsulation methods:

Native: The component does not inherit styles from the main HTML. Styles defined in this component's @Component decorator are only applicable to this component.
Emulated (Default): The component inherits styles from the main HTML. Styles set in the @Component decorator are only applicable to this component.
None: The component's styles are propagated back to the main HTML and therefore accessible to all components on the page. Be wary of programs that have None and Native components. Styles will be repeated in all components with Native encapsulation if they have No encapsulation.

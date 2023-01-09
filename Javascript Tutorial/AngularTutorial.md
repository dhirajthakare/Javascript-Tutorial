# Angular Tutorial 

##### @HostBinding and @HostListener in Angular

The HostBinding & HostListener are decorators in Angular. HostListener listens to host event#### Built-in directivesswhile HostBinding allows us to bind to a property of the host element.The host is an element on which we attach our component or directive. This feature allows us to take some action whenever the user performs some action on the host element.


#### Host Element
The host element is the element on which we attach our directive or component. Remember components are directives with a view (template).

For Example

Consider the following ttToggle directive. We built this directive in our tutorial custom directive in Angular. We attach it to a button element. Here the button element is the host element.

```
<button ttToggle>Click To Toggle</button>
```
In the following example for the apphighlight directive, p element is the host element

```
<div>
  <p apphighlight>
    <div>This text will be highlighted</div>
  </p>
</div>
```

#### HostBinding
Host Binding binds a Host element property to a variable in the directive or component

### HostListener
Decorator that declares a DOM event to listen for, and provides a handler method to run when that event occurs.

### directives

#### Built-in directives
Directives are classes that add additional behavior to elements in your Angular applications. Use Angular's built-in directives to manage forms, lists, styles, and what users see.

The different types of Angular directives are as follows:

Components—directives with a template. This type of directive is the most common directive type.
Attribute directives—directives that change the appearance or behavior of an element, component, or another directive.
Structural directives—directives that change the DOM layout by adding and removing DOM elements.

#### uide covers built-in attribute directives and structural directives.

#### Built-in attribute directives
Attribute directives listen to and modify the behavior of other HTML elements, attributes, properties, and components.

Many NgModules such as the RouterModule and the FormsModule define their own attribute directives. The most common attribute directives are as follows:

NgClass—adds and removes a set of CSS classes.
NgStyle—adds and removes a set of HTML styles.
NgModel—adds two-way data binding to an HTML form element.

##### Building an attribute directive

This section walks you through creating a highlight directive that sets the background color of the host element to yellow.

To create a directive, use the CLI command ng generate directive.
```
ng generate directive highlight
```

The @Directive() decorator's configuration property specifies the directive's CSS attribute selector, [appHighlight].

Import ElementRef from @angular/core. ElementRef grants direct access to the host DOM element through its nativeElement property.

Add ElementRef in the directive's constructor() to inject a reference to the host DOM element, the element to which you apply appHighlight.

Add logic to the HighlightDirective class that sets the background to yellow.

src/app/highlight.directive.ts
```
import { Directive, ElementRef } from '@angular/core';

@Directive({
  selector: '[appHighlight]'
})
export class HighlightDirective {
    constructor(private el: ElementRef) {
       this.el.nativeElement.style.backgroundColor = 'yellow';
    }
}
```

Applying an attribute directive
To use the HighlightDirective, add a <p> element to the HTML template with the directive as an attribute.

src/app/app.component.html
```
<p appHighlight>Highlight me!</p>

```

##### Handling user events
This section shows you how to detect when a user mouses into or out of the element and to respond by setting or clearing the highlight color.

Import HostListener from '@angular/core'.

src/app/highlight.directive.ts (imports)
```
import { Directive, ElementRef, HostListener } from '@angular/core';
```

The handlers delegate to a helper method, highlight(), that sets the color on the host DOM element, el.

The complete directive is as follows:

src/app/highlight.directive.ts
```
@Directive({
  selector: '[appHighlight]'
})
export class HighlightDirective {

  constructor(private el: ElementRef) { }


  @HostListener('mouseenter') onMouseEnter() {
    this.highlight('yellow');
  }

  @HostListener('mouseleave') onMouseLeave() {
    this.highlight('');
  }

  private highlight(color: string) {
    this.el.nativeElement.style.backgroundColor = color;
  }

}
```
#### Passing values into an attribute directive
This section walks you through setting the highlight color while applying the HighlightDirective.

In highlight.directive.ts, import Input from @angular/core.

src/app/highlight.directive.ts (imports)
```
import { Directive, ElementRef, HostListener, Input } from '@angular/core';
Add an appHighlight @Input() property.
```
src/app/highlight.directive.ts
```
@Input() appHighlight = '';
```
In app.component.ts, add a color property to the AppComponent.

src/app/app.component.ts (class)
``
export class AppComponent {
  color = 'yellow';
}

``

To simultaneously apply the directive and the color, use property binding with the appHighlight directive selector, setting it equal to color.

src/app/app.component.html (color)
```
<p [appHighlight]="color">Highlight me!</p>
```
The [appHighlight] attribute binding performs two tasks:

applies the highlighting directive to the <p> element
sets the directive's highlight color with a property binding

##### Binding to a second property
This section guides you through configuring your application so the developer can set the default color.

Add a second Input() property to HighlightDirective called defaultColor.

src/app/highlight.directive.ts (defaultColor)
```
@Input() defaultColor = '';
```

To bind to the AppComponent.color and fall back to "violet" as the default color, add the following HTML. In this case, the defaultColor binding doesn't use square brackets, [], because it is static.

src/app/app.component.html (defaultColor)
```
<p [appHighlight]="color" defaultColor="violet">
  Highlight me too!
</p>
```


##### Deactivating Angular processing with NgNonBindable
To prevent expression evaluation in the browser, add ngNonBindable to the host element. ngNonBindable deactivates interpolation, directives, and binding in templates.

In the following example, the expression {{ 1 + 1 }} renders just as it does in your code editor, and does not display 2.

src/app/app.component.html
```
<p>Use ngNonBindable to stop evaluation.</p>
<p ngNonBindable>This should not evaluate: {{ 1 + 1 }}</p>
```
Applying ngNonBindable to an element stops binding for that element's child elements. However, ngNonBindable still lets directives work on the element where you apply ngNonBindable. In the following example, the appHighlight directive is still active but Angular does not evaluate the expression {{ 1 + 1 }}.

src/app/app.component.html
```
<h3>ngNonBindable with a directive</h3>
<div ngNonBindable [appHighlight]="'yellow'">This should not evaluate: {{ 1 +1 }}, but will highlight yellow.
</div>
```
If you apply ngNonBindable to a parent element, Angular disables interpolation and binding of any sort, such as property binding or event binding, for the element's children.


#### Built-in structural directives
Structural directives are responsible for HTML layout. They shape or reshape the DOM's structure, typically by adding, removing, and manipulating the host elements to which they are attached.

This section introduces the most common built-in structural directives:

NgIf—conditionally creates or disposes of subviews from the template.
NgFor—repeat a node for each item in a list.
NgSwitch—a set of directives that switch among alternative views.

#### Writing structural directives

This topic demonstrates how to create a structural directive and provides conceptual information on how directives work, how Angular interprets shorthand, and how to add template guard properties to catch template type errors.

#### Creating a structural directive
This section guides you through creating an UnlessDirective and how to set condition values. The UnlessDirective does the opposite of NgIf, and condition values can be set to true or false. NgIf displays the template content when the condition is true. UnlessDirective displays the content when the condition is false.


#### Using the Angular CLI, run the following command, where unless is the name of the directive:

```
ng generate directive unless
```

#### Transforming Data Using Pipes

Use pipes to transform strings, currency amounts, dates, and other data for display. Pipes are simple functions to use in template expressions to accept an input value and return a transformed value. Pipes are useful because you can use them throughout your application, while only declaring each pipe once. For example, you would use a pipe to show a date as April 15, 1988 rather than the raw string format.

Angular provides built-in pipes for typical data transformations, including transformations for internationalization (i18n), which use locale information to format data. The following are commonly used built-in pipes for data formatting:

DatePipe: Formats a date value according to locale rules.
UpperCasePipe: Transforms text to all upper case.
LowerCasePipe: Transforms text to all lower case.
CurrencyPipe: Transforms a number to a currency string, formatted according to locale rules.
DecimalPipe: Transforms a number into a string with a decimal point, formatted according to locale rules.
PercentPipe: Transforms a number to a percentage string, formatted according to locale rules.

##### creating custom pipes 

by using following command ou can generate pipe file 
```
ng g p pipename

```
Example 
```
import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'testpipe'
})
export class TestpipePipe implements PipeTransform {

  transform(value: number, ...args: unknown[]): number {
    return this.findFact(value);
  }
  findFact(value:number){
    let fact = 1;
    for(let i =2 ; i<=value ; i++){

      fact = fact*i;
    }
    return fact;
  }

}

```

Let us look at the code in details

We need to import the Pipe & PipeTransform libraries from Angular. These libraries are part of the Angular Core

``` 
import {Pipe, PipeTransform} from '@angular/core';
 ```

 Our class must implement the PipeTransform interface.

``` 
@pipe({
    name: 'tempConverter'
})
export class TempConverterPipe implements PipeTransform {
 
 
}
``` 
The PipeTransform interface defines only one method transform. The interface definition is as follows.
 ```
interface PipeTransform {
  transform(value: any, ...args: any[]): any
}
 ```
The first argument value is the value, that pipe needs to transform. We can also include any number of arguments. The method must return the final transformed data.

The following is Our implementation of the transform method. The first is Value and the second is the Unit. The unit expects either C (Convert to Celsius) or F ( convert to Fahrenheit). It converts the value received to either to Celsius or to Fahrenheit based on the Unit.

#### What is AOT and JIT Compiler in Angular ?
Difficulty Level : Easy
Last Updated : 05 Nov, 2020
An angular application mainly consists of HTML templates, their components which include various TypeScript files. There are some unit testing and configuration file. Whenever we run over an application, the browser cannot understand the code directly hence we have to compile our code.

#####  What is Ahead of Time (AOT) compiler ?

All technologies Ahead of Time is a process of compiling higher-level language or intermediate language into a native machine code, which is system dependent.

In simple words, when you serve/build your angular application, the Ahead of Time compiler converts your code during the build time before your browser downloads and runs that code. From Angular 9, by default compiling option is set to true for ahead of time compiler.  

#### Why should you use the Ahead of Time compiler ?

When you are using Ahead of Time Compiler, compilation only happens once, while you build your project.
We don’t have to ship the HTML templates and the Angular compiler whenever we enter a new component.
It can minimize the size of your application.
The browser does not need to compile the code in run time, it can directly render the application immediately, without waiting to compile the app first so, it provides quicker component rendering.
The Ahead of time compiler detects template error earlier. It detects and reports template binding errors during the build steps before users can see them.
AOT provides better security. It compiles HTML components and templates into JavaScript files long before they are served into the client display. So, there are no templates to read and no risky client-side HTML or JavaScript evaluation. This will reduce the chances of injections attacks.

#### How Ahead of Time works ?

We use Typescript, HTML, style-sheets to develop our Angular project and ng build –prod or ng build to build our source code into bundles which include JS files, index.html, style-sheets, and assets files.

Now Angular uses the angular compiler (whichever you have selected) to build source code, and they do it in three phases, which are code analysis, code generation and template type checking. At the end of this process, bundle size will be much smaller than the JIT compiler’s bundle size.

After that AOT builds this into a war file to deploy directly by using Heroku or by JBoss or by any other hosting that supports Node. And then we map this host to the domain by using a CNAME.

Now the clients can access your web application via the domain. The browser will download all necessary files like HTML, style-sheets, and JavaScript which is needed for the default view.  At last, your application will get bootstrap and get rendered.  

#### How to compile your app in ahead of time compiler:
 For compiling your app in Ahead of time, you don’t have to do much, because from angular 9 default compiling option is set to Ahead of time. Just add –AoT at the end ng serve –aot.

##### What is the Just in Time (JIT) compiler ?

Just in time compiler provides compilation during the execution of the program at a run time before execution. In simple words, code get compiles when it’s needed, not at the build time.

#### Why and When Should you use Just In Time Compiler ?

Just in time compiler compiles each file separately and it’s mostly compiled in the browser. You don’t have to build your project again after changing your code.
Most compiling is done on the browser side, so it will take less compiling time.
If you have a big project or a situation where some of your components don’t come in use most of the time then you should use the Just in time compiler.
Just in Time compiler is best when your application is in local development

#### How Just in Time compiler Works?

Initially, compiler was responsible for converting a high-level language into machine language, which would then be converted into executable code.

Just in time compiler, compiles code at runtime which means instead of interpreting byte code at build time, it will compile byte code when that component is called.

##### A few important points:

In case of Just in time, not all code is compiled at the initial time. Only necessary component which are going to be needed at the starting of your application will be compiled. Then if the functionality is need in your project and it’s not in compiled code, that function or component will be compiled.
This process will help to reduce the burden on the CPU and make your app render fast.
One more interesting thing is, you can see and link to your source code in inspect mode because Just in Time, compiles your code with JIT mode and a map file.


##### Comparison between Ahead of Time (AOT) and Just in Time (JIT) –

JIT	AOT
JIT downloads the compiler and compiles code exactly before Displaying in the browser.	AOT has already complied with the code while building your application, so it doesn’t have to compile at runtime.
Loading in JIT is slower than the AOT because it needs to compile your application at runtime.	Loading in AOT is much quicker than the JIT because it already has compiled your code at build time.
JIT is more suitable for development mode.	AOT is much suitable in the case of Production mode.
Bundle size is higher compare to AOT.	Bundle size optimized in AOT, in results AOT bundle size is half the size of JIT bundles.
You can run your app in JIT with this command:

ng build OR ng serve
To run your app in AOT you have to provide –aot at the end like:

ng build --aot OR ng serve --aot  
You can catch template binding error at display time.	You can catch the template error at building your application.

### Conclusion:
 You can compile your angular application in two ways: JIT and AOT. Both are suitable for a different scenario like you can use JIT for development mode and AOT is better in production mode.  Implementing features and debugging is easy in JIT mode since you have to map files while AOT does not have it. However, that AOT provides a big benefit to angular developers for production mode by reducing bundle size and making your app render faster.


### Property binding

Property binding in Angular helps you set values for properties of HTML elements or directives. Use property binding to do things such as toggle button functionality, set paths programmatically, and share values between components.

#### Binding to a property
To bind to an element's property, enclose it in square brackets, [], which identifies the property as a target property. A target property is the DOM property to which you want to assign a value. For example, the target property in the following code is the image element's src property.
```
src/app/app.component.html

<img alt="item" [src]="itemImageUrl">

```
Another example is disabling a button when the component says that it isUnchanged:

src/app/app.component.html
```
<!-- Bind button disabled state to `isUnchanged` property -->
<button type="button" [disabled]="isUnchanged">Disabled Button</button>
```

#### Attribute, class, and style bindings
Attribute binding in Angular helps you set values for attributes directly. With attribute binding, you can improve accessibility, style your application dynamically, and manage multiple CSS classes or styles simultaneously.

#### Binding to an attribute
It is recommended that you set an element property with a property binding whenever possible. However, sometimes you don't have an element property to bind. In those situations, use attribute binding.

#### Event binding
Event binding lets you listen for and respond to user actions such as keystrokes, mouse movements, clicks, and touches.

#### Binding to events
To bind to an event you use the Angular event binding syntax. This syntax consists of a target event name within parentheses to the left of an equal sign, and a quoted template statement to the right. In the following example, the target event name is click and the template statement is onSave().

Event binding syntax
```
<button (click)="onSave()">Save</button>
```

#### Two-way binding
Two-way binding gives components in your application a way to share data. Use two-way binding to listen for events and update values simultaneously between parent and child components.

Two-way binding combines property binding with event binding:

Property binding sets a specific element property.
Event binding listens for an element change event.

#### Adding two-way data binding
Angular's two-way binding syntax is a combination of square brackets and parentheses, [()]. The [()] syntax combines the brackets of property binding, [], with the parentheses of event binding, (), as follows.

src/app/app.component.html
```
<app-sizer [(size)]="fontSizePx"></app-sizer>
```

#### Lazy loading basics
This section introduces the basic procedure for configuring a lazy-loaded route. For a step-by-step example, see the step-by-step setup section on this page.

To lazy load Angular modules, use loadChildren (instead of component) in your AppRoutingModule routes configuration as follows.

AppRoutingModule (excerpt)
```
const routes: Routes = [
  {
    path: 'items',
    loadChildren: () => import('./items/items.module').then(m => m.ItemsModule)
  }
];

```

#### Step-by-step setup
There are two main steps to setting up a lazy-loaded feature module:

Create the feature module with the CLI, using the --route flag.
Configure the routes.


#### Create a feature module with routing
Next, you’ll need a feature module with a component to route to. To make one, enter the following command in the terminal, where customers is the name of the feature module. The path for loading the customers feature modules is also customers because it is specified with the --route option:

```
ng generate module customers --route customers --module app.module
```

## some concept 

### Observable
- a stream of events to which observers can subscribe.
### Observer
- an object with next, error and complete methods, which subscribes to an observable.
### Subscription function
- the function which executes each time an observer subscribes to an observable.
### Producer 
- the source of data for an observable, the thing that calls an observers next, error, and complete methods.
### Cold observable -
an observable which creates its producer.
### Hot observable -
an observable which closes over its producer.
### Finite observable -
an observable which completes.
### Infinite observable -
an observable which never completes.
### Unicast observable -
an observable whose emitted values are not shared amongst subscribers.
### Multicast observable -
an observable whose emitted values are shared amongst subscribers.

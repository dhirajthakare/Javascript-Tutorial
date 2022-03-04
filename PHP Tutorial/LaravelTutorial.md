# Meet Laravel
Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.

Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.

## Why Laravel? 
Laravel is the best choice for building modern, full-stack web applications.

#### A Progressive Framework
We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides.

If you're a senior developer, Laravel gives you robust tools for dependency injection, unit testing, queues, real-time events, and more. Laravel is fine-tuned for building professional web applications and ready to handle enterprise work loads.

#### A Scalable Framework

Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel's built-in support for fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact, Laravel applications have been easily scaled to handle hundreds of millions of requests per month.

Need extreme scaling? Platforms like Laravel Vapor allow you to run your Laravel application at nearly limitless scale on AWS's latest serverless technology.

#### A Community Framework

Laravel combines the best packages in the PHP ecosystem to offer the most robust and developer friendly framework available. In addition, thousands of talented developers from around the world have contributed to the framework. Who knows, maybe you'll even become a Laravel contributor.

## Your First Laravel Project

#### Installation Via Composer

If your computer already has PHP and Composer installed, you may create a new Laravel project by using Composer directly. After the application has been created, you may start Laravel's local development server using the Artisan CLI's serve command:

You can download composer from follwing website 
https://getcomposer.org/download/


```
composer create-project laravel/laravel example-app
 
cd example-app
 
php artisan serve

```
now after that you can view your application on  http://localhost:8080 

## Environment Based Configuration
Since many of Laravel's configuration option values may vary depending on whether your application is running on your local computer or on a production web server, many important configuration values are defined using the .env file that exists at the root of your application.

Your .env file should not be committed to your application's source control, since each developer / server using your application could require a different environment configuration. Furthermore, this would be a security risk in the event an intruder gains access to your source control repository, since any sensitive credentials would get exposed.


There are a variety of ways to use Laravel, and we'll explore two primary use cases for the framework below.
## Laravel The Full Stack Framework
 
 Laravel may serve as a full stack framework. By "full stack" framework we mean that you are going to use Laravel to route requests to your application and render your frontend via Blade templates or using a single-page application hybrid technology like Inertia.js. This is the most common way to use the Laravel framework.

 ## Laravel The API Backend

 Laravel may also serve as an API backend to a JavaScript single-page application or mobile application. For example, you might use Laravel as an API backend for your Next.js application. In this context, you may use Laravel to provide authentication and data storage / retrieval for your application, while also taking advantage of Laravel's powerful services such as queues, emails, notifications, and more

## Configuration

### Introduction

All of the configuration files for the Laravel framework are stored in the config directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.

These configuration files allow you to configure things like your database connection information, your mail server information, as well as various other core configuration values such as your application timezone and encryption key.

### Environment Configuration

It is often helpful to have different configuration values based on the environment where the application is running. For example, you may wish to use a different cache driver locally than you do on your production server.

Any variable in your .env file can be overridden by external environment variables such as server-level or system-level environment variables.

If you need to define an environment variable with a value that contains spaces, you may do so by enclosing the value in double quotes:
```
APP_NAME="My Application"
```

#### Retrieving Environment Configuration

All of the variables listed in this file will be loaded into the $_ENV PHP super-global when your application receives a request. However, you may use the env helper to retrieve values from these variables in your configuration files. In fact, if you review the Laravel configuration files, you will notice many of the options are already using this helper:
```
'debug' => env('APP_DEBUG', false),
```
The second value passed to the env function is the "default value". This value will be returned if no environment variable exists for the given key.

#### Determining The Current Environment
The current application environment is determined via the ```APP_ENV``` variable from your .env file. You may access this value via the environment method on the App

### Debug Mode
The debug option in your config/app.php configuration file determines how much information about an error is actually displayed to the user. By default, this option is set to respect the value of the APP_DEBUG environment variable, which is stored in your .env file.

For local development, you should set the APP_DEBUG environment variable to true. In your production environment, this value should always be false. If the variable is set to true in production, you risk exposing sensitive configuration values to your application's end users.

### Maintenance Mode

When your application is in maintenance mode, a custom view will be displayed for all requests into your application. This makes it easy to "disable" your application while it is updating or when you are performing maintenance. A maintenance mode check is included in the default middleware stack for your application. If the application is in maintenance mode, a Symfony\Component\HttpKernel\Exception\HttpException instance will be thrown with a status code of 503.

To enable maintenance mode, execute the down Artisan command:
```
php artisan down
```
If you would like the Refresh HTTP header to be sent with all maintenance mode responses, you may provide the refresh option when invoking the down command. The Refresh header will instruct the browser to automatically refresh the page after the specified number of seconds:
```
php artisan down --refresh=15
```
##### Bypassing Maintenance Mode
Even while in maintenance mode, you may use the secret option to specify a maintenance mode bypass token:
```
php artisan down --secret="1630542a-246b-4b66-afa1-dd72a4c43515"
```
After placing the application in maintenance mode, you may navigate to the application URL matching this token and Laravel will issue a maintenance mode bypass cookie to your browser:
```
https://example.com/1630542a-246b-4b66-afa1-dd72a4c43515
```
When accessing this hidden route, you will then be redirected to the / route of the application. Once the cookie has been issued to your browser, you will be able to browse the application normally as if it was not in maintenance mode.


###### Redirecting Maintenance Mode Requests
While in maintenance mode, Laravel will display the maintenance mode view for all application URLs the user attempts to access. If you wish, you may instruct Laravel to redirect all requests to a specific URL. This may be accomplished using the redirect option. For example, you may wish to redirect all requests to the / URI:
```
php artisan down --redirect=/error.php
```

it will redirect to ``` http://127.0.0.1:8000/error.php ```

###### Disabling Maintenance Mode
To disable maintenance mode, use the up command:
```
php artisan up
```

#### Maintenance Mode & Queues
While your application is in maintenance mode, no queued jobs will be handled. The jobs will continue to be handled as normal once the application is out of maintenance mode.

#### Alternatives To Maintenance Mode
Since maintenance mode requires your application to have several seconds of downtime, consider alternatives like Laravel Vapor and Envoyer to accomplish zero-downtime deployment with Laravel.

## Directory Structure

### Introduction
The default Laravel application structure is intended to provide a great starting point for both large and small applications. But you are free to organize your application however you like. Laravel imposes almost no restrictions on where any given class is located - as long as Composer can autoload the class

Directory structure Tutotrial you Will find out on https://laravel.com/docs/9.x/structure .

## Starter Kits

### Introduction
To give you a head start building your new Laravel application, we are happy to offer authentication and application starter kits. These kits automatically scaffold your application with the routes, controllers, and views you need to register and authenticate your application's users.

While you are welcome to use these starter kits, they are not required. You are free to build your own application from the ground up by simply installing a fresh copy of Laravel. Either way, we know you will build something great!

### Laravel Breeze
Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. Laravel Breeze's default view layer is made up of simple Blade templates styled with Tailwind CSS.

Breeze provides a wonderful starting point for beginning a fresh Laravel application and is also great choice for projects that plan to take their Blade templates to the next level with Laravel Livewire.

### Installation
Once you have created a new Laravel application, you may install Laravel Breeze using Composer:
```
composer require laravel/breeze --dev
```

After Composer has installed the Laravel Breeze package, you may run the breeze:install Artisan command. This command publishes the authentication views, routes, controllers, and other resources to your application. Laravel Breeze publishes all of its code to your application so that you have full control and visibility over its features and implementation. After Breeze is installed, you should also compile your assets so that your application's CSS file is available:

```
php artisan breeze:install
 
npm install
npm run dev
php artisan migrate
```

### Breeze & Inertia
Laravel Breeze also offers an Inertia.js frontend implementation powered by Vue or React. To use an Inertia stack, specify vue or react as your desired stack when executing the breeze:install Artisan command:
```
php artisan breeze:install vue
 
// Or...
 
php artisan breeze:install react
 
npm install
npm run dev
php artisan migrate
```

### Breeze & Next.js / API
Laravel Breeze can also scaffold an authentication API that is ready to authenticate modern JavaScript applications such as those powered by Next, Nuxt, and others. To get started, specify the api stack as your desired stack when executing the breeze:install Artisan command:
```
php artisan breeze:install api
 
php artisan migrate
```

## Laravel Jetstream
While Laravel Breeze provides a simple and minimal starting point for building a Laravel application, Jetstream augments that functionality with more robust features and additional frontend technology stacks. For those brand new to Laravel, we recommend learning the ropes with Laravel Breeze before graduating to Laravel Jetstream.

### Installation

#### Installing Jetstream
You may use Composer to install Jetstream into your new Laravel project:
```
composer require laravel/jetstream
```

After installing the Jetstream package, you may execute the jetstream:install Artisan command. This command accepts the name of the stack you prefer (livewire or inertia). In addition, you may use the --teams switch to enable team support.

New Applications Only

Jetstream should only be installed into new Laravel applications. Attempting to install Jetstream into an existing Laravel application will result in unexpected behavior and issues.

###### Install Jetstream With Livewire
```
php artisan jetstream:install livewire

php artisan jetstream:install livewire --teams

```

###### Or, Install Jetstream With Inertia
```
php artisan jetstream:install inertia

php artisan jetstream:install inertia --teams
```

###### Finalizing The Installation
After installing Jetstream, you should install and build your NPM dependencies and migrate your database:

```
npm install
npm run dev
php artisan migrate
```

## Deployment

### Introduction
When you're ready to deploy your Laravel application to production, there are some important things you can do to make sure your application is running as efficiently as possible. In this document, we'll cover some great starting points for making sure your Laravel application is deployed properly.

### Optimization
#### Autoloader Optimization

When deploying to production, make sure that you are optimizing Composer's class autoloader map so Composer can quickly find the proper file to load for a given class:
```
composer install --optimize-autoloader --no-dev
```

#### Optimizing Configuration Loading
When deploying your application to production, you should make sure that you run the config:cache Artisan command during your deployment process:
```
php artisan config:cache
```

#### Optimizing Route Loading
If you are building a large application with many routes, you should make sure that you are running the route:cache Artisan command during your deployment process:
```
php artisan route:cache
```
#### Optimizing View Loading
When deploying your application to production, you should make sure that you run the view:cache Artisan command during your deployment process:
```
php artisan view:cache
```

#### Debug Mode
The debug option in your config/app.php configuration file determines how much information about an error is actually displayed to the user. By default, this option is set to respect the value of the APP_DEBUG environment variable, which is stored in your .env file.

In your production environment, this value should always be false. If the APP_DEBUG variable is set to true in production, you risk exposing sensitive configuration values to your application's end users.

## Architecture Concepts
### Request Lifecycle
### Lifecycle Overview

#### First Steps

The entry point for all requests to a Laravel application is the public/index.php file. All requests are directed to this file by your web server (Apache / Nginx) configuration. The index.php file doesn't contain much code. Rather, it is a starting point for loading the rest of the framework.

The index.php file loads the Composer generated autoloader definition, and then retrieves an instance of the Laravel application from bootstrap/app.php. The first action taken by Laravel itself is to create an instance of the application / service container.

#### HTTP / Console Kernels
Next, the incoming request is sent to either the HTTP kernel or the console kernel, depending on the type of request that is entering the application

#### Service Providers
One of the most important kernel bootstrapping actions is loading the service providers for your application. All of the service providers for the application are configured in the config/app.php configuration file's providers array.

Laravel will iterate through this list of providers and instantiate each of them. After instantiating the providers, the register method will be called on all of the providers. Then, once all of the providers have been registered, the boot method will be called on each provider. This is so service providers may depend on every container binding being registered and available by the time their boot method is executed.

Service providers are responsible for bootstrapping all of the framework's various components, such as the database, queue, validation, and routing components. Essentially every major feature offered by Laravel is bootstrapped and configured by a service provider. Since they bootstrap and configure so many features offered by the framework, service providers are the most important aspect of the entire Laravel bootstrap process.


#### Routing
One of the most important service providers in your application is the App\Providers\RouteServiceProvider. This service provider loads the route files contained within your application's routes directory. Go ahead, crack open the RouteServiceProvider code and take a look at how it works!

Once the application has been bootstrapped and all service providers have been registered, the Request will be handed off to the router for dispatching. The router will dispatch the request to a route or controller, as well as run any route specific middleware.

Middleware provide a convenient mechanism for filtering or examining HTTP requests entering your application. For example, Laravel includes a middleware that verifies if the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to the login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application

If the request passes through all of the matched route's assigned middleware, the route or controller method will be executed and the response returned by the route or controller method will be sent back through the route's chain of middleware.

#### Finishing Up
Once the route or controller method returns a response, the response will travel back outward through the route's middleware, giving the application a chance to modify or examine the outgoing response.

Finally, once the response travels back through the middleware, the HTTP kernel's handle method returns the response object and the index.php file calls the send method on the returned response. The send method sends the response content to the user's web browser. We've finished our journey through the entire Laravel request lifecycle!

#### Focus On Service Providers

Service providers are truly the key to bootstrapping a Laravel application. The application instance is created, the service providers are registered, and the request is handed to the bootstrapped application. It's really that simple!

Having a firm grasp of how a Laravel application is built and bootstrapped via service providers is very valuable. Your application's default service providers are stored in the app/Providers directory

By default, the AppServiceProvider is fairly empty. This provider is a great place to add your application's own bootstrapping and service container bindings.For large applications, you may wish to create several service providers, each with more granular bootstrapping for specific services used by your application.

### Service Container

#### Introduction
The Laravel service container is a powerful tool for managing class dependencies and performing dependency injection. Dependency injection is a fancy phrase that essentially means this: class dependencies are "injected" into the class via the constructor or, in some cases, "setter" methods.. Dependency injection is a fancy phrase that essentially means this: class dependencies are "injected" into the class via the constructor or, in some cases, "setter" methods.

for exmaple 
```
<?php

function (Request $request) {
    dd($request);
}

```

here controller will automatically resolve the Request class and inject it into your controller's handler.This is game changing. It means you can develop your application and take advantage of dependency injection without worrying about bloated configuration files

Thankfully, many of the classes you will be writing when building a Laravel application automatically receive their dependencies via the container, including controllers, event listeners, middleware, and more. Additionally, you may type-hint dependencies in the handle method of queued jobs. Once you taste the power of automatic and zero configuration dependency injection it feels impossible to develop without it.

#### When To Use The Container
Thanks to zero configuration resolution, you will often type-hint dependencies on routes, controllers, event listeners, and elsewhere without ever manually interacting with the container. For example, you might type-hint the Illuminate\Http\Request object on your route definition so that you can easily access the current request. Even though we never have to interact with the container to write this code, it is managing the injection of these dependencies behind the scenes:

use Illuminate\Http\Request;
 
Route::get('/', function (Request $request) {
    // ...
});
In many cases, thanks to automatic dependency injection and facades, you can build Laravel applications without ever manually binding or resolving anything from the container. So, when would you ever manually interact with the container? Let's examine two situations.

### Service Providers

#### Writing Service Providers
All service providers extend the Illuminate\Support\ServiceProvider class. Most service providers contain a register and a boot method. Within the register method, you should only bind things into the service container. You should never attempt to register any event listeners, routes, or any other piece of functionality within the register method.

The Artisan CLI can generate a new provider via the make:provider command:
```
php artisan make:provider RiakServiceProvider
```

### Facades


#### Introduction
Throughout the Laravel documentation, you will see examples of code that interacts with Laravel's features via "facades". Facades provide a "static" interface to classes that are available in the application's service container. Laravel ships with many facades which provide access to almost all of Laravel's features.

Laravel facades serve as "static proxies" to underlying classes in the service container, providing the benefit of a terse, expressive syntax while maintaining more testability and flexibility than traditional static methods. It's perfectly fine if you don't totally understand how facades work under the hood - just go with the flow and continue learning about Laravel.

All of Laravel's facades are defined in the Illuminate\Support\Facades namespace

So, we can easily access a facade like so:
```
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;   
 
Route::get('/cache', function () {
    return Cache::get('key');
});
```
Throughout the Laravel documentation, many of the examples will use facades to demonstrate various features of the framework.

## The Basics

## Routing

### Basic Routing
The most basic Laravel routes accept a URI and a closure, providing a very simple and expressive method of defining routes and behavior without complicated routing configuration files:

use Illuminate\Support\Facades\Route;
``` 
Route::get('/greeting', function () {
    return 'Hello World';
});
```
### The Default Route Files

All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by your application's App\Providers\RouteServiceProvider. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection. The routes in routes/api.php are stateless and are assigned the api middleware group.

For most applications, you will begin by defining routes in your routes/web.php file. The routes defined in routes/web.php may be accessed by entering the defined route's URL in your browser. For example, you may access the following route by navigating to http://example.com/user in your browser:
```
use App\Http\Controllers\UserController;
 
Route::get('/user', [UserController::class, 'index']);
```
Routes defined in the routes/api.php file are nested within a route group by the RouteServiceProvider. Within this group, the /api URI prefix is automatically applied so you do not need to manually apply it to every route in the file. You may modify the prefix and other route group options by modifying your RouteServiceProvider class.

### Available Router Methods
The router allows you to register routes that respond to any HTTP verb:
```
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
```

Sometimes you may need to register a route that responds to multiple HTTP verbs. You may do so using the match method. Or, you may even register a route that responds to all HTTP verbs using the any method:
```
Route::match(['get', 'post'], '/', function () {
    //
});
 
Route::any('/', function () {
    //
});

```

### Dependency Injection
You may type-hint any dependencies required by your route in your route's callback signature. The declared dependencies will automatically be resolved and injected into the callback by the Laravel service container. For example, you may type-hint the Illuminate\Http\Request class to have the current HTTP request automatically injected into your route callback:
```
use Illuminate\Http\Request;
 
Route::post('/users', function (Request $request) {
    // ...
});
```

### CSRF Protection
Remember, any HTML forms pointing to POST, PUT, PATCH, or DELETE routes that are defined in the web routes file should include a CSRF token field. Otherwise, the request will be rejected. You can read more about CSRF protection in the CSRF documentation:
```
<form method="POST" action="/profile">
    @csrf
    ...
</form>
```

### Redirect Routes
If you are defining a route that redirects to another URI, you may use the Route::redirect method. This method provides a convenient shortcut so that you do not have to define a full route or controller for performing a simple redirect:
```
Route::redirect('/here', '/there');
```
By default, Route::redirect returns a 302 status code. You may customize the status code using the optional third parameter:
```
Route::redirect('/here', '/there', 301);
```
Or, you may use the Route::permanentRedirect method to return a 301 status code:
```
Route::permanentRedirect('/here', '/there');
```
Note : When using route parameters in view routes, the following parameters are reserved by Laravel and cannot be used: view, data, status, and headers.

### Route Parameters
#### Required Parameters
Sometimes you will need to capture segments of the URI within your route. For example, you may need to capture a user's ID from the URL. You may do so by defining route parameters:
```
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});
```
You may define as many route parameters as required by your route:
```
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

```
Route parameters are always encased within {} braces and should consist of alphabetic characters. Underscores (_) are also acceptable within route parameter names. Route parameters are injected into route callbacks / controllers based on their order - the names of the route callback / controller arguments do not matter.

### Parameters & Dependency Injection
If your route has dependencies that you would like the Laravel service container to automatically inject into your route's callback, you should list your route parameters after your dependencies:

use Illuminate\Http\Request;
``` 
Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});
```

### Regular Expression Constraints
You may constrain the format of your route parameters using the where method on a route instance. The where method accepts the name of the parameter and a regular expression defining how the parameter should be constrained:
```
Route::get('/user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');
 
Route::get('/user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');
 
Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
```

For convenience, some commonly used regular expression patterns have helper methods that allow you to quickly add pattern constraints to your routes:
```
Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->whereNumber('id')->whereAlpha('name');
 
Route::get('/user/{name}', function ($name) {
    //
})->whereAlphaNumeric('name');
 
Route::get('/user/{id}', function ($id) {
    //
})->whereUuid('id');
```
If the incoming request does not match the route pattern constraints, a 404 HTTP response will be returned.

### Global Constraints
If you would like a route parameter to always be constrained by a given regular expression, you may use the pattern method. You should define these patterns in the boot method of your App\Providers\RouteServiceProvider class:

```
/**
 * Define your route model bindings, pattern filters, etc.
 *
 * @return void
 */
public function boot()
{
    Route::pattern('id', '[0-9]+');
}
```

Once the pattern has been defined, it is automatically applied to all routes using that parameter name:
```
Route::get('/user/{id}', function ($id) {
    // Only executed if {id} is numeric...
});
```

### Named Routes
Named routes allow the convenient generation of URLs or redirects for specific routes. You may specify a name for a route by chaining the name method onto the route definition:
```
Route::get('/user/profile', function () {
    //
})->name('profile');
```

You may also specify route names for controller actions:

```
Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');
```
###### Note : 
Route names should always be unique.

### Generating URLs To Named Routes
Once you have assigned a name to a given route, you may use the route's name when generating URLs or redirects via Laravel's route and redirect helper functions:
```
// Generating URLs...
$url = route('profile');
 
// Generating Redirects...
return redirect()->route('profile');
```
If the named route defines parameters, you may pass the parameters as the second argument to the route function. The given parameters will automatically be inserted into the generated URL in their correct positions:
```
Route::get('/user/{id}/profile', function ($id) {
    //
})->name('profile');
 
$url = route('profile', ['id' => 1]);
```
If you pass additional parameters in the array, those key / value pairs will automatically be added to the generated URL's query string:
```
Route::get('/user/{id}/profile', function ($id) {
    //
})->name('profile');
 
$url = route('profile', ['id' => 1, 'photos' => 'yes']);
 
// /user/1/profile?photos=yes
```

### Inspecting The Current Route
If you would like to determine if the current request was routed to a given named route, you may use the named method on a Route instance. For example, you may check the current route name from a route middleware:

```
/**
 * Handle an incoming request.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \Closure  $next
 * @return mixed
 */
public function handle($request, Closure $next)
{
    if ($request->route()->named('profile')) {
        //
    }
 
    return $next($request);
}
```

### Route Groups
Route groups allow you to share route attributes, such as middleware, across a large number of routes without needing to define those attributes on each individual route.

### Middleware
To assign middleware to all routes within a group, you may use the middleware method before defining the group. Middleware are executed in the order they are listed in the array:
```
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
 
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
```

### Controllers
If a group of routes all utilize the same controller, you may use the controller method to define the common controller for all of the routes within the group. Then, when defining the routes, you only need to provide the controller method that they invoke:
```
use App\Http\Controllers\OrderController;
 
Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});
```

### Route Prefixes
The prefix method may be used to prefix each route in the group with a given URI. For example, you may want to prefix all route URIs within the group with admin:

```
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
```

### Route Name Prefixes
The name method may be used to prefix each route name in the group with a given string. For example, you may want to prefix all of the grouped route's names with admin. The given string is prefixed to the route name exactly as it is specified, so we will be sure to provide the trailing . character in the prefix:
```
Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});
```


### Route Model Binding
When injecting a model ID to a route or controller action, you will often query the database to retrieve the model that corresponds to that ID. Laravel route model binding provides a convenient way to automatically inject the model instances directly into your routes. For example, instead of injecting a user's ID, you can inject the entire User model instance that matches the given ID.

##### Implicit Binding
Laravel automatically resolves Eloquent models defined in routes or controller actions whose type-hinted variable names match a route segment name. For example:
```
use App\Models\User;
 
Route::get('/users/{user}', function (User $user) {
    return $user->email;
})
```
Since the $user variable is type-hinted as the App\Models\User Eloquent model and the variable name matches the {user} URI segment, Laravel will automatically inject the model instance that has an ID matching the corresponding value from the request URI. If a matching model instance is not found in the database, a 404 HTTP response will automatically be generated.

 Of course, implicit binding is also possible when using controller methods. Again, note the {user} URI segment matches the $user variable in the controller which contains an App\Models\User type-hint:
```
use App\Http\Controllers\UserController;
use App\Models\User;
 
// Route definition...
Route::get('/users/{user}', [UserController::class, 'show']);
 
// Controller method definition...
public function show(User $user)
{
    return view('user.profile', ['user' => $user]);
}
```

### Fallback Routes
Using the Route::fallback method, you may define a route that will be executed when no other route matches the incoming request. Typically, unhandled requests will automatically render a "404" page via your application's exception handler. However, since you would typically define the fallback route within your routes/web.php file, all middleware in the web middleware group will apply to the route. You are free to add additional middleware to this route as needed:
```
Route::fallback(function () {
    //
});
```
The fallback route should always be the last route registered by your application.

### Rate Limiting
##### Defining Rate Limiters
Laravel includes powerful and customizable rate limiting services that you may utilize to restrict the amount of traffic for a given route or group of routes. To get started, you should define rate limiter configurations that meet your application's needs. Typically, this should be done within the configureRateLimiting method of your application's App\Providers\RouteServiceProvider class.

Rate limiters are defined using the RateLimiter facade's for method. The for method accepts a rate limiter name and a closure that returns the limit configuration that should apply to routes that are assigned to the rate limiter. Limit configuration are instances of the Illuminate\Cache\RateLimiting\Limit class. This class contains helpful "builder" methods so that you can quickly define your limit. The rate limiter name may be any string you wish:
```
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
 
/**
 * Configure the rate limiters for the application.
 *
 * @return void
 */
protected function configureRateLimiting()
{
    RateLimiter::for('global', function (Request $request) {
        return Limit::perMinute(1000);
    });
}
```
If the incoming request exceeds the specified rate limit, a response with a 429 HTTP status code will automatically be returned by Laravel. If you would like to define your own response that should be returned by a rate limit, you may use the response method:
```
RateLimiter::for('global', function (Request $request) {
    return Limit::perMinute(1000)->response(function () {
        return response('Custom response...', 429);
    });
});

```

### Form Method Spoofing
HTML forms do not support PUT, PATCH, or DELETE actions. So, when defining PUT, PATCH, or DELETE routes that are called from an HTML form, you will need to add a hidden _method field to the form. The value sent with the _method field will be used as the HTTP request method:
```
<form action="/example" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
```
For convenience, you may use the @method Blade directive to generate the _method input field:

```<form action="/example" method="POST">
    @method('PUT')
    @csrf
</form>
```

### Accessing The Current Route
You may use the current, currentRouteName, and currentRouteAction methods on the Route facade to access information about the route handling the incoming request:

```
use Illuminate\Support\Facades\Route;
 
$route = Route::current(); // Illuminate\Routing\Route
$name = Route::currentRouteName(); // string
$action = Route::currentRouteAction(); // string
```

## Cross-Origin Resource Sharing (CORS)
Laravel can automatically respond to CORS OPTIONS HTTP requests with values that you configure. All CORS settings may be configured in your application's config/cors.php configuration file. The OPTIONS requests will automatically be handled by the HandleCors middleware that is included by default in your global middleware stack. Your global middleware stack is located in your application's HTTP kernel (App\Http\Kernel).

### Route Caching
When deploying your application to production, you should take advantage of Laravel's route cache. Using the route cache will drastically decrease the amount of time it takes to register all of your application's routes. To generate a route cache, execute the route:cache Artisan command:
```
php artisan route:cache
```
After running this command, your cached routes file will be loaded on every request. Remember, if you add any new routes you will need to generate a fresh route cache. Because of this, you should only run the route:cache command during your project's deployment.

You may use the route:clear command to clear the route cache:

php artisan route:clear

## Middleware

### Introduction
Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.

Additional middleware can be written to perform a variety of tasks besides authentication. For example, a logging middleware might log all incoming requests to your application. There are several middleware included in the Laravel framework, including middleware for authentication and CSRF protection. All of these middleware are located in the app/Http/Middleware directory.

### Defining Middleware
To create a new middleware, use the make:middleware Artisan command:
```
php artisan make:middleware EnsureTokenIsValid
```

This command will place a new EnsureTokenIsValid class within your app/Http/Middleware directory. In this middleware, we will only allow access to the route if the supplied token input matches a specified value. Otherwise, we will redirect the users back to the home URI:

```
<?php
 
namespace App\Http\Middleware;
 
use Closure;
 
class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('token') !== 'my-secret-token') {
            return redirect('home');
        }
 
        return $next($request);
    }
}

```
As you can see, if the given token does not match our secret token, the middleware will return an HTTP redirect to the client; otherwise, the request will be passed further into the application. To pass the request deeper into the application (allowing the middleware to "pass"), you should call the $next callback with the $request.

It's best to envision middleware as a series of "layers" HTTP requests must pass through before they hit your application. Each layer can examine the request and even reject it entirely.

Note : All middleware are resolved via the service container, so you may type-hint any dependencies you need within a middleware's constructor.

### Middleware & Responses

Of course, a middleware can perform tasks before or after passing the request deeper into the application. For example, the following middleware would perform some task before the request is handled by the application:
```
<?php
 
namespace App\Http\Middleware;
 
use Closure;
 
class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform action
 
        return $next($request);
    }
}
```
However, this middleware would perform its task after the request is handled by the application:
```
<?php
 
namespace App\Http\Middleware;
 
use Closure;
 
class AfterMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
 
        // Perform action
 
        return $response;
    }
}
```

### Registering Middleware

#### Global Middleware
If you want a middleware to run during every HTTP request to your application, list the middleware class in the $middleware property of your app/Http/Kernel.php class.

#### Assigning Middleware To Routes
If you would like to assign middleware to specific routes, you should first assign the middleware a key in your application's app/Http/Kernel.php file. By default, the $routeMiddleware property of this class contains entries for the middleware included with Laravel. You may add your own middleware to this list and assign it a key of your choosing:
```
// Within App\Http\Kernel class...
 
protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
    'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
    'can' => \Illuminate\Auth\Middleware\Authorize::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
];
```

Once the middleware has been defined in the HTTP kernel, you may use the middleware method to assign middleware to a route:
```
Route::get('/profile', function () {
    //
})->middleware('auth');
```
You may assign multiple middleware to the route by passing an array of middleware names to the middleware method:
```
Route::get('/', function () {
    //
})->middleware(['first', 'second']);

```
When assigning middleware, you may also pass the fully qualified class name:

use App\Http\Middleware\EnsureTokenIsValid;
``` 
Route::get('/profile', function () {
    //
})->middleware(EnsureTokenIsValid::class);
```
this will be also work if we did not define middeleware in kernel.php file 

#### Excluding Middleware
When assigning middleware to a group of routes, you may occasionally need to prevent the middleware from being applied to an individual route within the group. You may accomplish this using the withoutMiddleware method:
```
use App\Http\Middleware\EnsureTokenIsValid;
 
Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/', function () {
        //
    });
 
    Route::get('/profile', function () {
        //
    })->withoutMiddleware([EnsureTokenIsValid::class]);
});
```
You may also exclude a given set of middleware from an entire group of route definitions:
```
use App\Http\Middleware\EnsureTokenIsValid;
 
Route::withoutMiddleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/profile', function () {
        //
    });
});
```
The withoutMiddleware method can only remove route middleware and does not apply to global middleware.

#### Middleware Groups
Sometimes you may want to group several middleware under a single key to make them easier to assign to routes. You may accomplish this using the $middlewareGroups property of your HTTP kernel.

Out of the box, Laravel comes with web and api middleware groups that contain common middleware you may want to apply to your web and API routes. Remember, these middleware groups are automatically applied by your application's App\Providers\RouteServiceProvider service provider to routes within your corresponding web and api route files:
```
/**
 * The application's route middleware groups.
 *
 * @var array
 */
protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        // \Illuminate\Session\Middleware\AuthenticateSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
 
    'api' => [
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
];
```
Middleware groups may be assigned to routes and controller actions using the same syntax as individual middleware. Again, middleware groups make it more convenient to assign many middleware to a route at once:
```
Route::get('/', function () {
    //
})->middleware('web');
 
Route::middleware(['web'])->group(function () {
    //
});

```

Note :- Out of the box, the web and api middleware groups are automatically applied to your application's corresponding routes/web.php and routes/api.php files by the App\Providers\RouteServiceProvider.

### Sorting Middleware
Rarely, you may need your middleware to execute in a specific order but not have control over their order when they are assigned to the route. In this case, you may specify your middleware priority using the $middlewarePriority property of your app/Http/Kernel.php file. This property may not exist in your HTTP kernel by default. If it does not exist, you may copy its default definition below:
```
/**
 * The priority-sorted list of middleware.
 *
 * This forces non-global middleware to always be in the given order.
 *
 * @var string[]
 */
protected $middlewarePriority = [
    \Illuminate\Cookie\Middleware\EncryptCookies::class,
    \Illuminate\Session\Middleware\StartSession::class,
    \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    \Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests::class,
    \Illuminate\Routing\Middleware\ThrottleRequests::class,
    \Illuminate\Routing\Middleware\ThrottleRequestsWithRedis::class,
    \Illuminate\Session\Middleware\AuthenticateSession::class,
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
    \Illuminate\Auth\Middleware\Authorize::class,
];
```
### Middleware Parameters
Middleware can also receive additional parameters. For example, if your application needs to verify that the authenticated user has a given "role" before performing a given action, you could create an EnsureUserHasRole middleware that receives a role name as an additional argument.

Additional middleware parameters will be passed to the middleware after the $next argument:
```
<?php
 
namespace App\Http\Middleware;
 
use Closure;
 
class EnsureUserHasRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            // Redirect...
        }
 
        return $next($request);
    }
 
}
```
Middleware parameters may be specified when defining the route by separating the middleware name and parameters with a :. Multiple parameters should be delimited by commas:
```
Route::put('/post/{id}', function ($id) {
    //
})->middleware('role:editor');
```

### Terminable Middleware
Sometimes a middleware may need to do some work after the HTTP response has been sent to the browser. If you define a terminate method on your middleware and your web server is using FastCGI, the terminate method will automatically be called after the response is sent to the browser:
```
<?php
 
namespace Illuminate\Session\Middleware;
 
use Closure;
 
class TerminatingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
 
    /**
     * Handle tasks after the response has been sent to the browser.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate($request, $response)
    {
        // ...
    }
}
```
The terminate method should receive both the request and the response. Once you have defined a terminable middleware, you should add it to the list of routes or global middleware in the app/Http/Kernel.php file.

## CSRF Protection
### Introduction
Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user. Thankfully, Laravel makes it easy to protect your application from cross-site request forgery (CSRF) attacks.

### An Explanation Of The Vulnerability
In case you're not familiar with cross-site request forgeries, let's discuss an example of how this vulnerability can be exploited. Imagine your application has a /user/email route that accepts a POST request to change the authenticated user's email address. Most likely, this route expects an email input field to contain the email address the user would like to begin using.

Without CSRF protection, a malicious website could create an HTML form that points to your application's /user/email route and submits the malicious user's own email address:
```
<form action="https://your-application.com/user/email" method="POST">
    <input type="email" value="malicious-email@example.com">
</form>
 
<script>
    document.forms[0].submit();
</script>
```

If the malicious website automatically submits the form when the page is loaded, the malicious user only needs to lure an unsuspecting user of your application to visit their website and their email address will be changed in your application.

To prevent this vulnerability, we need to inspect every incoming POST, PUT, PATCH, or DELETE request for a secret session value that the malicious application is unable to access.

### Preventing CSRF Requests
Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the person actually making the requests to the application. Since this token is stored in the user's session and changes each time the session is regenerated, a malicious application is unable to access it.

The current session's CSRF token can be accessed via the request's session or via the csrf_token helper function:
```
use Illuminate\Http\Request;
 
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
    // ...
});
```

Anytime you define a "POST", "PUT", "PATCH", or "DELETE" HTML form in your application, you should include a hidden CSRF _token field in the form so that the CSRF protection middleware can validate the request. For convenience, you may use the @csrf Blade directive to generate the hidden token input field:
```
<form method="POST" action="/profile">
    @csrf
 
    <!-- Equivalent to... -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>
```

The App\Http\Middleware\VerifyCsrfToken middleware, which is included in the web middleware group by default, will automatically verify that the token in the request input matches the token stored in the session. When these two tokens match, we know that the authenticated user is the one initiating the request.


### CSRF Tokens & SPAs
If you are building an SPA that is utilizing Laravel as an API backend, you should consult the Laravel Sanctum documentation(https://laravel.com/docs/9.x/sanctum) for information on authenticating with your API and protecting against CSRF vulnerabilities.


### Excluding URIs From CSRF Protection
Sometimes you may wish to exclude a set of URIs from CSRF protection. For example, if you are using Stripe to process payments and are utilizing their webhook system, you will need to exclude your Stripe webhook handler route from CSRF protection since Stripe will not know what CSRF token to send to your routes.

Typically, you should place these kinds of routes outside of the web middleware group that the App\Providers\RouteServiceProvider applies to all routes in the routes/web.php file. However, you may also exclude the routes by adding their URIs to the $except property of the VerifyCsrfToken middleware:
```
<?php
 
namespace App\Http\Middleware;
 
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
 
class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'stripe/*',
        'http://example.com/foo/bar',
        'http://example.com/foo/*',
    ];
}

```

Note := For convenience, the CSRF middleware is automatically disabled for all routes when running tests.

### X-CSRF-TOKEN
In addition to checking for the CSRF token as a POST parameter, the App\Http\Middleware\VerifyCsrfToken middleware will also check for the X-CSRF-TOKEN request header. You could, for example, store the token in an HTML meta tag:
```
<meta name="csrf-token" content="{{ csrf_token() }}">
```
Then, you can instruct a library like jQuery to automatically add the token to all request headers. This provides simple, convenient CSRF protection for your AJAX based applications using legacy JavaScript technology:
```
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
```

### X-XSRF-TOKEN
Laravel stores the current CSRF token in an encrypted XSRF-TOKEN cookie that is included with each response generated by the framework. You can use the cookie value to set the X-XSRF-TOKEN request header.

This cookie is primarily sent as a developer convenience since some JavaScript frameworks and libraries, like Angular and Axios, automatically place its value in the X-XSRF-TOKEN header on same-origin requests.

By default, the resources/js/bootstrap.js file includes the Axios HTTP library which will automatically send the X-XSRF-TOKEN header for you.

## Controllers

### Introduction

Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using "controller" classes. Controllers can group related request handling logic into a single class. For example, a UserController class might handle all incoming requests related to users, including showing, creating, updating, and deleting users. By default, controllers are stored in the app/Http/Controllers directory.

### Writing Controllers
### Basic Controllers
Let's take a look at an example of a basic controller. Note that the controller extends the base controller class included with Laravel: App\Http\Controllers\Controller:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
```

You can define a route to this controller method like so:

``` 
use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class, 'show']);
```
When an incoming request matches the specified route URI, the show method on the App\Http\Controllers\UserController class will be invoked and the route parameters will be passed to the method.

Note :- Controllers are not required to extend a base class. However, you will not have access to convenient features such as the middleware and authorize methods.

#### Single Action Controllers
If a controller action is particularly complex, you might find it convenient to dedicate an entire controller class to that single action. To accomplish this, you may define a single __invoke method within the controller:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class ProvisionServer extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        // ...
    }
}
```
When registering routes for single action controllers, you do not need to specify a controller method. Instead, you may simply pass the name of the controller to the router:
```
use App\Http\Controllers\ProvisionServer;
 
Route::post('/server', ProvisionServer::class);
```
You may generate an invokable controller by using the --invokable option of the make:controller Artisan command:
```
php artisan make:controller ProvisionServer --invokable
```
Note : - Controller stubs may be customized using stub publishing.

Controller Middleware
Middleware may be assigned to the controller's routes in your route files:
```
Route::get('profile', [UserController::class, 'show'])->middleware('auth');
```
Or, you may find it convenient to specify middleware within your controller's constructor. Using the middleware method within your controller's constructor, you can assign middleware to the controller's actions:
```
class UserController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('log')->only('index');
        $this->middleware('subscribed')->except('store');
    }
}
Controllers also allow you to register middleware using a closure. This provides a convenient way to define an inline middleware for a single controller without defining an entire middleware class:

$this->middleware(function ($request, $next) {
    return $next($request);
});
```
### Resource Controllers
If you think of each Eloquent model in your application as a "resource", it is typical to perform the same sets of actions against each resource in your application. For example, imagine your application contains a Photo model and a Movie model. It is likely that users can create, read, update, or delete these resources.

Because of this common use case, Laravel resource routing assigns the typical create, read, update, and delete ("CRUD") routes to a controller with a single line of code. To get started, we can use the make:controller Artisan command's --resource option to quickly create a controller to handle these actions:
```
php artisan make:controller PhotoController --resource
```

This command will generate a controller at app/Http/Controllers/PhotoController.php. The controller will contain a method for each of the available resource operations. Next, you may register a resource route that points to the controller:
```
use App\Http\Controllers\PhotoController;
 
Route::resource('photos', PhotoController::class);
```

This single route declaration creates multiple routes to handle a variety of actions on the resource. The generated controller will already have methods stubbed for each of these actions. Remember, you can always get a quick overview of your application's routes by running the route:list Artisan command.

You may even register many resource controllers at once by passing an array to the resources method:
```
Route::resources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);
```

###### Actions Handled By Resource Controller
```
Verb	URI	Action	Route Name
GET	/photos	index	photos.index
GET	/photos/create	create	photos.create
POST	/photos	store	photos.store
GET	/photos/{photo}	show	photos.show
GET	/photos/{photo}/edit	edit	photos.edit
PUT/PATCH	/photos/{photo}	update	photos.update
DELETE	/photos/{photo}	destroy	photos.destroy
```

##### Customizing Missing Model Behavior
Typically, a 404 HTTP response will be generated if an implicitly bound resource model is not found. However, you may customize this behavior by calling the missing method when defining your resource route. The missing method accepts a closure that will be invoked if an implicitly bound model can not be found for any of the resource's routes:
```
use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
 
Route::resource('photos', PhotoController::class)
        ->missing(function (Request $request) {
            return Redirect::route('photos.index');
        });
```
##### Specifying The Resource Model
If you are using route model binding and would like the resource controller's methods to type-hint a model instance, you may use the --model option when generating the controller:
```
php artisan make:controller PhotoController --model=Photo --resource
```
##### Generating Form Requests
You may provide the --requests option when generating a resource controller to instruct Artisan to generate form request classes for the controller's storage and update methods:
```
php artisan make:controller PhotoController --model=Photo --resource --requests
```

##### API Resource Routes
When declaring resource routes that will be consumed by APIs, you will commonly want to exclude routes that present HTML templates such as create and edit. For convenience, you may use the apiResource method to automatically exclude these two routes:
```
use App\Http\Controllers\PhotoController;
 
Route::apiResource('photos', PhotoController::class);
```
You may register many API resource controllers at once by passing an array to the apiResources method:
```
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
 
Route::apiResources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);
```
To quickly generate an API resource controller that does not include the create or edit methods, use the --api switch when executing the make:controller command:
```
php artisan make:controller PhotoController --api
```
##### Nested Resources
Sometimes you may need to define routes to a nested resource. For example, a photo resource may have multiple comments that may be attached to the photo. To nest the resource controllers, you may use "dot" notation in your route declaration:
```
use App\Http\Controllers\PhotoCommentController;
 
Route::resource('photos.comments', PhotoCommentController::class);
```
This route will register a nested resource that may be accessed with URIs like the following:
```
/photos/{photo}/comments/{comment}
```
##### Supplementing Resource Controllers
If you need to add additional routes to a resource controller beyond the default set of resource routes, you should define those routes before your call to the Route::resource method; otherwise, the routes defined by the resource method may unintentionally take precedence over your supplemental routes:
```
use App\Http\Controller\PhotoController;
 
Route::get('/photos/popular', [PhotoController::class, 'popular']);
Route::resource('photos', PhotoController::class);
```

### Dependency Injection & Controllers
##### Constructor Injection
The Laravel service container is used to resolve all Laravel controllers. As a result, you are able to type-hint any dependencies your controller may need in its constructor. The declared dependencies will automatically be resolved and injected into the controller instance:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Repositories\UserRepository;
 
class UserController extends Controller
{
    /**
     * The user repository instance.
     */
    protected $users;
 
    /**
     * Create a new controller instance.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }
}
```
###### Method Injection
In addition to constructor injection, you may also type-hint dependencies on your controller's methods. A common use-case for method injection is injecting the Illuminate\Http\Request instance into your controller methods:
````
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
 
        //
    }
}
````

If your controller method is also expecting input from a route parameter, list your route arguments after your other dependencies. For example, if your route is defined like so:
```
use App\Http\Controllers\UserController;
 
Route::put('/user/{id}', [UserController::class, 'update']);
```
You may still type-hint the Illuminate\Http\Request and access your id parameter by defining your controller method as follows:
```
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    /**
     * Update the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
```

## HTTP Requests
### Introduction
Laravel's Illuminate\Http\Request class provides an object-oriented way to interact with the current HTTP request being handled by your application as well as retrieve the input, cookies, and files that were submitted with the request.

#### Interacting With The Request
##### Accessing The Request
To obtain an instance of the current HTTP request via dependency injection, you should type-hint the Illuminate\Http\Request class on your route closure or controller method. The incoming request instance will automatically be injected by the Laravel service container:
```
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
 
        //
    }
}
```

As mentioned, you may also type-hint the Illuminate\Http\Request class on a route closure. The service container will automatically inject the incoming request into the closure when it is executed:

use Illuminate\Http\Request;
``` 
Route::get('/', function (Request $request) {
    //
});
```

#### Dependency Injection & Route Parameters
If your controller method is also expecting input from a route parameter you should list your route parameters after your other dependencies. For example, if your route is defined like so:
```
use App\Http\Controllers\UserController;
 
Route::put('/user/{id}', [UserController::class, 'update']);
```
You may still type-hint the Illuminate\Http\Request and access your id route parameter by defining your controller method as follows:
```
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
```

#### Request Path & Method
The Illuminate\Http\Request instance provides a variety of methods for examining the incoming HTTP request and extends the Symfony\Component\HttpFoundation\Request class. We will discuss a few of the most important methods below.

##### Retrieving The Request Path
The path method returns the request's path information. So, if the incoming request is targeted at http://example.com/foo/bar, the path method will return foo/bar:
```
$uri = $request->path();
```

##### Inspecting The Request Path / Route
The is method allows you to verify that the incoming request path matches a given pattern. You may use the * character as a wildcard when utilizing this method:
```
if ($request->is('admin/*')) {
    //
}
```
Using the routeIs method, you may determine if the incoming request has matched a named route:
```
if ($request->routeIs('admin.*')) {
    //
}
```

##### Retrieving The Request URL
To retrieve the full URL for the incoming request you may use the url or fullUrl methods. The url method will return the URL without the query string, while the fullUrl method includes the query string:
```
$url = $request->url();
 
$urlWithQueryString = $request->fullUrl();
```

If you would like to append query string data to the current URL, you may call the fullUrlWithQuery method. This method merges the given array of query string variables with the current query string:
```
$request->fullUrlWithQuery(['type' => 'phone']);
```

##### Retrieving The Request Method
The method method will return the HTTP verb for the request. You may use the isMethod method to verify that the HTTP verb matches a given string:
```
$method = $request->method();
 
if ($request->isMethod('post')) {
    //
}
```

##### Request Headers
You may retrieve a request header from the Illuminate\Http\Request instance using the header method. If the header is not present on the request, null will be returned. However, the header method accepts an optional second argument that will be returned if the header is not present on the request:
```
$value = $request->header('X-Header-Name');
 
$value = $request->header('X-Header-Name', 'default');
```

The hasHeader method may be used to determine if the request contains a given header:
```
if ($request->hasHeader('X-Header-Name')) {
    //
}
```

For convenience, the bearerToken method may be used to retrieve a bearer token from the Authorization header. If no such header is present, an empty string will be returned:
```
$token = $request->bearerToken();
```

##### Request IP Address
The ip method may be used to retrieve the IP address of the client that made the request to your application:
```
$ipAddress = $request->ip();
```

##### Content Negotiation
Laravel provides several methods for inspecting the incoming request's requested content types via the Accept header. First, the getAcceptableContentTypes method will return an array containing all of the content types accepted by the request:
```
$contentTypes = $request->getAcceptableContentTypes();
```
The accepts method accepts an array of content types and returns true if any of the content types are accepted by the request. Otherwise, false will be returned:
```
if ($request->accepts(['text/html', 'application/json'])) {
    // ...
}
```
You may use the prefers method to determine which content type out of a given array of content types is most preferred by the request. If none of the provided content types are accepted by the request, null will be returned:
```
$preferred = $request->prefers(['text/html', 'application/json']);
```
Since many applications only serve HTML or JSON, you may use the expectsJson method to quickly determine if the incoming request expects a JSON response:
```
if ($request->expectsJson()) {
    // ...
}
```
##### PSR-7 Requests
The PSR-7 standard specifies interfaces for HTTP messages, including requests and responses. If you would like to obtain an instance of a PSR-7 request instead of a Laravel request, you will first need to install a few libraries. Laravel uses the Symfony HTTP Message Bridge component to convert typical Laravel requests and responses into PSR-7 compatible implementations:
```
composer require symfony/psr-http-message-bridge
composer require nyholm/psr7
```
Once you have installed these libraries, you may obtain a PSR-7 request by type-hinting the request interface on your route closure or controller method:
```
use Psr\Http\Message\ServerRequestInterface;
 
Route::get('/', function (ServerRequestInterface $request) {
    //
});
```

Note : If you return a PSR-7 response instance from a route or controller, it will automatically be converted back to a Laravel response instance and be displayed by the framework. 

### Input
#### Retrieving Input
Retrieving All Input Data
You may retrieve all of the incoming request's input data as an array using the all method. This method may be used regardless of whether the incoming request is from an HTML form or is an XHR request:
```
$input = $request->all();
```
Using the collect method, you may retrieve all of the incoming request's input data as a collection:
```
$input = $request->collect();
```
The collect method also allows you to retrieve a subset of the incoming request input as a collection:
```
$request->collect('users')->each(function ($user) {
    // ...
});
```

##### Retrieving An Input Value
Using a few simple methods, you may access all of the user input from your Illuminate\Http\Request instance without worrying about which HTTP verb was used for the request. Regardless of the HTTP verb, the input method may be used to retrieve user input:
```
$name = $request->input('name');
```
You may pass a default value as the second argument to the input method. This value will be returned if the requested input value is not present on the request:
```
$name = $request->input('name', 'Sally');
```
When working with forms that contain array inputs, use "dot" notation to access the arrays:
```
$name = $request->input('products.0.name');
 
$names = $request->input('products.*.name');
```
You may call the input method without any arguments in order to retrieve all of the input values as an associative array:
```
$input = $request->input();
```
Retrieving Input From The Query String
While the input method retrieves values from the entire request payload (including the query string), the query method will only retrieve values from the query string:
```
$name = $request->query('name');
```
If the requested query string value data is not present, the second argument to this method will be returned:
```
$name = $request->query('name', 'Helen');
```
You may call the query method without any arguments in order to retrieve all of the query string values as an associative array:
```
$query = $request->query();
```
##### Retrieving JSON Input Values
When sending JSON requests to your application, you may access the JSON data via the input method as long as the Content-Type header of the request is properly set to application/json. You may even use "dot" syntax to retrieve values that are nested within JSON arrays:
```
$name = $request->input('user.name');
```
Retrieving Boolean Input Values
When dealing with HTML elements like checkboxes, your application may receive "truthy" values that are actually strings. For example, "true" or "on". For convenience, you may use the boolean method to retrieve these values as booleans. The boolean method returns true for 1, "1", true, "true", "on", and "yes". All other values will return false:
```
$archived = $request->boolean('archived');
```
Retrieving Date Input Values
For convenience, input values containing dates / times may be retrieved as Carbon instances using the date method. If the request does not contain an input value with the given name, null will be returned:
```
$birthday = $request->date('birthday');
```
The second and third arguments accepted by the date method may be used to specify the date's format and timezone, respectively:
```
$elapsed = $request->date('elapsed', '!H:i', 'Europe/Madrid');
```
If the input value is present but has an invalid format, an InvalidArgumentException will be thrown; therefore, it is recommended that you validate the input before invoking the date method.

##### Retrieving Input Via Dynamic Properties
You may also access user input using dynamic properties on the Illuminate\Http\Request instance. For example, if one of your application's forms contains a name field, you may access the value of the field like so:
```
$name = $request->name;
```
When using dynamic properties, Laravel will first look for the parameter's value in the request payload. If it is not present, Laravel will search for the field in the matched route's parameters.

Retrieving A Portion Of The Input Data
If you need to retrieve a subset of the input data, you may use the only and except methods. Both of these methods accept a single array or a dynamic list of arguments:
```
$input = $request->only(['username', 'password']);
 
$input = $request->only('username', 'password');
 
$input = $request->except(['credit_card']);
 
$input = $request->except('credit_card');
```

Note :-The only method returns all of the key / value pairs that you request; however, it will not return key / value pairs that are not present on the request.

##### Determining If Input Is Present
You may use the has method to determine if a value is present on the request. The has method returns true if the value is present on the request:
```
if ($request->has('name')) {
    //
}
When given an array, the has method will determine if all of the specified values are present:

if ($request->has(['name', 'email'])) {
    //
}
```

##### Determining If Input Is Present
You may use the has method to determine if a value is present on the request. The has method returns true if the value is present on the request:
```
if ($request->has('name')) {
    //
}
```
When given an array, the has method will determine if all of the specified values are present:
```
if ($request->has(['name', 'email'])) {
    //
}
```
The whenHas method will execute the given closure if a value is present on the request:
```
$request->whenHas('name', function ($input) {
    //
});
```
A second closure may be passed to the whenHas method that will be executed if the specified value is not present on the request:
```
$request->whenHas('name', function ($input) {
    // The "name" value is present...
}, function () {
    // The "name" value is not present...
});
```
The hasAny method returns true if any of the specified values are present:
```
if ($request->hasAny(['name', 'email'])) {
    //
}
```
If you would like to determine if a value is present on the request and is not empty, you may use the filled method:
```
if ($request->filled('name')) {
    //
}
```
The whenFilled method will execute the given closure if a value is present on the request and is not empty:
```
$request->whenFilled('name', function ($input) {
    //
});
```
A second closure may be passed to the whenFilled method that will be executed if the specified value is not "filled":
```
$request->whenFilled('name', function ($input) {
    // The "name" value is filled...
}, function () {
    // The "name" value is not filled...
});
```
To determine if a given key is absent from the request, you may use the missing method:
```
if ($request->missing('name')) {
    //
}
```
##### Merging Additional Input
Sometimes you may need to manually merge additional input into the request's existing input data. To accomplish this, you may use the merge method:
```
$request->merge(['votes' => 0]);
```
The mergeIfMissing method may be used to merge input into the request if the corresponding keys do not already exist within the request's input data:
```
$request->mergeIfMissing(['votes' => 0]);
```

##### Old Input
Laravel allows you to keep input from one request during the next request. This feature is particularly useful for re-populating forms after detecting validation errors. However, if you are using Laravel's included validation features, it is possible that you will not need to manually use these session input flashing methods directly, as some of Laravel's built-in validation facilities will call them automatically.

##### Flashing Input To The Session
The flash method on the Illuminate\Http\Request class will flash the current input to the session so that it is available during the user's next request to the application:
```
$request->flash();
```
You may also use the flashOnly and flashExcept methods to flash a subset of the request data to the session. These methods are useful for keeping sensitive information such as passwords out of the session:
```
$request->flashOnly(['username', 'email']);
 
$request->flashExcept('password');
```
Flashing Input Then Redirecting
Since you often will want to flash input to the session and then redirect to the previous page, you may easily chain input flashing onto a redirect using the withInput method:
```
return redirect('form')->withInput();
 
return redirect()->route('user.create')->withInput();
 
return redirect('form')->withInput(
    $request->except('password')
);
```
Retrieving Old Input
To retrieve flashed input from the previous request, invoke the old method on an instance of Illuminate\Http\Request. The old method will pull the previously flashed input data from the session:
```
$username = $request->old('username');
```
Laravel also provides a global old helper. If you are displaying old input within a Blade template, it is more convenient to use the old helper to repopulate the form. If no old input exists for the given field, null will be returned:
```
<input type="text" name="username" value="{{ old('username') }}">
```

### Cookies
Retrieving Cookies From Requests
All cookies created by the Laravel framework are encrypted and signed with an authentication code, meaning they will be considered invalid if they have been changed by the client. To retrieve a cookie value from the request, use the cookie method on an Illuminate\Http\Request instance:
```
$value = $request->cookie('name');
```

#### Input Trimming & Normalization
By default, Laravel includes the App\Http\Middleware\TrimStrings and App\Http\Middleware\ConvertEmptyStringsToNull middleware in your application's global middleware stack. These middleware are listed in the global middleware stack by the App\Http\Kernel class. These middleware will automatically trim all incoming string fields on the request, as well as convert any empty string fields to null. This allows you to not have to worry about these normalization concerns in your routes and controllers.

If you would like to disable this behavior, you may remove the two middleware from your application's middleware stack by removing them from the $middleware property of your App\Http\Kernel class.

### Files
##### Retrieving Uploaded Files
You may retrieve uploaded files from an Illuminate\Http\Request instance using the file method or using dynamic properties. The file method returns an instance of the Illuminate\Http\UploadedFile class, which extends the PHP SplFileInfo class and provides a variety of methods for interacting with the file:
```
$file = $request->file('photo');
 
$file = $request->photo;
```
You may determine if a file is present on the request using the hasFile method:
```
if ($request->hasFile('photo')) {
    //
}
```
##### Validating Successful Uploads
In addition to checking if the file is present, you may verify that there were no problems uploading the file via the isValid method:
```
if ($request->file('photo')->isValid()) {
    //
}
```
##### File Paths & Extensions
The UploadedFile class also contains methods for accessing the file's fully-qualified path and its extension. The extension method will attempt to guess the file's extension based on its contents. This extension may be different from the extension that was supplied by the client:
```
$path = $request->photo->path();
 
$extension = $request->photo->extension();
```
###### Other File Methods
There are a variety of other methods available on UploadedFile instances. Check out the API documentation for the class for more information regarding these methods.

###### Storing Uploaded Files
To store an uploaded file, you will typically use one of your configured filesystems. The UploadedFile class has a store method that will move an uploaded file to one of your disks, which may be a location on your local filesystem or a cloud storage location like Amazon S3.

The store method accepts the path where the file should be stored relative to the filesystem's configured root directory. This path should not contain a filename, since a unique ID will automatically be generated to serve as the filename.

The store method also accepts an optional second argument for the name of the disk that should be used to store the file. The method will return the path of the file relative to the disk's root:
```
$path = $request->photo->store('images');
 
$path = $request->photo->store('images', 's3');
```
If you do not want a filename to be automatically generated, you may use the storeAs method, which accepts the path, filename, and disk name as its arguments:
```
$path = $request->photo->storeAs('images', 'filename.jpg');
 
$path = $request->photo->storeAs('images', 'filename.jpg', 's3');
```
 Or
```
 if($file->move('images',$file->getClientOriginalName())){
                    echo "done";
                }else{
                    echo "Not done";
                }
```

First parameter is image uploaded path and second parameter is image name .

##### Configuring Trusted Proxies
When running your applications behind a load balancer that terminates TLS / SSL certificates, you may notice your application sometimes does not generate HTTPS links when using the url helper. Typically this is because your application is being forwarded traffic from your load balancer on port 80 and does not know it should generate secure links.

To solve this, you may use the App\Http\Middleware\TrustProxies middleware that is included in your Laravel application, which allows you to quickly customize the load balancers or proxies that should be trusted by your application. Your trusted proxies should be listed as an array on the $proxies property of this middleware. In addition to configuring the trusted proxies, you may configure the proxy $headers that should be trusted:
```
<?php
 
namespace App\Http\Middleware;
 
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;
 
class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var string|array
     */
    protected $proxies = [
        '192.168.1.1',
        '192.168.1.2',
    ];
 
    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO;
}

```
##### Trusting All Proxies
If you are using Amazon AWS or another "cloud" load balancer provider, you may not know the IP addresses of your actual balancers. In this case, you may use * to trust all proxies:
```
/**
 * The trusted proxies for this application.
 *
 * @var string|array
 */
protected $proxies = '*';
```


### Configuring Trusted Hosts
By default, Laravel will respond to all requests it receives regardless of the content of the HTTP request's Host header. In addition, the Host header's value will be used when generating absolute URLs to your application during a web request.

Typically, you should configure your web server, such as Nginx or Apache, to only send requests to your application that match a given host name. However, if you do not have the ability to customize your web server directly and need to instruct Laravel to only respond to certain host names, you may do so by enabling the App\Http\Middleware\TrustHosts middleware for your application.

The TrustHosts middleware is already included in the $middleware stack of your application; however, you should uncomment it so that it becomes active. Within this middleware's hosts method, you may specify the host names that your application should respond to. Incoming requests with other Host value headers will be rejected:
```
/**
 * Get the host patterns that should be trusted.
 *
 * @return array
 */
public function hosts()
{
    return [
        'laravel.test',
        $this->allSubdomainsOfApplicationUrl(),
    ];
}
```
The allSubdomainsOfApplicationUrl helper method will return a regular expression matching all subdomains of your application's app.url configuration value. This helper method provides a convenient way to allow all of your application's subdomains when building an application that utilizes wildcard subdomains.

## HTTP Responses
### Creating Responses
Strings & Arrays
All routes and controllers should return a response to be sent back to the user's browser. Laravel provides several different ways to return responses. The most basic response is returning a string from a route or controller. The framework will automatically convert the string into a full HTTP response:
```
Route::get('/', function () {
    return 'Hello World';
});
```
In addition to returning strings from your routes and controllers, you may also return arrays. The framework will automatically convert the array into a JSON response:
```
Route::get('/', function () {
    return [1, 2, 3];
});
```

Did you know you can also return Eloquent collections from your routes or controllers? They will automatically be converted to JSON. Give it a shot!

#### Response Objects
Typically, you won't just be returning simple strings or arrays from your route actions. Instead, you will be returning full Illuminate\Http\Response instances or views.

Returning a full Response instance allows you to customize the response's HTTP status code and headers. A Response instance inherits from the Symfony\Component\HttpFoundation\Response class, which provides a variety of methods for building HTTP responses:
```
Route::get('/home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});
```

#### Eloquent Models & Collections
You may also return Eloquent ORM models and collections directly from your routes and controllers. When you do, Laravel will automatically convert the models and collections to JSON responses while respecting the model's hidden attributes:

use App\Models\User;
``` 
Route::get('/user/{user}', function (User $user) {
    return $user;
});
```

#### Attaching Headers To Responses
Keep in mind that most response methods are chainable, allowing for the fluent construction of response instances. For example, you may use the header method to add a series of headers to the response before sending it back to the user:
```
return response($content)
            ->header('Content-Type', $type)
            ->header('X-Header-One', 'Header Value')
            ->header('X-Header-Two', 'Header Value');
```

Or, you may use the withHeaders method to specify an array of headers to be added to the response:
```
return response($content)
            ->withHeaders([
                'Content-Type' => $type,
                'X-Header-One' => 'Header Value',
                'X-Header-Two' => 'Header Value',
            ]);
```
#### Cache Control Middleware
Laravel includes a cache.headers middleware, which may be used to quickly set the Cache-Control header for a group of routes. Directives should be provided using the "snake case" equivalent of the corresponding cache-control directive and should be separated by a semicolon. If etag is specified in the list of directives, an MD5 hash of the response content will automatically be set as the ETag identifier:
```
Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    Route::get('/privacy', function () {
        // ...
    });
 
    Route::get('/terms', function () {
        // ...
    });
});
```

#### Attaching Cookies To Responses
You may attach a cookie to an outgoing Illuminate\Http\Response instance using the cookie method. You should pass the name, value, and the number of minutes the cookie should be considered valid to this method:
```
return response('Hello World')->cookie(
    'name', 'value', $minutes
);
```
The cookie method also accepts a few more arguments which are used less frequently. Generally, these arguments have the same purpose and meaning as the arguments that would be given to PHP's native setcookie method:
```
return response('Hello World')->cookie(
    'name', 'value', $minutes, $path, $domain, $secure, $httpOnly
);
```
If you would like to ensure that a cookie is sent with the outgoing response but you do not yet have an instance of that response, you can use the Cookie facade to "queue" cookies for attachment to the response when it is sent. The queue method accepts the arguments needed to create a cookie instance. These cookies will be attached to the outgoing response before it is sent to the browser:
```
use Illuminate\Support\Facades\Cookie;
 
Cookie::queue('name', 'value', $minutes);
```

#### Generating Cookie Instances
If you would like to generate a Symfony\Component\HttpFoundation\Cookie instance that can be attached to a response instance at a later time, you may use the global cookie helper. This cookie will not be sent back to the client unless it is attached to a response instance:
```
$cookie = cookie('name', 'value', $minutes);
 
return response('Hello World')->cookie($cookie);
```
#### Expiring Cookies Early
You may remove a cookie by expiring it via the withoutCookie method of an outgoing response:
```
return response('Hello World')->withoutCookie('name');
```
If you do not yet have an instance of the outgoing response, you may use the Cookie facade's expire method to expire a cookie:
```
Cookie::expire('name');
```

#### Cookies & Encryption
By default, all cookies generated by Laravel are encrypted and signed so that they can't be modified or read by the client. If you would like to disable encryption for a subset of cookies generated by your application, you may use the $except property of the App\Http\Middleware\EncryptCookies middleware, which is located in the app/Http/Middleware directory:
```
/**
 * The names of the cookies that should not be encrypted.
 *
 * @var array
 */
protected $except = [
    'cookie_name',
];

```

### Redirects
Redirect responses are instances of the Illuminate\Http\RedirectResponse class, and contain the proper headers needed to redirect the user to another URL. There are several ways to generate a RedirectResponse instance. The simplest method is to use the global redirect helper:
```
Route::get('/dashboard', function () {
    return redirect('home/dashboard');
});
```

Sometimes you may wish to redirect the user to their previous location, such as when a submitted form is invalid. You may do so by using the global back helper function. Since this feature utilizes the session, make sure the route calling the back function is using the web middleware group:
```
Route::post('/user/profile', function () {
    // Validate the request...
 
    return back()->withInput();
});
```

#### Redirecting To Named Routes
When you call the redirect helper with no parameters, an instance of Illuminate\Routing\Redirector is returned, allowing you to call any method on the Redirector instance. For example, to generate a RedirectResponse to a named route, you may use the route method:
```
return redirect()->route('login');
```
If your route has parameters, you may pass them as the second argument to the route method:
```
// For a route with the following URI: /profile/{id}
 
return redirect()->route('profile', ['id' => 1]);
```

#### Populating Parameters Via Eloquent Models
If you are redirecting to a route with an "ID" parameter that is being populated from an Eloquent model, you may pass the model itself. The ID will be extracted automatically:
```
// For a route with the following URI: /profile/{id}
 
return redirect()->route('profile', [$user]);
```

If you would like to customize the value that is placed in the route parameter, you can specify the column in the route parameter definition (/profile/{id:slug}) or you can override the getRouteKey method on your Eloquent model:
```
/**
 * Get the value of the model's route key.
 *
 * @return mixed
 */
public function getRouteKey()
{
    return $this->slug;
}
```
##### Redirecting To Controller Actions
You may also generate redirects to controller actions. To do so, pass the controller and action name to the action method:
```
use App\Http\Controllers\UserController;
 
return redirect()->action([UserController::class, 'index']);
```
If your controller route requires parameters, you may pass them as the second argument to the action method:
```
return redirect()->action(
    [UserController::class, 'profile'], ['id' => 1]
);
```

##### Redirecting To External Domains
Sometimes you may need to redirect to a domain outside of your application. You may do so by calling the away method, which creates a RedirectResponse without any additional URL encoding, validation, or verification:
```
return redirect()->away('https://www.google.com');
```

#### Redirecting With Flashed Session Data
Redirecting to a new URL and flashing data to the session are usually done at the same time. Typically, this is done after successfully performing an action when you flash a success message to the session. For convenience, you may create a RedirectResponse instance and flash data to the session in a single, fluent method chain:
```
Route::post('/user/profile', function () {
    // ...
 
    return redirect('dashboard')->with('status', 'Profile updated!');
});
```
After the user is redirected, you may display the flashed message from the session. For example, using Blade syntax:
```
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

```

##### Redirecting With Input
You may use the withInput method provided by the RedirectResponse instance to flash the current request's input data to the session before redirecting the user to a new location. This is typically done if the user has encountered a validation error. Once the input has been flashed to the session, you may easily retrieve it during the next request to repopulate the form:
``
return back()->withInput();
``

##### Other Response Types
The response helper may be used to generate other types of response instances. When the response helper is called without arguments, an implementation of the Illuminate\Contracts\Routing\ResponseFactory contract is returned. This contract provides several helpful methods for generating responses.

##### View Responses
If you need control over the response's status and headers but also need to return a view as the response's content, you should use the view method:
```
return response()
            ->view('hello', $data, 200)
            ->header('Content-Type', $type);

 ```
Of course, if you do not need to pass a custom HTTP status code or custom headers, you may use the global view helper function.

##### JSON Responses
The json method will automatically set the Content-Type header to application/json, as well as convert the given array to JSON using the json_encode PHP function:
```
return response()->json([
    'name' => 'Abigail',
    'state' => 'CA',
]);
```
If you would like to create a JSONP response, you may use the json method in combination with the withCallback method:
```
return response()
            ->json(['name' => 'Abigail', 'state' => 'CA'])
            ->withCallback($request->input('callback'));
```
####  File Downloads
The download method may be used to generate a response that forces the user's browser to download the file at the given path. The download method accepts a filename as the second argument to the method, which will determine the filename that is seen by the user downloading the file. Finally, you may pass an array of HTTP headers as the third argument to the method:
```
return response()->download($pathToFile);
 
return response()->download($pathToFile, $name, $headers);
```
Note :- Symfony HttpFoundation, which manages file downloads, requires the file being downloaded to have an ASCII filename.

### Views
#### Introduction
Of course, it's not practical to return entire HTML documents strings directly from your routes and controllers. Thankfully, views provide a convenient way to place all of our HTML in separate files. Views separate your controller / application logic from your presentation logic and are stored in the resources/views directory. A simple view might look something like this:
```
<!-- View stored in resources/views/greeting.blade.php -->
 
<html>
    <body>
        <h1>Hello, {{ $name }}</h1>
    </body>
</html>
```

Since this view is stored at resources/views/greeting.blade.php, we may return it using the global view helper like so:
```
Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});
```

#### Creating & Rendering Views
You may create a view by placing a file with the .blade.php extension in your application's resources/views directory. The .blade.php extension informs the framework that the file contains a Blade template. Blade templates contain HTML as well as Blade directives that allow you to easily echo values, create "if" statements, iterate over data, and more.

Once you have created a view, you may return it from one of your application's routes or controllers using the global view helper:
```
Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});
```
Views may also be returned using the View facade:
```
use Illuminate\Support\Facades\View;
 
return View::make('greeting', ['name' => 'James']);
```
As you can see, the first argument passed to the view helper corresponds to the name of the view file in the resources/views directory. The second argument is an array of data that should be made available to the view. In this case, we are passing the name variable, which is displayed in the view using Blade syntax.

#### Nested View Directories
Views may also be nested within subdirectories of the resources/views directory. "Dot" notation may be used to reference nested views. For example, if your view is stored at resources/views/admin/profile.blade.php, you may return it from one of your application's routes / controllers like so:
```
return view('admin.profile', $data);
```
Note :- View directory names should not contain the . character.

#### Creating The First Available View
Using the View facade's first method, you may create the first view that exists in a given array of views. This may be useful if your application or package allows views to be customized or overwritten:
```
use Illuminate\Support\Facades\View;
 
return View::first(['custom.admin', 'admin'], $data);
```
Determining If A View Exists
If you need to determine if a view exists, you may use the View facade. The exists method will return true if the view exists:
```
use Illuminate\Support\Facades\View;
 
if (View::exists('emails.customer')) {
    //
}
```
#### Passing Data To Views
As you saw in the previous examples, you may pass an array of data to views to make that data available to the view:
```
return view('greetings', ['name' => 'Victoria']);
```
When passing information in this manner, the data should be an array with key / value pairs. After providing data to a view, you can then access each value within your view using the data's keys, such as <?php echo $name; ?>.

As an alternative to passing a complete array of data to the view helper function, you may use the with method to add individual pieces of data to the view. The with method returns an instance of the view object so that you can continue chaining methods before returning the view:
```
return view('greeting')
            ->with('name', 'Victoria')
            ->with('occupation', 'Astronaut');

```

#### Sharing Data With All Views
Occasionally, you may need to share data with all views that are rendered by your application. You may do so using the View facade's share method. Typically, you should place calls to the share method within a service provider's boot method. You are free to add them to the App\Providers\AppServiceProvider class or generate a separate service provider to house them:
```
<?php
 
namespace App\Providers;
 
use Illuminate\Support\Facades\View;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('key', 'value');
    }
}
```
Further you can Learn service provider use on view on following link https://laravel.com/docs/9.x/views

## Blade Templates

### Introduction
Blade is the simple, yet powerful templating engine that is included with Laravel. Unlike some PHP templating engines, Blade does not restrict you from using plain PHP code in your templates. In fact, all Blade templates are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application. Blade template files use the .blade.php file extension and are typically stored in the resources/views directory.
```
Route::get('/', function () {
    return view('greeting', ['name' => 'Finn']);
});
```

### Displaying Data
You may display data that is passed to your Blade views by wrapping the variable in curly braces. For example, given the following route:
```
Route::get('/', function () {
    return view('welcome', ['name' => 'Samantha']);
});
You may display the contents of the name variable like so:

Hello, {{ $name }}.
```

Note : Blade's {{ }} echo statements are automatically sent through PHP's htmlspecialchars function to prevent XSS attacks
You are not limited to displaying the contents of the variables passed to the view. You may also echo the results of any PHP function. In fact, you can put any PHP code you wish inside of a Blade echo statement:

```
The current UNIX timestamp is {{ time() }}.
```

### HTML Entity Encoding
By default, Blade (and the Laravel e helper) will double encode HTML entities. If you would like to disable double encoding, call the Blade::withoutDoubleEncoding method from the boot method of your AppServiceProvider:
```
<?php
 
namespace App\Providers;
 
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::withoutDoubleEncoding();
    }
}
```
### Displaying Unescaped Data
By default, Blade {{ }} statements are automatically sent through PHP's htmlspecialchars function to prevent XSS attacks. If you do not want your data to be escaped, you may use the following syntax:
```
Hello, {!! $name !!}.
```
Be very careful when echoing content that is supplied by users of your application. You should typically use the escaped, double curly brace syntax to prevent XSS attacks when displaying user supplied data.
### Blade & JavaScript Frameworks
Since many JavaScript frameworks also use "curly" braces to indicate a given expression should be displayed in the browser, you may use the @ symbol to inform the Blade rendering engine an expression should remain untouched. For example:
```
<h1>Laravel</h1>
 
Hello, @{{ name }}.
```
In this example, the @ symbol will be removed by Blade; however, {{ name }} expression will remain untouched by the Blade engine, allowing it to be rendered by your JavaScript framework.

The @ symbol may also be used to escape Blade directives:
```
{{-- Blade template --}}
@@if()
 
<!-- HTML output -->
@if()
```

### If Statements
You may construct if statements using the @if, @elseif, @else, and @endif directives. These directives function identically to their PHP counterparts:
```
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif
```
For convenience, Blade also provides an @unless directive:
``
@unless (Auth::check())
    You are not signed in.
@endunless
``

In addition to the conditional directives already discussed, the @isset and @empty directives may be used as convenient shortcuts for their respective PHP functions:
```
@isset($records)
    // $records is defined and is not null...
@endisset
 
@empty($records)
    // $records is "empty"...
@endempty
```

### Authentication Directives
The @auth and @guest directives may be used to quickly determine if the current user is authenticated or is a guest:
```
@auth
    // The user is authenticated...
@endauth
 
@guest
    // The user is not authenticated...
@endguest
```

If needed, you may specify the authentication guard that should be checked when using the @auth and @guest directives:
```
@auth('admin')
    // The user is authenticated...
@endauth
 
@guest('admin')
    // The user is not authenticated...
@endguest
```

### Environment Directives
You may check if the application is running in the production environment using the @production directive:
```
@production
    // Production specific content...
@endproduction
```
Or, you may determine if the application is running in a specific environment using the @env directive:
```
@env('staging')
    // The application is running in "staging"...
@endenv
 
@env(['staging', 'production'])
    // The application is running in "staging" or "production"...
@endenv
```

### Section Directives
You may determine if a template inheritance section has content using the @hasSection directive:
```
@hasSection('navigation')
    <div class="pull-right">
        @yield('navigation')
    </div>
 
    <div class="clearfix"></div>
@endif
```
You may use the sectionMissing directive to determine if a section does not have content:
```
@sectionMissing('navigation')
    <div class="pull-right">
        @include('default-navigation')
    </div>
@endif
```

### Switch Statements
Switch statements can be constructed using the @switch, @case, @break, @default and @endswitch directives:
```
@switch($i)
    @case(1)
        First case...
        @break
 
    @case(2)
        Second case...
        @break
 
    @default
        Default case...
@endswitch

```

### Loops
In addition to conditional statements, Blade provides simple directives for working with PHP's loop structures. Again, each of these directives functions identically to their PHP counterparts:
```
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor
 
@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach
 
@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse
 
@while (true)
    <p>I'm looping forever.</p>
@endwhile
```

Note: While iterating through a foreach loop, you may use the loop variable to gain valuable information about the loop, such as whether you are in the first or last iteration through the loop

When using loops you may also end the loop or skip the current iteration using the @continue and @break directives:
```
@foreach ($users as $user)
    @if ($user->type == 1)
        @continue
    @endif
 
    <li>{{ $user->name }}</li>
 
    @if ($user->number == 5)
        @break
    @endif
@endforeach
```
You may also include the continuation or break condition within the directive declaration:
```
@foreach ($users as $user)
    @continue($user->type == 1)
 
    <li>{{ $user->name }}</li>
 
    @break($user->number == 5)
@endforeach
```
### The Loop Variable
While iterating through a foreach loop, a $loop variable will be available inside of your loop. This variable provides access to some useful bits of information such as the current loop index and whether this is the first or last iteration through the loop:
```
@foreach ($users as $user)
    @if ($loop->first)
        This is the first iteration.
    @endif
 
    @if ($loop->last)
        This is the last iteration.
    @endif
 
    <p>This is user {{ $user->id }}</p>
@endforeach
```
 
 If you are in a nested loop, you may access the parent loop's $loop variable via the parent property:
```
@foreach ($users as $user)
    @foreach ($user->posts as $post)
        @if ($loop->parent->first)
            This is the first iteration of the parent loop.
        @endif
    @endforeach
@endforeach
```
```
Property	Description
$loop->index	The index of the current loop iteration (starts at 0).
$loop->iteration	The current loop iteration (starts at 1).
$loop->remaining	The iterations remaining in the loop.
$loop->count	The total number of items in the array being iterated.
$loop->first	Whether this is the first iteration through the loop.
$loop->last	Whether this is the last iteration through the loop.
$loop->even	Whether this is an even iteration through the loop.
$loop->odd	Whether this is an odd iteration through the loop.
$loop->depth	The nesting level of the current loop.
$loop->parent	When in a nested loop, the parent's loop variable.
```

### Conditional Classes
The @class directive conditionally compiles a CSS class string. The directive accepts an array of classes where the array key contains the class or classes you wish to add, while the value is a boolean expression. If the array element has a numeric key, it will always be included in the rendered class list:
```
@php
    $isActive = false;
    $hasError = true;
@endphp
 
<span @class([
    'p-4',
    'font-bold' => $isActive,
    'text-gray-500' => ! $isActive,
    'bg-red' => $hasError,
])></span>
 
<span class="p-4 text-gray-500 bg-red"></span>
```

### Checked / Selected / Disabled
For convenience, you may use the @checked directive to easily indicate if a given HTML checkbox input is "checked". This directive will echo checked if the provided condition evaluates to true:
```
<input type="checkbox"
        name="active"
        value="active"
        @checked(old('active', $user->active)) />
Likewise, the @selected directive may be used to indicate if a given select option should be "selected":

<select name="version">
    @foreach ($product->versions as $version)
        <option value="{{ $version }}" @selected(old('version') == $version)>
            {{ $version }}
        </option>
    @endforeach
</select>
```

Additionally, the @disabled directive may be used to indicate if a given element should be "disabled":
```
<button type="submit" @disabled($errors->isNotEmpty())>Submit</button>
```

### Including Subviews
While you're free to use the @include directive, Blade components provide similar functionality and offer several benefits over the @include directive such as data and attribute binding.

Blade's @include directive allows you to include a Blade view from within another view. All variables that are available to the parent view will be made available to the included view:
```
<div>
    @include('shared.errors')
 
    <form>
        <!-- Form Contents -->
    </form>
</div>
```

Even though the included view will inherit all data available in the parent view, you may also pass an array of additional data that should be made available to the included view:
```
@include('view.name', ['status' => 'complete'])
```
If you attempt to @include a view which does not exist, Laravel will throw an error. If you would like to include a view that may or may not be present, you should use the @includeIf directive:
```
@includeIf('view.name', ['status' => 'complete'])
```

If you would like to @include a view if a given boolean expression evaluates to true or false, you may use the @includeWhen and
 ```
@includeUnless directives:

@includeWhen($boolean, 'view.name', ['status' => 'complete'])
 
@includeUnless($boolean, 'view.name', ['status' => 'complete'])
```

To include the first view that exists from a given array of views, you may use the includeFirst directive:
```
@includeFirst(['custom.admin', 'admin'], ['status' => 'complete'])
```

You should avoid using the __DIR__ and __FILE__ constants in your Blade views, since they will refer to the location of the cached, compiled view.

### Raw PHP
In some situations, it's useful to embed PHP code into your views. You can use the Blade @php directive to execute a block of plain PHP within your template:
```
@php
    $counter = 1;
@endphp
```
Comments
Blade also allows you to define comments in your views. However, unlike HTML comments, Blade comments are not included in the HTML returned by your application:

{{-- This comment will not be present in the rendered HTML --}}

## URL Generation
### Introduction
Laravel provides several helpers to assist you in generating URLs for your application. These helpers are primarily helpful when building links in your templates and API responses, or when generating redirect responses to another part of your application.


### The Basics
#### Generating URLs
The url helper may be used to generate arbitrary URLs for your application. The generated URL will automatically use the scheme (HTTP or HTTPS) and host from the current request being handled by the application:
```
$post = App\Models\Post::find(1);
 
echo url("/posts/{$post->id}");
 
// http://example.com/posts/1
```

#### Accessing The Current URL
If no path is provided to the url helper, an Illuminate\Routing\UrlGenerator instance is returned, allowing you to access information about the current URL:
```
// Get the current URL without the query string...
echo url()->current();
 
// Get the current URL including the query string...
echo url()->full();
 
// Get the full URL for the previous request...
echo url()->previous();
Each of these methods may also be accessed via the URL facade:

use Illuminate\Support\Facades\URL;
 
echo URL::current();

```

#### URLs For Named Routes
The route helper may be used to generate URLs to named routes. Named routes allow you to generate URLs without being coupled to the actual URL defined on the route. Therefore, if the route's URL changes, no changes need to be made to your calls to the route function. For example, imagine your application contains a route defined like the following:
```
Route::get('/post/{post}', function (Post $post) {
    //
})->name('post.show');
```
To generate a URL to this route, you may use the route helper like so:
```
echo route('post.show', ['post' => 1]);
 
// http://example.com/post/1
```
Of course, the route helper may also be used to generate URLs for routes with multiple parameters:
```
Route::get('/post/{post}/comment/{comment}', function (Post $post, Comment $comment) {
    //
})->name('comment.show');
 
echo route('comment.show', ['post' => 1, 'comment' => 3]);
 
// http://example.com/post/1/comment/3
```
Any additional array elements that do not correspond to the route's definition parameters will be added to the URL's query string:
```
echo route('post.show', ['post' => 1, 'search' => 'rocket']);
 
// http://example.com/post/1?search=rocket
```

#### Eloquent Models
You will often be generating URLs using the route key (typically the primary key) of Eloquent models. For this reason, you may pass Eloquent models as parameter values. The route helper will automatically extract the model's route key:
```
echo route('post.show', ['post' => $post]);
```

#### Signed URLs
Laravel allows you to easily create "signed" URLs to named routes. These URLs have a "signature" hash appended to the query string which allows Laravel to verify that the URL has not been modified since it was created. Signed URLs are especially useful for routes that are publicly accessible yet need a layer of protection against URL manipulation.

For example, you might use signed URLs to implement a public "unsubscribe" link that is emailed to your customers. To create a signed URL to a named route, use the signedRoute method of the URL facade:
```
use Illuminate\Support\Facades\URL;
 
return URL::signedRoute('unsubscribe', ['user' => 1]);
```
If you would like to generate a temporary signed route URL that expires after a specified amount of time, you may use the temporarySignedRoute method. When Laravel validates a temporary signed route URL, it will ensure that the expiration timestamp that is encoded into the signed URL has not elapsed:
```
use Illuminate\Support\Facades\URL;
 
return URL::temporarySignedRoute(
    'unsubscribe', now()->addMinutes(30), ['user' => 1]
);
```

Validating Signed Route Requests
To verify that an incoming request has a valid signature, you should call the hasValidSignature method on the incoming 
```
Illuminate\Http\Request instance:

use Illuminate\Http\Request;
 
Route::get('/unsubscribe/{user}', function (Request $request) {
    if (! $request->hasValidSignature()) {
        abort(401);
    }
 
    // ...
})->name('unsubscribe');
```

#### URLs For Controller Actions
The action function generates a URL for the given controller action:
```
use App\Http\Controllers\HomeController;
 
$url = action([HomeController::class, 'index']);
If the controller method accepts route parameters, you may pass an associative array of route parameters as the second argument to the function:

$url = action([UserController::class, 'profile'], ['id' => 1]);
```


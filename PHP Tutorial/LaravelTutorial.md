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
## HTTP Session

### Introduction
Since HTTP driven applications are stateless, sessions provide a way to store information about the user across multiple requests. That user information is typically placed in a persistent store / backend that can be accessed from subsequent requests.

### Configuration

Your application's session configuration file is stored at config/session.php. Be sure to review the options available to you in this file. By default, Laravel is configured to use the file session driver, which will work well for many applications. If your application will be load balanced across multiple web servers, you should choose a centralized store that all servers can access, such as Redis or a database.

The session driver configuration option defines where session data will be stored for each request. Laravel ships with several great drivers out of the box:

file - sessions are stored in storage/framework/sessions.
cookie - sessions are stored in secure, encrypted cookies.
database - sessions are stored in a relational database.
memcached / redis - sessions are stored in one of these fast, cache based stores.
dynamodb - sessions are stored in AWS DynamoDB.
array - sessions are stored in a PHP array and will not be persisted.

NOte :- 
The array driver is primarily used during testing and prevents the data stored in the session from being persisted.

#### Driver Prerequisites
Database
When using the database session driver, you will need to create a table to contain the session records. An example Schema declaration for the table may be found below:
```
Schema::create('sessions', function ($table) {
    $table->string('id')->primary();
    $table->foreignId('user_id')->nullable()->index();
    $table->string('ip_address', 45)->nullable();
    $table->text('user_agent')->nullable();
    $table->text('payload');
    $table->integer('last_activity')->index();
});

```
You may use the session:table Artisan command to generate this migration. To learn more about database migrations, you may consult the complete migration documentation:
```
php artisan session:table
php artisan migrate
```

#### Redis
Before using Redis sessions with Laravel, you will need to either install the PhpRedis PHP extension via PECL or install the predis/predis package (~1.0) via Composer. For more information on configuring Redis

### Interacting With The Session

When you retrieve an item from the session, you may also pass a default value as the second argument to the get method. This default value will be returned if the specified key does not exist in the session. If you pass a closure as the default value to the get method and the requested key does not exist, the closure will be executed and its result returned:
```
$value = $request->session()->get('key', 'default');
 
$value = $request->session()->get('key', function () {
    return 'default';
});
```

### The Global Session Helper
You may also use the global session PHP function to retrieve and store data in the session. When the session helper is called with a single, string argument, it will return the value of that session key. When the helper is called with an array of key / value pairs, those values will be stored in the session:

```
Route::get('/home', function () {
    // Retrieve a piece of data from the session...
    $value = session('key');
 
    // Specifying a default value...
    $value = session('key', 'default');
 
    // Store a piece of data in the session...
    session(['key' => 'value']);
});
```

NOte :- There is little practical difference between using the session via an HTTP request instance versus using the global session helper. Both methods are testable via the assertSessionHas method which is available in all of your test cases.

#### Retrieving All Session Data
If you would like to retrieve all the data in the session, you may use the all method:
```
$data = $request->session()->all();
```
#### Determining If An Item Exists In The Session
To determine if an item is present in the session, you may use the has method. The has method returns true if the item is present and is not null:
```
if ($request->session()->has('users')) {
    //
}
```
To determine if an item is present in the session, even if its value is null, you may use the exists method:
``
if ($request->session()->exists('users')) {
    //
}
``
To determine if an item is not present in the session, you may use the missing method. The missing method returns true if the item is null or if the item is not present:
```
if ($request->session()->missing('users')) {
    //
}
```
#### Storing Data
To store data in the session, you will typically use the request instance's put method or the global session helper:
```
// Via a request instance...
$request->session()->put('key', 'value');
 
// Via the global "session" helper...
session(['key' => 'value']);
```
#### Pushing To Array Session Values
The push method may be used to push a new value onto a session value that is an array. For example, if the user.teams key contains an array of team names, you may push a new value onto the array like so:
```
$request->session()->push('user.teams', 'developers');
```
#### Retrieving & Deleting An Item
The pull method will retrieve and delete an item from the session in a single statement:
```
$value = $request->session()->pull('key', 'default');
```
Incrementing & Decrementing Session Values
If your session data contains an integer you wish to increment or decrement, you may use the increment and decrement methods:
```
$request->session()->increment('count');
 
$request->session()->increment('count', $incrementBy = 2);
 
$request->session()->decrement('count');
 
$request->session()->decrement('count', $decrementBy = 2);
```

#### Flash Data
Sometimes you may wish to store items in the session for the next request. You may do so using the flash method. Data stored in the session using this method will be available immediately and during the subsequent HTTP request. After the subsequent HTTP request, the flashed data will be deleted. Flash data is primarily useful for short-lived status messages:
```
$request->session()->flash('status', 'Task was successful!');
```
If you need to persist your flash data for several requests, you may use the reflash method, which will keep all of the flash data for an additional request. If you only need to keep specific flash data, you may use the keep method:
```
$request->session()->reflash();
 
$request->session()->keep(['username', 'email']);
```
To persist your flash data only for the current request, you may use the now method:
```
$request->session()->now('status', 'Task was successful!');
```

#### Deleting Data
The forget method will remove a piece of data from the session. If you would like to remove all data from the session, you may use the flush method:
```
// Forget a single key...
$request->session()->forget('name');
 
// Forget multiple keys...
$request->session()->forget(['name', 'status']);
 
$request->session()->flush();
```

#### Regenerating The Session ID
Regenerating the session ID is often done in order to prevent malicious users from exploiting a session fixation attack on your application.

Laravel automatically regenerates the session ID during authentication if you are using one of the Laravel application starter kits or Laravel Fortify; however, if you need to manually regenerate the session ID, you may use the regenerate method:
```
$request->session()->regenerate();
```
If you need to regenerate the session ID and remove all data from the session in a single statement, you may use the invalidate method:
```
$request->session()->invalidate();
```

### Session Blocking
To utilize session blocking, your application must be using a cache driver that supports atomic locks. Currently, those cache drivers include the memcached, dynamodb, redis, and database drivers. In addition, you may not use the cookie session driver.

## Validation
####  Introduction
Laravel provides several different approaches to validate your application's incoming data. It is most common to use the validate method available on all incoming HTTP requests. However, we will discuss other approaches to validation as well.

Laravel includes a wide variety of convenient validation rules that you may apply to data, even providing the ability to validate if values are unique in a given database table. We'll cover each of these validation rules in detail so that you are familiar with all of Laravel's validation features.

#### Validation Quickstart
To learn about Laravel's powerful validation features, let's look at a complete example of validating a form and displaying the error messages back to the user. By reading this high-level overview, you'll be able to gain a good general understanding of how to validate incoming request data using Laravel:


#### Defining The Routes
First, let's assume we have the following routes defined in our routes/web.php file:
```
use App\Http\Controllers\PostController;
 
Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
```
The GET route will display a form for the user to create a new blog post, while the POST route will store the new blog post in the database.

#### Creating The Controller
Next, let's take a look at a simple controller that handles incoming requests to these routes. We'll leave the store method empty for now:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class PostController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('post.create');
    }
 
    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and store the blog post...
    }
}
```
#### Writing The Validation Logic
Now we are ready to fill in our store method with the logic to validate the new blog post. To do this, we will use the validate method provided by the Illuminate\Http\Request object. If the validation rules pass, your code will keep executing normally; however, if validation fails, an Illuminate\Validation\ValidationException exception will be thrown and the proper error response will automatically be sent back to the user.

If validation fails during a traditional HTTP request, a redirect response to the previous URL will be generated. If the incoming request is an XHR request, a JSON response containing the validation error messages will be returned.

To get a better understanding of the validate method, let's jump back into the store method:
```
/**
 * Store a new blog post.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);
 
    // The blog post is valid...
}
```
As you can see, the validation rules are passed into the validate method. Don't worry - all available validation rules are documented. Again, if the validation fails, the proper response will automatically be generated. If the validation passes, our controller will continue executing normally.

Alternatively, validation rules may be specified as arrays of rules instead of a single | delimited string:
```
$validatedData = $request->validate([
    'title' => ['required', 'unique:posts', 'max:255'],
    'body' => ['required'],
]);
```
In addition, you may use the validateWithBag method to validate a request and store any error messages within a named error bag:
```
$validatedData = $request->validateWithBag('post', [
    'title' => ['required', 'unique:posts', 'max:255'],
    'body' => ['required'],
]);
```
#### Stopping On First Validation Failure
Sometimes you may wish to stop running validation rules on an attribute after the first validation failure. To do so, assign the bail rule to the attribute:
```
$request->validate([
    'title' => 'bail|required|unique:posts|max:255',
    'body' => 'required',
]);
```
In this example, if the unique rule on the title attribute fails, the max rule will not be checked. Rules will be validated in the order they are assigned.

##### A Note On Nested Attributes
If the incoming HTTP request contains "nested" field data, you may specify these fields in your validation rules using "dot" syntax:
```
$request->validate([
    'title' => 'required|unique:posts|max:255',
    'author.name' => 'required',
    'author.description' => 'required',
]);
```
On the other hand, if your field name contains a literal period, you can explicitly prevent this from being interpreted as "dot" syntax by escaping the period with a backslash:
```
$request->validate([
    'title' => 'required|unique:posts|max:255',
    'v1\.0' => 'required',
]);
```

#### Displaying The Validation Errors
So, what if the incoming request fields do not pass the given validation rules? As mentioned previously, Laravel will automatically redirect the user back to their previous location. In addition, all of the validation errors and request input will automatically be flashed to the session.

An $errors variable is shared with all of your application's views by the Illuminate\View\Middleware\ShareErrorsFromSession middleware, which is provided by the web middleware group. When this middleware is applied an $errors variable will always be available in your views, allowing you to conveniently assume the $errors variable is always defined and can be safely used. The $errors variable will be an instance of Illuminate\Support\MessageBag. For more information on working with this object, check out its documentation.

So, in our example, the user will be redirected to our controller's create method when validation fails, allowing us to display the error messages in the view:
```
<!-- /resources/views/post/create.blade.php -->
 
<h1>Create Post</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
```

#### The @error Directive
You may use the @error Blade directive to quickly determine if validation error messages exist for a given attribute. Within an @error directive, you may echo the $message variable to display the error message:

```
<!-- /resources/views/post/create.blade.php -->
 
<label for="title">Post Title</label>
 
<input id="title"
    type="text"
    name="title"
    class="@error('title') is-invalid @enderror">
 
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
```
OR
```
@error('name'){{$message}}@enderror
```


#### Repopulating Forms
When Laravel generates a redirect response due to a validation error, the framework will automatically flash all of the request's input to the session. This is done so that you may conveniently access the input during the next request and repopulate the form that the user attempted to submit.

To retrieve flashed input from the previous request, invoke the old method on an instance of Illuminate\Http\Request. The old method will pull the previously flashed input data from the session:

$title = $request->old('title');
Laravel also provides a global old helper. If you are displaying old input within a Blade template, it is more convenient to use the old helper to repopulate the form. If no old input exists for the given field, null will be returned:
```
<input type="text" name="title" value="{{ old('title') }}">
 <input name="teams" id="teams" type="checkbox"  {{ old('teams') =='on' ? ' checked' : '' }}>

```
#### A Note On Optional Fields
By default, Laravel includes the TrimStrings and ConvertEmptyStringsToNull middleware in your application's global middleware stack. These middleware are listed in the stack by the App\Http\Kernel class. Because of this, you will often need to mark your "optional" request fields as nullable if you do not want the validator to consider null values as invalid. For example:
```
$request->validate([
    'title' => 'required|unique:posts|max:255',
    'body' => 'required',
    'publish_at' => 'nullable|date',
]);
```
In this example, we are specifying that the publish_at field may be either null or a valid date representation. If the nullable modifier is not added to the rule definition, the validator would consider null an invalid date.

### Customizing The Error Messages
You may customize the error messages used by the form request by overriding the messages method. This method should return an array of attribute / rule pairs and their corresponding error messages:
```
$request->validate([
    'title' => 'required|unique:posts|max:255',
    'body' => 'required',
    'publish_at' => 'nullable|date',
],[
     'title.max'=>"title should be less than 255 length .",
     'body.required'=>"Body is required ."]);
```


####   Available Validation Rules

##### accepted
The field under validation must be "yes", "on", 1, or true. This is useful for validating "Terms of Service" acceptance or similar fields.

##### accepted_if:anotherfield,value,...
The field under validation must be "yes", "on", 1, or true if another field under validation is equal to a specified value. This is useful for validating "Terms of Service" acceptance or similar fields.

##### after:date
The field under validation must be a value after a given date. The dates will be passed into the strtotime PHP function in order to be converted to a valid DateTime instance:
```
'start_date' => 'required|date|after:tomorrow'
```
Instead of passing a date string to be evaluated by strtotime, you may specify another field to compare against the date:
```
'finish_date' => 'required|date|after:start_date'
```

##### alpha
The field under validation must be entirely alphabetic characters.

##### alpha_dash
The field under validation may have alpha-numeric characters, as well as dashes and underscores.

##### alpha_num
The field under validation must be entirely alpha-numeric characters.

##### array
The field under validation must be a PHP array.

#### bail
Stop running validation rules for the field after the first validation failure.

#### before:date
The field under validation must be a value preceding the given date. The dates will be passed into the PHP strtotime function in order to be converted into a valid DateTime instance. In addition, like the after rule, the name of another field under validation may be supplied as the value of date.


##### email
The field under validation must be formatted as an email address. This validation rule utilizes the egulias/email-validator package for validating the email address. By default, the RFCValidation validator is applied, but you can apply other validation styles as well:
```
'email' => 'email:rfc,dns'
```
The example above will apply the RFCValidation and DNSCheckValidation validations. Here's a full list of validation styles you can apply:

rfc: RFCValidation
strict: NoRFCWarningsValidation
dns: DNSCheckValidation
spoof: SpoofCheckValidation
filter: FilterEmailValidation


##### ip
The field under validation must be an IP address.

##### ipv4
The field under validation must be an IPv4 address.

##### ipv6
The field under validation must be an IPv6 address.

##### Skipping Validation When Fields Have Certain Values
You may occasionally wish to not validate a given field if another field has a given value. You may accomplish this using the exclude_if validation rule. In this example, the appointment_date and doctor_name fields will not be validated if the has_appointment field has a value of false:
```
use Illuminate\Support\Facades\Validator;
 
$validator = Validator::make($data, [
    'has_appointment' => 'required|boolean',
    'appointment_date' => 'exclude_if:has_appointment,false|required|date',
    'doctor_name' => 'exclude_if:has_appointment,false|required|string',
]);
```
Alternatively, you may use the exclude_unless rule to not validate a given field unless another field has a given value:
```
$validator = Validator::make($data, [
    'has_appointment' => 'required|boolean',
    'appointment_date' => 'exclude_unless:has_appointment,true|required|date',
    'doctor_name' => 'exclude_unless:has_appointment,true|required|string',
]);
```

##### Validating Passwords
To ensure that passwords have an adequate level of complexity, you may use Laravel's Password rule object:
```
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
 
$validator = Validator::make($request->all(), [
    'password' => ['required', 'confirmed', Password::min(8)],
]);
```
The Password rule object allows you to easily customize the password complexity requirements for your application, such as specifying that passwords require at least one letter, number, symbol, or characters with mixed casing:
```
// Require at least 8 characters...
Password::min(8)
 
// Require at least one letter...
Password::min(8)->letters()
 
// Require at least one uppercase and one lowercase letter...
Password::min(8)->mixedCase()
 
// Require at least one number...
Password::min(8)->numbers()
 
// Require at least one symbol...
Password::min(8)->symbols()
```

Of course, you may chain all the methods in the examples above:
```
Password::min(8)
    ->letters()
    ->mixedCase()
    ->numbers()
    ->symbols()
    ->uncompromised()
```    

### Error Handling

#### Introduction
When you start a new Laravel project, error and exception handling is already configured for you. The App\Exceptions\Handler class is where all exceptions thrown by your application are logged and then rendered to the user. We'll dive deeper into this class throughout this documentation.

#### Configuration
The debug option in your config/app.php configuration file determines how much information about an error is actually displayed to the user. By default, this option is set to respect the value of the APP_DEBUG environment variable, which is stored in your .env file.

During local development, you should set the APP_DEBUG environment variable to true. In your production environment, this value should always be false. If the value is set to true in production, you risk exposing sensitive configuration values to your application's end users.
### Logging

#### Introduction
To help you learn more about what's happening within your application, Laravel provides robust logging services that allow you to log messages to files, the system error log, and even to Slack to notify your entire team.

Laravel logging is based on "channels". Each channel represents a specific way of writing log information. For example, the single channel writes log files to a single log file, while the slack channel sends log messages to Slack. Log messages may be written to multiple channels based on their severity.

Under the hood, Laravel utilizes the Monolog library, which provides support for a variety of powerful log handlers. Laravel makes it a cinch to configure these handlers, allowing you to mix and match them to customize your application's log handling.

#### Configuration
All of the configuration options for your application's logging behavior is housed in the config/logging.php configuration file. This file allows you to configure your application's log channels, so be sure to review each of the available channels and their options. We'll review a few common options below.

By default, Laravel will use the stack channel when logging messages. The stack channel is used to aggregate multiple log channels into a single channel.

#### Writing Log Messages
You may write information to the logs using the Log facade. As previously mentioned, the logger provides the eight logging levels defined in the RFC 5424 specification: emergency, alert, critical, error, warning, notice, info and debug:
```
use Illuminate\Support\Facades\Log;
 
Log::emergency($message);
Log::alert($message);
Log::critical($message);
Log::error($message);
Log::warning($message);
Log::notice($message);
Log::info($message);
Log::debug($message);
```

this  log will be avilable on log/laravel.log file .

## Drigging Deeper

### Artisan Console

### Introduction
Artisan is the command line interface included with Laravel. Artisan exists at the root of your application as the artisan script and provides a number of helpful commands that can assist you while you build your application. To view a list of all available Artisan commands, you may use the list command:
```
php artisan list
```

Every command also includes a "help" screen which displays and describes the command's available arguments and options. To view a help screen, precede the name of the command with help:
```
php artisan help migrate
```

### Tinker (REPL)
Laravel Tinker is a powerful REPL for the Laravel framework, powered by the PsySH package.

##### Installation
All Laravel applications include Tinker by default. However, you may install Tinker using Composer if you have previously removed it from your application:
```
composer require laravel/tinker
```
#### Usage
Tinker allows you to interact with your entire Laravel application on the command line, including your Eloquent models, jobs, events, and more. To enter the Tinker environment, run the tinker Artisan command:
```
php artisan tinker
```

You can publish Tinker's configuration file using the vendor:publish command:
```
php artisan vendor:publish --provider="Laravel\Tinker\TinkerServiceProvider"
```

The dispatch helper function and dispatch method on the Dispatchable class depends on garbage collection to place the job on the queue. Therefore, when using tinker, you should use Bus::dispatch or Queue::push to dispatch jobs.

#### Command Allow List
Tinker utilizes an "allow" list to determine which Artisan commands are allowed to be run within its shell. By default, you may run the clear-compiled, down, env, inspire, migrate, optimize, and up commands. If you would like to allow more commands you may add them to the commands array in your tinker.php configuration file:
```
'commands' => [
    // App\Console\Commands\ExampleCommand::class,
],
```

#### Classes That Should Not Be Aliased
Typically, Tinker automatically aliases classes as you interact with them in Tinker. However, you may wish to never alias some classes. You may accomplish this by listing the classes in the dont_alias array of your tinker.php configuration file:
```
'dont_alias' => [
    App\Models\User::class,
],
```

#### Writing Commands
In addition to the commands provided with Artisan, you may build your own custom commands. Commands are typically stored in the app/Console/Commands directory; however, you are free to choose your own storage location as long as your commands can be loaded by Composer.

#### Generating Commands
To create a new command, you may use the make:command Artisan command. This command will create a new command class in the app/Console/Commands directory. Don't worry if this directory does not exist in your application - it will be created the first time you run the make:command Artisan command:
```
php artisan make:command SendEmails
```

#### Command Structure
After generating your command, you should define appropriate values for the signature and description properties of the class. These properties will be used when displaying your command on the list screen. The signature property also allows you to define your command's input expectations. The handle method will be called when your command is executed. You may place your command logic in this method.


## Events

### Introduction
Laravel's events provide a simple observer pattern implementation, allowing you to subscribe and listen for various events that occur within your application. Event classes are typically stored in the app/Events directory, while their listeners are stored in app/Listeners. Don't worry if you don't see these directories in your application as they will be created for you as you generate events and listeners using Artisan console commands.

Events serve as a great way to decouple various aspects of your application, since a single event can have multiple listeners that do not depend on each other. For example, you may wish to send a Slack notification to your user each time an order has shipped. Instead of coupling your order processing code to your Slack notification code, you can raise an App\Events\OrderShipped event which a listener can receive and use to dispatch a Slack notification.

### Registering Events & Listeners
The App\Providers\EventServiceProvider included with your Laravel application provides a convenient place to register all of your application's event listeners. The listen property contains an array of all events (keys) and their listeners (values). You may add as many events to this array as your application requires. For example, let's add an OrderShipped event:
```
use App\Events\OrderShipped;
use App\Listeners\SendShipmentNotification;
 
/**
 * The event listener mappings for the application.
 *
 * @var array
 */
protected $listen = [
    OrderShipped::class => [
        SendShipmentNotification::class,
    ],
];
```

### Generating Events & Listeners
Of course, manually creating the files for each event and listener is cumbersome. Instead, add listeners and events to your EventServiceProvider and use the event:generate Artisan command. This command will generate any events or listeners that are listed in your EventServiceProvider that do not already exist:
```
php artisan event:generate
```
Alternatively, you may use the make:event and make:listener Artisan commands to generate individual events and listeners:
```
php artisan make:event PodcastProcessed
 
php artisan make:listener SendPodcastNotification --event=PodcastProcessed
```

### Manually Registering Events
Typically, events should be registered via the EventServiceProvider $listen array; however, you may also register class or closure based event listeners manually in the boot method of your EventServiceProvider:
```
use App\Events\PodcastProcessed;
use App\Listeners\SendPodcastNotification;
use Illuminate\Support\Facades\Event;
 
/**
 * Register any other events for your application.
 *
 * @return void
 */
public function boot()
{
    Event::listen(
        PodcastProcessed::class,
        [SendPodcastNotification::class, 'handle']
    );
 
    Event::listen(function (PodcastProcessed $event) {
        //
    });
}
```

### Queueable Anonymous Event Listeners
When registering closure based event listeners manually, you may wrap the listener closure within the Illuminate\Events\queueable function to instruct Laravel to execute the listener using the queue:
```
use App\Events\PodcastProcessed;
use function Illuminate\Events\queueable;
use Illuminate\Support\Facades\Event;
 
/**
 * Register any other events for your application.
 *
 * @return void
 */
public function boot()
{
    Event::listen(queueable(function (PodcastProcessed $event) {
        //
    }));
}
```

Like queued jobs, you may use the onConnection, onQueue, and delay methods to customize the execution of the queued listener:
```
Event::listen(queueable(function (PodcastProcessed $event) {
    //
})
```


If you would like to handle anonymous queued listener failures, you may provide a closure to the catch method while defining the queueable listener. This closure will receive the event instance and the Throwable instance that caused the listener's failure:
```
use App\Events\PodcastProcessed;
use function Illuminate\Events\queueable;
use Illuminate\Support\Facades\Event;
use Throwable;
 
Event::listen(queueable(function (PodcastProcessed $event) {
    //
})->catch(function (PodcastProcessed $event, Throwable $e) {
    // The queued listener failed...
}));

```

#### Wildcard Event Listeners
You may even register listeners using the * as a wildcard parameter, allowing you to catch multiple events on the same listener. Wildcard listeners receive the event name as their first argument and the entire event data array as their second argument:
```
Event::listen('event.*', function ($eventName, array $data) {
    //
});
```
#### Event Discovery
Instead of registering events and listeners manually in the $listen array of the EventServiceProvider, you can enable automatic event discovery. When event discovery is enabled, Laravel will automatically find and register your events and listeners by scanning your application's Listeners directory. In addition, any explicitly defined events listed in the EventServiceProvider will still be registered.

Laravel finds event listeners by scanning the listener classes using PHP's reflection services. When Laravel finds any listener class method that begins with handle or __invoke, Laravel will register those methods as event listeners for the event that is type-hinted in the method's signature:
```
use App\Events\PodcastProcessed;
 
class SendPodcastNotification
{
    /**
     * Handle the given event.
     *
     * @param  \App\Events\PodcastProcessed  $event
     * @return void
     */
    public function handle(PodcastProcessed $event)
    {
        //
    }
}
```

Event discovery is disabled by default, but you can enable it by overriding the shouldDiscoverEvents method of your application's EventServiceProvider:
```
/**
 * Determine if events and listeners should be automatically discovered.
 *
 * @return bool
 */
public function shouldDiscoverEvents()
{
    return true;
}
```
By default, all listeners within your application's app/Listeners directory will be scanned. If you would like to define additional directories to scan, you may override the discoverEventsWithin method in your EventServiceProvider:
```
/**
 * Get the listener directories that should be used to discover events.
 *
 * @return array
 */
protected function discoverEventsWithin()
{
    return [
        $this->app->path('Listeners'),
    ];
}
```

### Event Discovery In Production
In production, it is not efficient for the framework to scan all of your listeners on every request. Therefore, during your deployment process, you should run the event:cache Artisan command to cache a manifest of all of your application's events and listeners. This manifest will be used by the framework to speed up the event registration process. The event:clear command may be used to destroy the cache.

### Defining Events
An event class is essentially a data container which holds the information related to the event. For example, let's assume an App\Events\OrderShipped event receives an Eloquent ORM object:
```
<?php
 
namespace App\Events;
 
use App\Models\Order;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
 
class OrderShipped
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
 
    /**
     * The order instance.
     *
     * @var \App\Models\Order
     */
    public $order;
 
    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}
```

#### Defining Listeners
Next, let's take a look at the listener for our example event. Event listeners receive event instances in their handle method. The event:generate and make:listener Artisan commands will automatically import the proper event class and type-hint the event on the handle method. Within the handle method, you may perform any actions necessary to respond to the event:
```
<?php
 
namespace App\Listeners;
 
use App\Events\OrderShipped;
 
class SendShipmentNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
 
    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        // Access the order using $event->order...
    }
}
```
Your event listeners may also type-hint any dependencies they need on their constructors. All event listeners are resolved via the Laravel service container, so dependencies will be injected automatically.

#### Stopping The Propagation Of An Event
Sometimes, you may wish to stop the propagation of an event to other listeners. You may do so by returning false from your listener's handle method.

#### Queued Event Listeners
Queueing listeners can be beneficial if your listener is going to perform a slow task such as sending an email or making an HTTP request. Before using queued listeners, make sure to configure your queue and start a queue worker on your server or local development environment.

To specify that a listener should be queued, add the ShouldQueue interface to the listener class. Listeners generated by the event:generate and make:listener Artisan commands already have this interface imported into the current namespace so you can use it immediately:
```
<?php
 
namespace App\Listeners;
 
use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class SendShipmentNotification implements ShouldQueue
{
    //
}
```
That's it! Now, when an event handled by this listener is dispatched, the listener will automatically be queued by the event dispatcher using Laravel's queue system. If no exceptions are thrown when the listener is executed by the queue, the queued job will automatically be deleted after it has finished processing.

#### Customizing The Queue Connection & Queue Name
If you would like to customize the queue connection, queue name, or queue delay time of an event listener, you may define the $connection, $queue, or $delay properties on your listener class:
```
<?php
 
namespace App\Listeners;
 
use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class SendShipmentNotification implements ShouldQueue
{
    /**
     * The name of the connection the job should be sent to.
     *
     * @var string|null
     */
    public $connection = 'sqs';
 
    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public $queue = 'listeners';
 
    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public $delay = 60;
}
```

If you would like to define the listener's queue connection or queue name at runtime, you may define viaConnection or viaQueue methods on the listener:
```
/**
 * Get the name of the listener's queue connection.
 *
 * @return string
 */
public function viaConnection()
{
    return 'sqs';
}
 
/**
 * Get the name of the listener's queue.
 *
 * @return string
 */
public function viaQueue()
{
    return 'listeners';
}

```

#### Queued Event Listeners & Database Transactions
When queued listeners are dispatched within database transactions, they may be processed by the queue before the database transaction has committed. When this happens, any updates you have made to models or database records during the database transaction may not yet be reflected in the database. In addition, any models or database records created within the transaction may not exist in the database. If your listener depends on these models, unexpected errors can occur when the job that dispatches the queued listener is processed.

If your queue connection's after_commit configuration option is set to false, you may still indicate that a particular queued listener should be dispatched after all open database transactions have been committed by defining an $afterCommit property on the listener class:
```
<?php
 
namespace App\Listeners;
 
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
 
class SendShipmentNotification implements ShouldQueue
{
    use InteractsWithQueue;
 
    public $afterCommit = true;
}
```

#### Dispatching Events
To dispatch an event, you may call the static dispatch method on the event. This method is made available on the event by the Illuminate\Foundation\Events\Dispatchable trait. Any arguments passed to the dispatch method will be passed to the event's constructor:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Events\OrderShipped;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
 
class OrderShipmentController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
 
        // Order shipment logic...
 
        OrderShipped::dispatch($order);
    }
}
```


## Broadcasting
In many modern web applications, WebSockets are used to implement realtime, live-updating user interfaces. When some data is updated on the server, a message is typically sent over a WebSocket connection to be handled by the client. WebSockets provide a more efficient alternative to continually polling your application's server for data changes that should be reflected in your UI.

The core concepts behind broadcasting are simple: clients connect to named channels on the frontend, while your Laravel application broadcasts events to these channels on the backend. These events can contain any additional data you wish to make available to the frontend.

#### Supported Drivers
By default, Laravel includes two server-side broadcasting drivers for you to choose from: Pusher Channels and Ably. However, community driven packages such as laravel-websockets and soketi provide additional broadcasting drivers that do not require commercial broadcasting providers.

### Server Side Installation
To get started using Laravel's event broadcasting, we need to do some configuration within the Laravel application as well as install a few packages.

Event broadcasting is accomplished by a server-side broadcasting driver that broadcasts your Laravel events so that Laravel Echo (a JavaScript library) can receive them within the browser client. Don't worry - we'll walk through each part of the installation process step-by-step.

#### Configuration
All of your application's event broadcasting configuration is stored in the config/broadcasting.php configuration file. Laravel supports several broadcast drivers out of the box: Pusher Channels, Redis, and a log driver for local development and debugging. Additionally, a null driver is included which allows you to totally disable broadcasting during testing. A configuration example is included for each of these drivers in the config/broadcasting.php configuration file.

#### Broadcast Service Provider
Before broadcasting any events, you will first need to register the App\Providers\BroadcastServiceProvider. In new Laravel applications, you only need to uncomment this provider in the providers array of your config/app.php configuration file. This BroadcastServiceProvider contains the code necessary to register the broadcast authorization routes and callbacks.

#### Queue Configuration
You will also need to configure and run a queue worker. All event broadcasting is done via queued jobs so that the response time of your application is not seriously affected by events being broadcast.

#### Pusher Channels
If you plan to broadcast your events using Pusher Channels, you should install the Pusher Channels PHP SDK using the Composer package manager:
```
composer require pusher/pusher-php-server
```
Next, you should configure your Pusher Channels credentials in the config/broadcasting.php configuration file. An example Pusher Channels configuration is already included in this file, allowing you to quickly specify your key, secret, and application ID. Typically, these values should be set via the PUSHER_APP_KEY, PUSHER_APP_SECRET, and PUSHER_APP_ID environment variables:
```
PUSHER_APP_ID=your-pusher-app-id
PUSHER_APP_KEY=your-pusher-key
PUSHER_APP_SECRET=your-pusher-secret
PUSHER_APP_CLUSTER=mt1
```
The config/broadcasting.php file's pusher configuration also allows you to specify additional options that are supported by Channels, such as the cluster.

Next, you will need to change your broadcast driver to pusher in your .env file:
```
BROADCAST_DRIVER=pusher
```
Finally, you are ready to install and configure Laravel Echo, which will receive the broadcast events on the client-side.

### Open Source Alternatives
#### PHP
The laravel-websockets package is a pure PHP, Pusher compatible WebSocket package for Laravel. This package allows you to leverage the full power of Laravel broadcasting without a commercial WebSocket provider. For more information on installing and using this package, please consult its official documentation.

#### Node
Soketi is a Node based, Pusher compatible WebSocket server for Laravel. Under the hood, Soketi utilizes µWebSockets.js for extreme scalability and speed. This package allows you to leverage the full power of Laravel broadcasting without a commercial WebSocket provider. For more information on installing and using this package, please consult its official documentation.

### Client Side Installation
#### Pusher Channels
Laravel Echo is a JavaScript library that makes it painless to subscribe to channels and listen for events broadcast by your server-side broadcasting driver. You may install Echo via the NPM package manager. In this example, we will also install the pusher-js package since we will be using the Pusher Channels broadcaster:
```
npm install --save-dev laravel-echo pusher-js
```
Once Echo is installed, you are ready to create a fresh Echo instance in your application's JavaScript. A great place to do this is at the bottom of the resources/js/bootstrap.js file that is included with the Laravel framework. By default, an example Echo configuration is already included in this file - you simply need to uncomment it:
```
import Echo from 'laravel-echo';
 
window.Pusher = require('pusher-js');
 
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true
});
```
Once you have uncommented and adjusted the Echo configuration according to your needs, you may compile your application's assets:
```
npm run dev
```
### Cache

#### Introduction
Some of the data retrieval or processing tasks performed by your application could be CPU intensive or take several seconds to complete. When this is the case, it is common to cache the retrieved data for a time so it can be retrieved quickly on subsequent requests for the same data. The cached data is usually stored in a very fast data store such as Memcached or Redis.

Thankfully, Laravel provides an expressive, unified API for various cache backends, allowing you to take advantage of their blazing fast data retrieval and speed up your web application.

### Configuration
Your application's cache configuration file is located at config/cache.php. In this file, you may specify which cache driver you would like to be used by default throughout your application. Laravel supports popular caching backends like Memcached, Redis, DynamoDB, and relational databases out of the box. In addition, a file based cache driver is available, while array and "null" cache drivers provide convenient cache backends for your automated tests.

The cache configuration file also contains various other options, which are documented within the file, so make sure to read over these options. By default, Laravel is configured to use the file cache driver, which stores the serialized, cached objects on the server's filesystem. For larger applications, it is recommended that you use a more robust driver such as Memcached or Redis. You may even configure multiple cache configurations for the same driver.

#### Driver Prerequisites
##### Database
When using the database cache driver, you will need to setup a table to contain the cache items. You'll find an example Schema declaration for the table below:
```
Schema::create('cache', function ($table) {
    $table->string('key')->unique();
    $table->text('value');
    $table->integer('expiration');
});

```

You may also use the ```php artisan cache:table ```Artisan command to generate a migration with the proper schema.

#### Memcached
Using the Memcached driver requires the Memcached PECL package to be installed. You may list all of your Memcached servers in the config/cache.php configuration file. This file already contains a memcached.servers entry to get you started:
```
'memcached' => [
    'servers' => [
        [
            'host' => env('MEMCACHED_HOST', '127.0.0.1'),
            'port' => env('MEMCACHED_PORT', 11211),
            'weight' => 100,
        ],
    ],
],

```
If needed, you may set the host option to a UNIX socket path. If you do this, the port option should be set to 0:
```
'memcached' => [
    [
        'host' => '/var/run/memcached/memcached.sock',
        'port' => 0,
        'weight' => 100
    ],
],
```

####  Cache Usage
Obtaining A Cache Instance
To obtain a cache store instance, you may use the Cache facade, which is what we will use throughout this documentation. The Cache facade provides convenient, terse access to the underlying implementations of the Laravel cache contracts:
```
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Cache;
 
class UserController extends Controller
{
    /**
     * Show a list of all users of the application.
     *
     * @return Response
     */
    public function index()
    {
        $value = Cache::get('key');
 
        //
    }
}
```

### Storing Items In The Cache
You may use the put method on the Cache facade to store items in the cache:
```
Cache::put('key', 'value', $seconds = 10);
```
If the storage time is not passed to the put method, the item will be stored indefinitely:
```
Cache::put('key', 'value');
```
Instead of passing the number of seconds as an integer, you may also pass a DateTime instance representing the desired expiration time of the cached item:
```
Cache::put('key', 'value', now()->addMinutes(10));
```
#### Store If Not Present
The add method will only add the item to the cache if it does not already exist in the cache store. The method will return true if the item is actually added to the cache. Otherwise, the method will return false. The add method is an atomic operation:
```
Cache::add('key', 'value', $seconds);
```
##### Storing Items Forever
The forever method may be used to store an item in the cache permanently. Since these items will not expire, they must be manually removed from the cache using the forget method:
```
Cache::forever('key', 'value');
```

Note :- If you are using the Memcached driver, items that are stored "forever" may be removed when the cache reaches its size limit.

### Retrieving Items From The Cache
The Cache facade's get method is used to retrieve items from the cache. If the item does not exist in the cache, null will be returned. If you wish, you may pass a second argument to the get method specifying the default value you wish to be returned if the item doesn't exist:
```
$value = Cache::get('key');
 
$value = Cache::get('key', 'default');
```

You may even pass a closure as the default value. The result of the closure will be returned if the specified item does not exist in the cache. Passing a closure allows you to defer the retrieval of default values from a database or other external service:
```
$value = Cache::get('key', function () {
    return DB::table(...)->get();
});
```

### Checking For Item Existence
The has method may be used to determine if an item exists in the cache. This method will also return false if the item exists but its value is null:
```
if (Cache::has('key')) {
    //
}
```

#### Incrementing / Decrementing Values
The increment and decrement methods may be used to adjust the value of integer items in the cache. Both of these methods accept an optional second argument indicating the amount by which to increment or decrement the item's value:
```
Cache::increment('key');
Cache::increment('key', $amount);
Cache::decrement('key');
Cache::decrement('key', $amount);
```

#### Retrieve & Store
Sometimes you may wish to retrieve an item from the cache, but also store a default value if the requested item doesn't exist. For example, you may wish to retrieve all users from the cache or, if they don't exist, retrieve them from the database and add them to the cache. You may do this using the Cache::remember method:
```
$value = Cache::remember('users', $seconds, function () {
    return DB::table('users')->get();
});
```
If the item does not exist in the cache, the closure passed to the remember method will be executed and its result will be placed in the cache.

You may use the rememberForever method to retrieve an item from the cache or store it forever if it does not exist:
```
$value = Cache::rememberForever('users', function () {
    return DB::table('users')->get();
});
```

### Retrieve & Delete
If you need to retrieve an item from the cache and then delete the item, you may use the pull method. Like the get method, null will be returned if the item does not exist in the cache:
```
$value = Cache::pull('key');
```

### Removing Items From The Cache
You may remove items from the cache using the forget method:
```
Cache::forget('key');
```
You may also remove items by providing a zero or negative number of expiration seconds:
```
Cache::put('key', 'value', 0);
 
Cache::put('key', 'value', -5);
```
You may clear the entire cache using the flush method:
```
Cache::flush();
```

Flushing the cache does not respect your configured cache "prefix" and will remove all entries from the cache. Consider this carefully when clearing a cache which is shared by other applications.

#### The Cache Helper
In addition to using the Cache facade, you may also use the global cache function to retrieve and store data via the cache. When the cache function is called with a single, string argument, it will return the value of the given key:
```
$value = cache('key');
```
If you provide an array of key / value pairs and an expiration time to the function, it will store values in the cache for the specified duration:
```
cache(['key' => 'value'], $seconds);
 
cache(['key' => 'value'], now()->addMinutes(10));
```
When the cache function is called without any arguments, it returns an instance of the Illuminate\Contracts\Cache\Factory implementation, allowing you to call other caching methods:
```
cache()->remember('users', $seconds, function () {
    return DB::table('users')->get();
});
```
### Cache Tags
Cache tags are not supported when using the file, dynamodb, or database cache drivers. Furthermore, when using multiple tags with caches that are stored "forever", performance will be best with a driver such as memcached, which automatically purges stale records.

#### Storing Tagged Cache Items
Cache tags allow you to tag related items in the cache and then flush all cached values that have been assigned a given tag. You may access a tagged cache by passing in an ordered array of tag names. For example, let's access a tagged cache and put a value into the cache:
```
Cache::tags(['people', 'artists'])->put('John', $john, $seconds);
Cache::tags(['people', 'authors'])->put('Anne', $anne, $seconds);
 ```

#### Accessing Tagged Cache Items
To retrieve a tagged cache item, pass the same ordered list of tags to the tags method and then call the get method with the key you wish to retrieve:
```
$john = Cache::tags(['people', 'artists'])->get('John');
$anne = Cache::tags(['people', 'authors'])->get('Anne');
```
#### Removing Tagged Cache Items
You may flush all items that are assigned a tag or list of tags. For example, this statement would remove all caches tagged with either people, authors, or both. So, both Anne and John would be removed from the cache:
```
Cache::tags(['people', 'authors'])->flush();
```
In contrast, this statement would remove only cached values tagged with authors, so Anne would be removed, but not John:
```
Cache::tags('authors')->flush();
```

#### Atomic Locks

To utilize this feature, your application must be using the memcached, redis, dynamodb, database, file, or array cache driver as your application's default cache driver. In addition, all servers must be communicating with the same central cache server.

### Collections

The Illuminate\Support\Collection class provides a fluent, convenient wrapper for working with arrays of data. For example, check out the following code. We'll use the collect helper to create a new collection instance from the array, run the strtoupper function on each element, and then remove all empty elements:
```
$collection = collect(['taylor', 'abigail', null])->map(function ($name) {
    return strtoupper($name);
})->reject(function ($name) {
    return empty($name);
});
```
As you can see, the Collection class allows you to chain its methods to perform fluent mapping and reducing of the underlying array. In general, collections are immutable, meaning every Collection method returns an entirely new Collection instance.

### Creating Collections
As mentioned above, the collect helper returns a new Illuminate\Support\Collection instance for the given array. So, creating a collection is as simple as:
```
$collection = collect([1, 2, 3]);
```

The results of Eloquent queries are always returned as Collection instances.

### Extending Collections
Collections are "macroable", which allows you to add additional methods to the Collection class at run time. The Illuminate\Support\Collection class' macro method accepts a closure that will be executed when your macro is called. The macro closure may access the collection's other methods via $this, just as if it were a real method of the collection class. For example, the following code adds a toUpper method to the Collection class:
```
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
 
Collection::macro('toUpper', function () {
    return $this->map(function ($value) {
        return Str::upper($value);
    });
});
 
$collection = collect(['first', 'second']);
 
$upper = $collection->toUpper();
 
// ['FIRST', 'SECOND']
```
Typically, you should declare collection macros in the boot method of a service provider.

### Macro Arguments
If necessary, you may define macros that accept additional arguments:
```
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
 
Collection::macro('toLocale', function ($locale) {
    return $this->map(function ($value) use ($locale) {
        return Lang::get($value, [], $locale);
    });
});
 
$collection = collect(['first', 'second']);
 
$translated = $collection->toLocale('es');
```

### Method Listing

#### all()
The all method returns the underlying array represented by the collection:
```
collect([1, 2, 3])->all();
 
// [1, 2, 3]
```

#### average()
Alias for the avg method.

#### avg()
The avg method returns the average value of a given key:
```
$average = collect([
    ['foo' => 10],
    ['foo' => 10],
    ['foo' => 20],
    ['foo' => 40]
])->avg('foo');
 
// 20
 
$average = collect([1, 1, 2, 4])->avg();
 
// 2
```

#### chunk()
The chunk method breaks the collection into multiple, smaller collections of a given size:
```
$collection = collect([1, 2, 3, 4, 5, 6, 7]);
 
$chunks = $collection->chunk(4);
 
$chunks->all();
 
// [[1, 2, 3, 4], [5, 6, 7]]
```

This method is especially useful in views when working with a grid system such as Bootstrap. For example, imagine you have a collection of Eloquent models you want to display in a grid:
```
@foreach ($products->chunk(3) as $chunk)
    <div class="row">
        @foreach ($chunk as $product)
            <div class="col-xs-4">{{ $product->name }}</div>
        @endforeach
    </div>
@endforeach

```

#### chunkWhile()
The chunkWhile method breaks the collection into multiple, smaller collections based on the evaluation of the given callback. The $chunk variable passed to the closure may be used to inspect the previous element:
```
$collection = collect(str_split('AABBCCCD'));
 
$chunks = $collection->chunkWhile(function ($value, $key, $chunk) {
    return $value === $chunk->last();
});
 
$chunks->all();
 
// [['A', 'A'], ['B', 'B'], ['C', 'C', 'C'], ['D']]
```

#### collapse()
The collapse method collapses a collection of arrays into a single, flat collection:
```
$collection = collect([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]);
 
$collapsed = $collection->collapse();
 
$collapsed->all();
 
// [1, 2, 3, 4, 5, 6, 7, 8, 9]

```

#### collect()
The collect method returns a new Collection instance with the items currently in the collection:
```
$collectionA = collect([1, 2, 3]);
 
$collectionB = $collectionA->collect();
 
$collectionB->all();
 
// [1, 2, 3]
```

#### collect()
The collect method returns a new Collection instance with the items currently in the collection:
```
$collectionA = collect([1, 2, 3]);
 
$collectionB = $collectionA->collect();
 
$collectionB->all();
 
// [1, 2, 3]
```
The collect method is primarily useful for converting lazy collections into standard Collection instances:
```
$lazyCollection = LazyCollection::make(function () {
    yield 1;
    yield 2;
    yield 3;
});
 
$collection = $lazyCollection->collect();
 
get_class($collection);
 
// 'Illuminate\Support\Collection'
 
$collection->all();
 
// [1, 2, 3]
```

The collect method is especially useful when you have an instance of Enumerable and need a non-lazy collection instance. Since collect() is part of the Enumerable contract, you can safely use it to get a Collection instance.

#### combine()
The combine method combines the values of the collection, as keys, with the values of another array or collection:
```
$collection = collect(['name', 'age']);
 
$combined = $collection->combine(['George', 29]);
 
$combined->all();
 
// ['name' => 'George', 'age' => 29]
```

#### concat()
The concat method appends the given array or collection's values onto the end of another collection:
```
$collection = collect(['John Doe']);
 
$concatenated = $collection->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);
 
$concatenated->all();
 
// ['John Doe', 'Jane Doe', 'Johnny Doe']
```

The concat method numerically reindexes keys for items concatenated onto the original collection. To maintain keys in associative collections, see the merge method.

#### contains()
The contains method determines whether the collection contains a given item. You may pass a closure to the contains method to determine if an element exists in the collection matching a given truth test:
```
$collection = collect([1, 2, 3, 4, 5]);
 
$collection->contains(function ($value, $key) {
    return $value > 5;
});
 
// false
```

Alternatively, you may pass a string to the contains method to determine whether the collection contains a given item value:

Alternatively, you may pass a string to the contains method to determine whether the collection contains a given item value:
```
$collection = collect(['name' => 'Desk', 'price' => 100]);
 
$collection->contains('Desk');
 
// true
 
$collection->contains('New York');
 
// false
```

You may also pass a key / value pair to the contains method, which will determine if the given pair exists in the collection:
```
$collection = collect([
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
]);
 
$collection->contains('product', 'Bookcase');
 
// false
```

The contains method uses "loose" comparisons when checking item values, meaning a string with an integer value will be considered equal to an integer of the same value. Use the containsStrict method to filter using "strict" comparisons.

For the inverse of contains, see the doesntContain method.


#### containsStrict()
This method has the same signature as the contains method; however, all values are compared using "strict" comparisons.

#### count()
The count method returns the total number of items in the collection:
```
$collection = collect([1, 2, 3, 4]);
 
$collection->count();
 
// 4
```

#### countBy()
The countBy method counts the occurrences of values in the collection. By default, the method counts the occurrences of every element, allowing you to count certain "types" of elements in the collection:
```
$collection = collect([1, 2, 2, 2, 3]);
 
$counted = $collection->countBy();
 
$counted->all();
 
// [1 => 1, 2 => 3, 3 => 1]
```

You pass a closure to the countBy method to count all items by a custom value:
```
$collection = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com']);
 
$counted = $collection->countBy(function ($email) {
    return substr(strrchr($email, "@"), 1);
});
 
$counted->all();
 
// ['gmail.com' => 2, 'yahoo.com' => 1]
```

if you want see more collection then you can visit this link  https://laravel.com/docs/9.x/collections 

### Compiling Assets (Mix)

#### Introduction
Laravel Mix, a package developed by Laracasts creator Jeffrey Way, provides a fluent API for defining webpack build steps for your Laravel application using several common CSS and JavaScript pre-processors.

In other words, Mix makes it a cinch to compile and minify your application's CSS and JavaScript files. Through simple method chaining, you can fluently define your asset pipeline. For example:

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css');
If you've ever been confused and overwhelmed about getting started with webpack and asset compilation, you will love Laravel Mix. However, you are not required to use it while developing your application; you are free to use any asset pipeline tool you wish, or even none at all.

### File Storage

#### Introduction
Laravel provides a powerful filesystem abstraction thanks to the wonderful Flysystem PHP package by Frank de Jonge. The Laravel Flysystem integration provides simple drivers for working with local filesystems, SFTP, and Amazon S3. Even better, it's amazingly simple to switch between these storage options between your local development machine and production server as the API remains the same for each system.


#### Configuration
Laravel's filesystem configuration file is located at config/filesystems.php. Within this file, you may configure all of your filesystem "disks". Each disk represents a particular storage driver and storage location. Example configurations for each supported driver are included in the configuration file so you can modify the configuration to reflect your storage preferences and credentials.

The local driver interacts with files stored locally on the server running the Laravel application while the s3 driver is used to write to Amazon's S3 cloud storage service.

#### The Local Driver
When using the local driver, all file operations are relative to the root directory defined in your filesystems configuration file. By default, this value is set to the storage/app directory. Therefore, the following method would write to storage/app/example.txt:
```
use Illuminate\Support\Facades\Storage;
 
Storage::disk('local')->put('example.txt', 'Contents');
```
Retrieving Files
The get method may be used to retrieve the contents of a file. The raw string contents of the file will be returned by the method. Remember, all file paths should be specified relative to the disk's "root" location:

$contents = Storage::get('file.jpg');
The exists method may be used to determine if a file exists on the disk:

if (Storage::disk('s3')->exists('file.jpg')) {
    // ...
}
The missing method may be used to determine if a file is missing from the disk:

if (Storage::disk('s3')->missing('file.jpg')) {
    // ...
}Retrieving Files
The get method may be used to retrieve the contents of a file. The raw string contents of the file will be returned by the method. Remember, all file paths should be specified relative to the disk's "root" location:

$contents = Storage::get('file.jpg');
The exists method may be used to determine if a file exists on the disk:

if (Storage::disk('s3')->exists('file.jpg')) {
    // ...
}
The missing method may be used to determine if a file is missing from the disk:

if (Storage::disk('s3')->missing('file.jpg')) {
    // ...
}
#### Retrieving Files
The get method may be used to retrieve the contents of a file. The raw string contents of the file will be returned by the method. Remember, all file paths should be specified relative to the disk's "root" location:
```
$contents = Storage::get('file.jpg');
```
The exists method may be used to determine if a file exists on the disk:
```
if (Storage::disk('s3')->exists('file.jpg')) {
    // ...
}
```
The missing method may be used to determine if a file is missing from the disk:
```
if (Storage::disk('s3')->missing('file.jpg')) {
    // ...
}
```

#### Downloading Files
The download method may be used to generate a response that forces the user's browser to download the file at the given path. The download method accepts a filename as the second argument to the method, which will determine the filename that is seen by the user downloading the file. Finally, you may pass an array of HTTP headers as the third argument to the method:
```
return Storage::download('file.jpg');
 
return Storage::download('file.jpg', $name, $headers);
```

#### Helpers

#### Introduction
Laravel includes a variety of global "helper" PHP functions. Many of these functions are used by the framework itself; however, you are free to use them in your own applications if you find them convenient.

### Available Methods

lost of method are available https://laravel.com/docs/9.x/helpers

###Arr::collapse()
The Arr::collapse method collapses an array of arrays into a single array:
```
use Illuminate\Support\Arr;
 
$array = Arr::collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
 
// [1, 2, 3, 4, 5, 6, 7, 8, 9]

```

### HTTP Client
#### Introduction
Laravel provides an expressive, minimal API around the Guzzle HTTP client, allowing you to quickly make outgoing HTTP requests to communicate with other web applications. Laravel's wrapper around Guzzle is focused on its most common use cases and a wonderful developer experience.

Before getting started, you should ensure that you have installed the Guzzle package as a dependency of your application. By default, Laravel automatically includes this dependency. However, if you have previously removed the package, you may install it again via Composer:
```
composer require guzzlehttp/guzzle
```
#### Making Requests
To make requests, you may use the head, get, post, put, patch, and delete methods provided by the Http facade. First, let's examine how to make a basic GET request to another URL:
```
use Illuminate\Support\Facades\Http;
 
$response = Http::get('http://example.com');
```
The get method returns an instance of Illuminate\Http\Client\Response, which provides a variety of methods that may be used to inspect the response:
```
$response->body() : string;
$response->json($key = null) : array|mixed;
$response->object() : object;
$response->collect($key = null) : Illuminate\Support\Collection;
$response->status() : int;
$response->ok() : bool;
$response->successful() : bool;
$response->redirect(): bool;
$response->failed() : bool;
$response->serverError() : bool;
$response->clientError() : bool;
$response->header($header) : string;
$response->headers() : array;
```
The Illuminate\Http\Client\Response object also implements the PHP ArrayAccess interface, allowing you to access JSON response data directly on the response:
```
return Http::get('http://example.com/users/1')['name'];
```

### Dumping Requests
If you would like to dump the outgoing request instance before it is sent and terminate the script's execution, you may add the dd method to the beginning of your request definition:
```
return Http::dd()->get('http://example.com');
```

### Request Data
Of course, it is common when making POST, PUT, and PATCH requests to send additional data with your request, so these methods accept an array of data as their second argument. By default, data will be sent using the application/json content type:
```
use Illuminate\Support\Facades\Http;
 
$response = Http::post('http://example.com/users', [
    'name' => 'Steve',
    'role' => 'Network Administrator',
]);
```

### GET Request Query Parameters
When making GET requests, you may either append a query string to the URL directly or pass an array of key / value pairs as the second argument to the get method:

```
$response = Http::get('http://example.com/users', [
    'name' => 'Taylor',
    'page' => 1,
]);
```

### Sending Form URL Encoded Requests
If you would like to send data using the application/x-www-form-urlencoded content type, you should call the asForm method before making your request:
```
$response = Http::asForm()->post('http://example.com/users', [
    'name' => 'Sara',
    'role' => 'Privacy Consultant',
]);
```

### Sending A Raw Request Body
You may use the withBody method if you would like to provide a raw request body when making a request. The content type may be provided via the method's second argument:
```
$response = Http::withBody(
    base64_encode($photo), 'image/jpeg'
)->post('http://example.com/photo');
```

#### Multi-Part Requests
If you would like to send files as multi-part requests, you should call the attach method before making your request. This method accepts the name of the file and its contents. If needed, you may provide a third argument which will be considered the file's filename:
```
$response = Http::attach(
    'attachment', file_get_contents('photo.jpg'), 'photo.jpg'
)->post('http://example.com/attachments');
Instead of passing the raw contents of a file, you may pass a stream resource:

$photo = fopen('photo.jpg', 'r');
 
$response = Http::attach(
    'attachment', $photo, 'photo.jpg'
)->post('http://example.com/attachments');
```

### Headers
Headers may be added to requests using the withHeaders method. This withHeaders method accepts an array of key / value pairs:
```
$response = Http::withHeaders([
    'X-First' => 'foo',
    'X-Second' => 'bar'
])->post('http://example.com/users', [
    'name' => 'Taylor',
]);
```
You may use the accept method to specify the content type that your application is expecting in response to your request:
```
$response = Http::accept('application/json')->get('http://example.com/users');
```
For convenience, you may use the acceptJson method to quickly specify that your application expects the application/json content type in response to your request:
```
$response = Http::acceptJson()->get('http://example.com/users');
```

#### Authentication
You may specify basic and digest authentication credentials using the withBasicAuth and withDigestAuth methods, respectively:
```
// Basic authentication...
$response = Http::withBasicAuth('taylor@laravel.com', 'secret')->post(...);
 
// Digest authentication...
$response = Http::withDigestAuth('taylor@laravel.com', 'secret')->post(...);
```
#### Bearer Tokens
If you would like to quickly add a bearer token to the request's Authorization header, you may use the withToken method:
```
$response = Http::withToken('token')->post(...);
```

### Timeout
The timeout method may be used to specify the maximum number of seconds to wait for a response:
```
$response = Http::timeout(3)->get(...);
```
If the given timeout is exceeded, an instance of Illuminate\Http\Client\ConnectionException will be thrown.

You may specify the maximum number of seconds to wait while trying to connect to a server using the connectTimeout method:
```
$response = Http::connectTimeout(3)->get(...);
```
### Retries
If you would like HTTP client to automatically retry the request if a client or server error occurs, you may use the retry method. The retry method accepts the maximum number of times the request should be attempted and the number of milliseconds that Laravel should wait in between attempts:
```
$response = Http::retry(3, 100)->post(...);
```
If needed, you may pass a third argument to the retry method. The third argument should be a callable that determines if the retries should actually be attempted. For example, you may wish to only retry the request if the initial request encounters an ConnectionException:
```
$response = Http::retry(3, 100, function ($exception) {
    return $exception instanceof ConnectionException;
})->post(...);
```
If all of the requests fail, an instance of Illuminate\Http\Client\RequestException will be thrown. If you would like to disable this behavior, you may provide a throw argument with a value of false. When disabled, the last response received by the client will be returned after all retries have been attempted:
```
$response = Http::retry(3, 100, throw: false)->post(...);
```

#### Error Handling
Unlike Guzzle's default behavior, Laravel's HTTP client wrapper does not throw exceptions on client or server errors (400 and 500 level responses from servers). You may determine if one of these errors was returned using the successful, clientError, or serverError methods:

```
// Determine if the status code is >= 200 and < 300...
$response->successful();
 
// Determine if the status code is >= 400...
$response->failed();
 
// Determine if the response has a 400 level status code...
$response->clientError();
 
// Determine if the response has a 500 level status code...
$response->serverError();
 
// Immediately execute the given callback if there was a client or server error...
$response->onError(callable $callback);

```

### Throwing Exceptions
If you have a response instance and would like to throw an instance of Illuminate\Http\Client\RequestException if the response status code indicates a client or server error, you may use the throw or throwIf methods:
```
$response = Http::post(...);
 
// Throw an exception if a client or server error occurred...
$response->throw();
 
// Throw an exception if an error occurred and the given condition is true...
$response->throwIf($condition);
 
return $response['user']['id'];
```
The Illuminate\Http\Client\RequestException instance has a public $response property which will allow you to inspect the returned response.

The throw method returns the response instance if no error occurred, allowing you to chain other operations onto the throw method:
```
return Http::post(...)->throw()->json();
```
If you would like to perform some additional logic before the exception is thrown, you may pass a closure to the throw method. The exception will be thrown automatically after the closure is invoked, so you do not need to re-throw the exception from within the closure:
```
return Http::post(...)->throw(function ($response, $e) {
    //
})->json();

```
#### Guzzle Options
You may specify additional Guzzle request options using the withOptions method. The withOptions method accepts an array of key / value pairs:
```
$response = Http::withOptions([
    'debug' => true,
])->get('http://example.com/users');
```

#### Concurrent Requests
Sometimes, you may wish to make multiple HTTP requests concurrently. In other words, you want several requests to be dispatched at the same time instead of issuing the requests sequentially. This can lead to substantial performance improvements when interacting with slow HTTP APIs.

Thankfully, you may accomplish this using the pool method. The pool method accepts a closure which receives an Illuminate\Http\Client\Pool instance, allowing you to easily add requests to the request pool for dispatching:
```
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
 
$responses = Http::pool(fn (Pool $pool) => [
    $pool->get('http://localhost/first'),
    $pool->get('http://localhost/second'),
    $pool->get('http://localhost/third'),
]);
 
return $responses[0]->ok() &&
       $responses[1]->ok() &&
       $responses[2]->ok();
```
As you can see, each response instance can be accessed based on the order it was added to the pool. If you wish, you can name the requests using the as method, which allows you to access the corresponding responses by name:
```
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
 
$responses = Http::pool(fn (Pool $pool) => [
    $pool->as('first')->get('http://localhost/first'),
    $pool->as('second')->get('http://localhost/second'),
    $pool->as('third')->get('http://localhost/third'),
]);
 
return $responses['first']->ok();
```

#### Macros
The Laravel HTTP client allows you to define "macros", which can serve as a fluent, expressive mechanism to configure common request paths and headers when interacting with services throughout your application. To get started, you may define the macro within the boot method of your application's App\Providers\AppServiceProvider class:
```
use Illuminate\Support\Facades\Http;
 
/**
 * Bootstrap any application services.
 *
 * @return void
 */
public function boot()
{
    Http::macro('github', function () {
        return Http::withHeaders([
            'X-Example' => 'example',
        ])->baseUrl('https://github.com');
    });
}
```
Once your macro has been configured, you may invoke it from anywhere in your application to create a pending request with the specified configuration:
```
$response = Http::github()->get('/');
```

#### Testing
Many Laravel services provide functionality to help you easily and expressively write tests, and Laravel's HTTP wrapper is no exception. The Http facade's fake method allows you to instruct the HTTP client to return stubbed / dummy responses when requests are made.

Faking Responses
For example, to instruct the HTTP client to return empty, 200 status code responses for every request, you may call the fake method with no arguments:
```
    use Illuminate\Support\Facades\Http;
    
    Http::fake();
    
    $response = Http::post(...);
```

#### Events
Laravel fires three events during the process of sending HTTP requests. The RequestSending event is fired prior to a request being sent, while the ResponseReceived event is fired after a response is received for a given request. The ConnectionFailed event is fired if no response is received for a given request.

The RequestSending and ConnectionFailed events both contain a public $request property that you may use to inspect the Illuminate\Http\Client\Request instance. Likewise, the ResponseReceived event contains a $request property as well as a $response property which may be used to inspect the Illuminate\Http\Client\Response instance. You may register event listeners for this event in your App\Providers\EventServiceProvider service provider:
```
/**
 * The event listener mappings for the application.
 *
 * @var array
 */
protected $listen = [
    'Illuminate\Http\Client\Events\RequestSending' => [
        'App\Listeners\LogRequestSending',
    ],
    'Illuminate\Http\Client\Events\ResponseReceived' => [
        'App\Listeners\LogResponseReceived',
    ],
    'Illuminate\Http\Client\Events\ConnectionFailed' => [
        'App\Listeners\LogConnectionFailed',
    ],
];
```
### Localization

#### Introduction
Laravel's localization features provide a convenient way to retrieve strings in various languages, allowing you to easily support multiple languages within your application.

#### Mail

#### Introduction
Sending email doesn't have to be complicated. Laravel provides a clean, simple email API powered by the popular Symfony Mailer component. Laravel and Symfony Mailer provide drivers for sending email via SMTP, Mailgun, Postmark, Amazon SES, and sendmail, allowing you to quickly get started sending mail through a local or cloud based service of your choice.

#### Configuration
Laravel's email services may be configured via your application's config/mail.php configuration file. Each mailer configured within this file may have its own unique configuration and even its own unique "transport", allowing your application to use different email services to send certain email messages. For example, your application might use Postmark to send transactional emails while using Amazon SES to send bulk emails.

Within your mail configuration file, you will find a mailers configuration array. This array contains a sample configuration entry for each of the major mail drivers / transports supported by Laravel, while the default configuration value determines which mailer will be used by default when your application needs to send an email message.

#### Configuration
Laravel's email services may be configured via your application's config/mail.php configuration file. Each mailer configured within this file may have its own unique configuration and even its own unique "transport", allowing your application to use different email services to send certain email messages. For example, your application might use Postmark to send transactional emails while using Amazon SES to send bulk emails.

Within your mail configuration file, you will find a mailers configuration array. This array contains a sample configuration entry for each of the major mail drivers / transports supported by Laravel, while the default configuration value determines which mailer will be used by default when your application needs to send an email message.

#### Driver / Transport Prerequisites
The API based drivers such as Mailgun and Postmark are often simpler and faster than sending mail via SMTP servers. Whenever possible, we recommend that you use one of these drivers.

#### Generating Mailables
When building Laravel applications, each type of email sent by your application is represented as a "mailable" class. These classes are stored in the app/Mail directory. Don't worry if you don't see this directory in your application, since it will be generated for you when you create your first mailable class using the make:mail Artisan command:
```
php artisan make:mail OrderShipped
```

#### Writing Mailables
Once you have generated a mailable class, open it up so we can explore its contents. First, note that all of a mailable class' configuration is done in the build method. Within this method, you may call various methods such as from, subject, view, and attach to configure the email's presentation and delivery.


You may type-hint dependencies on the mailable's build method. The Laravel service container automatically injects these dependencies.

Configuring The Sender
Using The from Method
First, let's explore configuring the sender of the email. Or, in other words, who the email is going to be "from". There are two ways to configure the sender. First, you may use the from method within your mailable class' build method:
```
/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this->from('example@example.com', 'Example')
                ->view('emails.orders.shipped');
}
```

#### Configuring The View
Within a mailable class' build method, you may use the view method to specify which template should be used when rendering the email's contents. Since each email typically uses a Blade template to render its contents, you have the full power and convenience of the Blade templating engine when building your email's HTML:
```
/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this->view('emails.orders.shipped');
}
```

You may wish to create a resources/views/emails directory to house all of your email templates; however, you are free to place them wherever you wish within your resources/views directory.

### View Data
#### Via Public Properties
Typically, you will want to pass some data to your view that you can utilize when rendering the email's HTML. There are two ways you may make data available to your view. First, any public property defined on your mailable class will automatically be made available to the view. So, for example, you may pass data into your mailable class' constructor and set that data to public properties defined on the class:
```
<?php
 
namespace App\Mail;
 
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 
class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
 
    /**
     * The order instance.
     *
     * @var \App\Models\Order
     */
    public $order;
 
    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.shipped');
    }
}
```
Once the data has been set to a public property, it will automatically be available in your view, so you may access it like you would access any other data in your Blade templates:
```
<div>
    Price: {{ $order->price }}
</div>
```
Via The with Method:
If you would like to customize the format of your email's data before it is sent to the template, you may manually pass your data to the view via the with method. Typically, you will still pass data via the mailable class' constructor; however, you should set this data to protected or private properties so the data is not automatically made available to the template. Then, when calling the with method, pass an array of data that you wish to make available to the template:

```
<?php
 
namespace App\Mail;
 
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 
class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
 
    /**
     * The order instance.
     *
     * @var \App\Models\Order
     */
    protected $order;
 
    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.shipped')
                    ->with([
                        'orderName' => $this->order->name,
                        'orderPrice' => $this->order->price,
                    ]);
    }
}
```
Once the data has been passed to the with method, it will automatically be available in your view, so you may access it like you would access any other data in your Blade templates:
```
<div>
    Price: {{ $orderPrice }}
</div>
```

#### Attachments
To add attachments to an email, use the attach method within the mailable class' build method. The attach method accepts the full path to the file as its first argument:
```
/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this->view('emails.orders.shipped')
                ->attach('/path/to/file');
}
```

When attaching files to a message, you may also specify the display name and / or MIME type by passing an array as the second argument to the attach method:
```
/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this->view('emails.orders.shipped')
                ->attach('/path/to/file', [
                    'as' => 'name.pdf',
                    'mime' => 'application/pdf',
                ]);
}
```

#### Attaching Files From Disk
If you have stored a file on one of your filesystem disks, you may attach it to the email using the attachFromStorage method:
```
/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
   return $this->view('emails.orders.shipped')
               ->attachFromStorage('/path/to/file');
}
```
If necessary, you may specify the file's attachment name and additional options using the second and third arguments to the attachFromStorage method:
```
/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
   return $this->view('emails.orders.shipped')
               ->attachFromStorage('/path/to/file', 'name.pdf', [
                   'mime' => 'application/pdf'
               ]);
}
```
The attachFromStorageDisk method may be used if you need to specify a storage disk other than your default disk:
```
/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
   return $this->view('emails.orders.shipped')
               ->attachFromStorageDisk('s3', '/path/to/file');
}
```

#### Sending Mail
To send a message, use the to method on the Mail facade. The to method accepts an email address, a user instance, or a collection of users. If you pass an object or collection of objects, the mailer will automatically use their email and name properties when determining the email's recipients, so make sure these attributes are available on your objects. Once you have specified your recipients, you may pass an instance of your mailable class to the send method:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
 
class OrderShipmentController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
 
        // Ship the order...
 
        Mail::to($request->user())->send(new OrderShipped($order));
    }
}
```
You are not limited to just specifying the "to" recipients when sending a message. You are free to set "to", "cc", and "bcc" recipients by chaining their respective methods together:
```
Mail::to($request->user())
    ->cc($moreUsers)
    ->bcc($evenMoreUsers)
    ->send(new OrderShipped($order));

```

#### Looping Over Recipients
Occasionally, you may need to send a mailable to a list of recipients by iterating over an array of recipients / email addresses. However, since the to method appends email addresses to the mailable's list of recipients, each iteration through the loop will send another email to every previous recipient. Therefore, you should always re-create the mailable instance for each recipient:
```
foreach (['taylor@example.com', 'dries@example.com'] as $recipient) {
    Mail::to($recipient)->send(new OrderShipped($order));
}
```

#### Sending Mail Via A Specific Mailer
By default, Laravel will send email using the mailer configured as the default mailer in your application's mail configuration file. However, you may use the mailer method to send a message using a specific mailer configuration:
```
Mail::mailer('postmark')
        ->to($request->user())
        ->send(new OrderShipped($order));

```

### Notifications
#### Introduction
In addition to support for sending email, Laravel provides support for sending notifications across a variety of delivery channels, including email, SMS (via Vonage, formerly known as Nexmo), and Slack. In addition, a variety of community built notification channels have been created to send notification over dozens of different channels! Notifications may also be stored in a database so they may be displayed in your web interface.

Typically, notifications should be short, informational messages that notify users of something that occurred in your application. For example, if you are writing a billing application, you might send an "Invoice Paid" notification to your users via the email and SMS channels.

#### Generating Notifications
In Laravel, each notification is represented by a single class that is typically stored in the app/Notifications directory. Don't worry if you don't see this directory in your application - it will be created for you when you run the make:notification Artisan command:
```
php artisan make:notification InvoicePaid
```
This command will place a fresh notification class in your app/Notifications directory. Each notification class contains a via method and a variable number of message building methods, such as toMail or toDatabase, that convert the notification to a message tailored for that particular channel.

#### Sending Notifications
Using The Notifiable Trait
Notifications may be sent in two ways: using the notify method of the Notifiable trait or using the Notification facade. The Notifiable trait is included on your application's App\Models\User model by default:
```
<?php
 
namespace App\Models;
 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
 
class User extends Authenticatable
{
    use Notifiable;
}
```
The notify method that is provided by this trait expects to receive a notification instance:
```
use App\Notifications\InvoicePaid;
 
 $user = User::find($id);
 $user->notify(new InvoicePaid());
 ```

Note Remember, you may use the Notifiable trait on any of your models. You are not limited to only including it on your User model.


#### Using The Notification Facade
Alternatively, you may send notifications via the Notification facade. This approach is useful when you need to send a notification to multiple notifiable entities such as a collection of users. To send notifications using the facade, pass all of the notifiable entities and the notification instance to the send method:
```
use Illuminate\Support\Facades\Notification;
 
Notification::send($users, new InvoicePaid($invoice));
```
You can also send notifications immediately using the sendNow method. This method will send the notification immediately even if the notification implements the ShouldQueue interface:
```
Notification::sendNow($developers, new DeploymentCompleted($deployment));
```

#### Specifying Delivery Channels

Every notification class has a via method that determines on which channels the notification will be delivered. Notifications may be sent on the mail, database, broadcast, vonage, and slack channels.

The via method receives a $notifiable instance, which will be an instance of the class to which the notification is being sent. You may use $notifiable to determine which channels the notification should be delivered on:
```
/**
 * Get the notification's delivery channels.
 *
 * @param  mixed  $notifiable
 * @return array
 */
public function via($notifiable)
{
    return $notifiable->prefers_sms ? ['vonage'] : ['mail', 'database'];
}
```

### Package Development

#### Introduction
Packages are the primary way of adding functionality to Laravel. Packages might be anything from a great way to work with dates like Carbon or a package that allows you to associate files with Eloquent models like Spatie's Laravel Media Library.

There are different types of packages. Some packages are stand-alone, meaning they work with any PHP framework. Carbon and PHPUnit are examples of stand-alone packages. Any of these packages may be used with Laravel by requiring them in your composer.json file.

### Queues

#### Introduction
While building your web application, you may have some tasks, such as parsing and storing an uploaded CSV file, that take too long to perform during a typical web request. Thankfully, Laravel allows you to easily create queued jobs that may be processed in the background. By moving time intensive tasks to a queue, your application can respond to web requests with blazing speed and provide a better user experience to your customers.

Laravel queues provide a unified queueing API across a variety of different queue backends, such as Amazon SQS, Redis, or even a relational database.

Laravel's queue configuration options are stored in your application's config/queue.php configuration file. In this file, you will find connection configurations for each of the queue drivers that are included with the framework, including the database, Amazon SQS, Redis, and Beanstalkd drivers, as well as a synchronous driver that will execute jobs immediately (for use during local development). A null queue driver is also included which discards queued jobs.


### Task Scheduling

#### Introduction
In the past, you may have written a cron configuration entry for each task you needed to schedule on your server. However, this can quickly become a pain because your task schedule is no longer in source control and you must SSH into your server to view your existing cron entries or add additional entries.

Laravel's command scheduler offers a fresh approach to managing scheduled tasks on your server. The scheduler allows you to fluently and expressively define your command schedule within your Laravel application itself. When using the scheduler, only a single cron entry is needed on your server. Your task schedule is defined in the app/Console/Kernel.php file's schedule method. To help you get started, a simple example is defined within the method.

#### Defining Schedules
You may define all of your scheduled tasks in the schedule method of your application's App\Console\Kernel class. To get started, let's take a look at an example. In this example, we will schedule a closure to be called every day at midnight. Within the closure we will execute a database query to clear a table:
```
<?php
 
namespace App\Console;
 
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
 
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            DB::table('recent_users')->delete();
        })->daily();

         $schedule->call(function () {
            info("Second Schedule task call in  One  minute new "); //it will add in laravel.log file 
        })->everyMinute();
    }
}
```

##### Running The Scheduler Locally
Typically, you would not add a scheduler cron entry to your local development machine. Instead, you may use the schedule:work Artisan command. This command will run in the foreground and invoke the scheduler every minute until you terminate the command:
```
php artisan schedule:work
```
If you would like to view an overview of your scheduled tasks and the next time they are scheduled to run, you may use the schedule:list Artisan command:
```
php artisan schedule:list
```

##### Scheduling Artisan Commands
In addition to scheduling closures, you may also schedule Artisan commands and system commands. For example, you may use the command method to schedule an Artisan command using either the command's name or class.

When scheduling Artisan commands using the command's class name, you may pass an array of additional command-line arguments that should be provided to the command when it is invoked:

```
use App\Console\Commands\SendEmailsCommand;
 
$schedule->command('emails:send')->daily();
 
$schedule->command(SendEmailsCommand::class)->daily();
```


#### Scheduling Shell Commands
The exec method may be used to issue a command to the operating system:
```
$schedule->exec('node /home/forge/script.js')->daily();
```

#### 
Schedule Frequency Options
We've already seen a few examples of how you may configure a task to run at specified intervals. However, there are many more task schedule frequencies that you may assign to a task:
```
Method	Description
->cron('* * * * *');	Run the task on a custom cron schedule
->everyMinute();	Run the task every minute
->everyTwoMinutes();	Run the task every two minutes
->everyThreeMinutes();	Run the task every three minutes
->everyFourMinutes();	Run the task every four minutes
->everyFiveMinutes();	Run the task every five minutes
->everyTenMinutes();	Run the task every ten minutes
->everyFifteenMinutes();	Run the task every fifteen minutes
->everyThirtyMinutes();	Run the task every thirty minutes
->hourly();	Run the task every hour
->hourlyAt(17);	Run the task every hour at 17 minutes past the hour
->everyTwoHours();	Run the task every two hours
->everyThreeHours();	Run the task every three hours
->everyFourHours();	Run the task every four hours
->everySixHours();	Run the task every six hours
->daily();	Run the task every day at midnight
->dailyAt('13:00');	Run the task every day at 13:00
->twiceDaily(1, 13);	Run the task daily at 1:00 & 13:00
->weekly();	Run the task every Sunday at 00:00
->weeklyOn(1, '8:00');	Run the task every week on Monday at 8:00
->monthly();	Run the task on the first day of every month at 00:00
->monthlyOn(4, '15:00');	Run the task every month on the 4th at 15:00
->twiceMonthly(1, 16, '13:00');	Run the task monthly on the 1st and 16th at 13:00
->lastDayOfMonth('15:00');	Run the task on the last day of the month at 15:00
->quarterly();	Run the task on the first day of every quarter at 00:00
->yearly();	Run the task on the first day of every year at 00:00
->yearlyOn(6, 1, '17:00');	Run the task every year on June 1st at 17:00
->timezone('America/New_York');	Set the timezone for the task

```

These methods may be combined with additional constraints to create even more finely tuned schedules that only run on certain days of the week. For example, you may schedule a command to run weekly on Monday:
```
// Run once per week on Monday at 1 PM...
$schedule->call(function () {
    //
})->weekly()->mondays()->at('13:00');
 
// Run hourly from 8 AM to 5 PM on weekdays...
$schedule->command('foo')
          ->weekdays()
          ->hourly()
          ->timezone('America/Chicago')
          ->between('8:00', '17:00');

```
A list of additional schedule constraints may be found below:
```
Method	Description
->weekdays();	Limit the task to weekdays
->weekends();	Limit the task to weekends
->sundays();	Limit the task to Sunday
->mondays();	Limit the task to Monday
->tuesdays();	Limit the task to Tuesday
->wednesdays();	Limit the task to Wednesday
->thursdays();	Limit the task to Thursday
->fridays();	Limit the task to Friday
->saturdays();	Limit the task to Saturday
->days(array|mixed);	Limit the task to specific days
->between($startTime, $endTime);	Limit the task to run between start and end times
->unlessBetween($startTime, $endTime);	Limit the task to not run between start and end times
->when(Closure);	Limit the task based on a truth test
->environments($env);	Limit the task to specific environments
```

##### Day Constraints
The days method may be used to limit the execution of a task to specific days of the week. For example, you may schedule a command to run hourly on Sundays and Wednesdays:
```
$schedule->command('emails:send')
                ->hourly()
                ->days([0, 3]);
```
Alternatively, you may use the constants available on the Illuminate\Console\Scheduling\Schedule class when defining the days on which a task should run:
```
use Illuminate\Console\Scheduling\Schedule;
 
$schedule->command('emails:send')
                ->hourly()
                ->days([Schedule::SUNDAY, Schedule::WEDNESDAY]);
```  

##### Between Time Constraints
The between method may be used to limit the execution of a task based on the time of day:
```
$schedule->command('emails:send')
                    ->hourly()
                    ->between('7:00', '22:00');

```
Similarly, the unlessBetween method can be used to exclude the execution of a task for a period of time:
```
$schedule->command('emails:send')
                    ->hourly()
                    ->unlessBetween('23:00', '4:00');
```                    

check full method use follow https://laravel.com/docs/9.x/scheduling

###### Environment Constraints
The environments method may be used to execute tasks only on the given environments (as defined by the APP_ENV environment variable):
```
$schedule->command('emails:send')
            ->daily()
            ->environments(['staging', 'production']);
```            

#### Timezones
Using the timezone method, you may specify that a scheduled task's time should be interpreted within a given timezone:
```
$schedule->command('report:generate')
         ->timezone('America/New_York')
         ->at('2:00')
```         

#### Preventing Task Overlaps
By default, scheduled tasks will be run even if the previous instance of the task is still running. To prevent this, you may use the withoutOverlapping method:
```
$schedule->command('emails:send')->withoutOverlapping();
```

In this example, the emails:send Artisan command will be run every minute if it is not already running. The withoutOverlapping method is especially useful if you have tasks that vary drastically in their execution time, preventing you from predicting exactly how long a given task will take.

If needed, you may specify how many minutes must pass before the "without overlapping" lock expires. By default, the lock will expire after 24 hours:
```
$schedule->command('emails:send')->withoutOverlapping(10);
```

##### Running Tasks On One Server

To utilize this feature, your application must be using the database, memcached, dynamodb, or redis cache driver as your application's default cache driver. In addition, all servers must be communicating with the same central cache server.

#### If your application's scheduler is running on multiple servers, you may limit a scheduled job to only execute on a single server. For instance, assume you have a scheduled task that generates a new report every Friday night. If the task scheduler is running on three worker servers, the scheduled task will run on all three servers and generate the report three times. Not good!

To indicate that the task should run on only one server, use the onOneServer method when defining the scheduled task. The first server to obtain the task will secure an atomic lock on the job to prevent other servers from running the same task at the same time:
```
    $schedule->command('report:generate')
                    ->fridays()
                    ->at('17:00')
                    ->onOneServer();
```    


##### Background Tasks
By default, multiple tasks scheduled at the same time will execute sequentially based on the order they are defined in your schedule method. If you have long-running tasks, this may cause subsequent tasks to start much later than anticipated. If you would like to run tasks in the background so that they may all run simultaneously, you may use the runInBackground method:
```
$schedule->command('analytics:report')
         ->daily()
         ->runInBackground();
```


The runInBackground method may only be used when scheduling tasks via the command and exec methods.

##### Maintenance Mode
Your application's scheduled tasks will not run when the application is in maintenance mode, since we don't want your tasks to interfere with any unfinished maintenance you may be performing on your server. However, if you would like to force a task to run even in maintenance mode, you may call the evenInMaintenanceMode method when defining the task:
```
$schedule->command('emails:send')->evenInMaintenanceMode();
```

##### Running The Scheduler
Now that we have learned how to define scheduled tasks, let's discuss how to actually run them on our server. The schedule:run Artisan command will evaluate all of your scheduled tasks and determine if they need to run based on the server's current time.

So, when using Laravel's scheduler, we only need to add a single cron configuration entry to our server that runs the schedule:run command every minute. If you do not know how to add cron entries to your server, consider using a service such as Laravel Forge which can manage the cron entries for you:
```
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

#### Task Hooks
Using the before and after methods, you may specify code to be executed before and after the scheduled task is executed:
```
$schedule->command('emails:send')
         ->daily()
         ->before(function () {
             // The task is about to execute...
         })
         ->after(function () {
             // The task has executed...
         });
```
The onSuccess and onFailure methods allow you to specify code to be executed if the scheduled task succeeds or fails. A failure indicates that the scheduled Artisan or system command terminated with a non-zero exit code:
```
$schedule->command('emails:send')
         ->daily()
         ->onSuccess(function () {
             // The task succeeded...
         })
         ->onFailure(function () {
             // The task failed...
```
If output is available from your command, you may access it in your after, onSuccess or onFailure hooks by type-hinting an Illuminate\Support\Stringable instance as the $output argument of your hook's closure definition:
```
use Illuminate\Support\Stringable;
 
$schedule->command('emails:send')
         ->daily()
         ->onSuccess(function (Stringable $output) {
             // The task succeeded...
         })
         ->onFailure(function (Stringable $output) {
             // The task failed...
         });

```         
###### Pinging URLs
Using the pingBefore and thenPing methods, the scheduler can automatically ping a given URL before or after a task is executed. This method is useful for notifying an external service, such as Envoyer, that your scheduled task is beginning or has finished execution:
```
$schedule->command('emails:send')
         ->daily()
         ->pingBefore($url)
         ->thenPing($url);
```

You can also call method from controller see below   

```
 $schedule->call('App\Http\Controllers\DemoRequestHandController@createcsv')
        ->everyMinute();

 ```       

 ## security

 ### Authentication
 #### Introduction
Many web applications provide a way for their users to authenticate with the application and "login". Implementing this feature in web applications can be a complex and potentially risky endeavor. For this reason, Laravel strives to give you the tools you need to implement authentication quickly, securely, and easily.

At its core, Laravel's authentication facilities are made up of "guards" and "providers". Guards define how users are authenticated for each request. For example, Laravel ships with a session guard which maintains state using session storage and cookies.

Providers define how users are retrieved from your persistent storage. Laravel ships with support for retrieving users using Eloquent and the database query builder. However, you are free to define additional providers as needed for your application.

Your application's authentication configuration file is located at config/auth.php. This file contains several well-documented options for tweaking the behavior of Laravel's authentication services.

#### Retrieving The Authenticated User
After installing an authentication starter kit and allowing users to register and authenticate with your application, you will often need to interact with the currently authenticated user. While handling an incoming request, you may access the authenticated user via the Auth facade's user method:
```
use Illuminate\Support\Facades\Auth;
 
// Retrieve the currently authenticated user...
$user = Auth::user();
 
// Retrieve the currently authenticated user's ID...
$id = Auth::id();
```

Alternatively, once a user is authenticated, you may access the authenticated user via an Illuminate\Http\Request instance. Remember, type-hinted classes will automatically be injected into your controller methods. By type-hinting the Illuminate\Http\Request object, you may gain convenient access to the authenticated user from any controller method in your application via the request's user method:
```
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class FlightController extends Controller
{
    /**
     * Update the flight information for an existing flight.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $request->user()
    }
}
```

#### Determining If The Current User Is Authenticated
To determine if the user making the incoming HTTP request is authenticated, you may use the check method on the Auth facade. This method will return true if the user is authenticated:
```
use Illuminate\Support\Facades\Auth;
 
if (Auth::check()) {
    // The user is logged in...
}
```

#### Protecting Routes
Route middleware can be used to only allow authenticated users to access a given route. Laravel ships with an auth middleware, which references the Illuminate\Auth\Middleware\Authenticate class. Since this middleware is already registered in your application's HTTP kernel, all you need to do is attach the middleware to a route definition:
```
Route::get('/flights', function () {
    // Only authenticated users may access this route...
})->middleware('auth');
```

##### Redirecting Unauthenticated Users
When the auth middleware detects an unauthenticated user, it will redirect the user to the login named route. You may modify this behavior by updating the redirectTo function in your application's app/Http/Middleware/Authenticate.php file:
```
/**
 * Get the path the user should be redirected to.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return string
 */
protected function redirectTo($request)
{
    return route('login');
}
```

#### Manually Authenticating Users
You are not required to use the authentication scaffolding included with Laravel's application starter kits. If you choose not to use this scaffolding, you will need to manage user authentication using the Laravel authentication classes directly. Don't worry, it's a cinch!


We will access Laravel's authentication services via the Auth facade, so we'll need to make sure to import the Auth facade at the top of the class. Next, let's check out the attempt method. The attempt method is normally used to handle authentication attempts from your application's "login" form. If authentication is successful, you should regenerate the user's session to prevent session fixation:
```
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput(['email']);
    }
}
```
The attempt method accepts an array of key / value pairs as its first argument. The values in the array will be used to find the user in your database table. So, in the example above, the user will be retrieved by the value of the email column. If the user is found, the hashed password stored in the database will be compared with the password value passed to the method via the array. You should not hash the incoming request's password value, since the framework will automatically hash the value before comparing it to the hashed password in the database. An authenticated session will be started for the user if the two hashed passwords match.

Remember, Laravel's authentication services will retrieve users from your database based on your authentication guard's "provider" configuration. In the default config/auth.php configuration file, the Eloquent user provider is specified and it is instructed to use the App\Models\User model when retrieving users. You may change these values within your configuration file based on the needs of your application.

The attempt method will return true if authentication was successful. Otherwise, false will be returned.

##### Specifying Additional Conditions
If you wish, you may also add extra query conditions to the authentication query in addition to the user's email and password. To accomplish this, we may simply add the query conditions to the array passed to the attempt method. For example, we may verify that the user is marked as "active":
```
if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
    // Authentication was successful...
}
```
 Note In these examples, email is not a required option, it is merely used as an example. You should use whatever column name corresponds to a "username" in your database table

 #### Remembering Users
Many web applications provide a "remember me" checkbox on their login form. If you would like to provide "remember me" functionality in your application, you may pass a boolean value as the second argument to the attempt method.

When this value is true, Laravel will keep the user authenticated indefinitely or until they manually logout. Your users table must include the string remember_token column, which will be used to store the "remember me" token. The users table migration included with new Laravel applications already includes this column:
```
use Illuminate\Support\Facades\Auth;
 
if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
    // The user is being remembered...
}
```

##### Logging Out
To manually log users out of your application, you may use the logout method provided by the Auth facade. This will remove the authentication information from the user's session so that subsequent requests are not authenticated.

In addition to calling the logout method, it is recommended that you invalidate the user's session and regenerate their CSRF token. After logging the user out, you would typically redirect the user to the root of your application:
```
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
/**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
```

##### Invalidating Sessions On Other Devices
Laravel also provides a mechanism for invalidating and "logging out" a user's sessions that are active on other devices without invalidating the session on their current device. This feature is typically utilized when a user is changing or updating their password and you would like to invalidate sessions on other devices while keeping the current device authenticated.

Before getting started, you should make sure that the Illuminate\Session\Middleware\AuthenticateSession middleware is present and un-commented in your App\Http\Kernel class' web middleware group:
```
'web' => [
    // ...
    \Illuminate\Session\Middleware\AuthenticateSession::class,
    // ...
],
```
Then, you may use the logoutOtherDevices method provided by the Auth facade. This method requires the user to confirm their current password, which your application should accept through an input form:
```
use Illuminate\Support\Facades\Auth;
 
Auth::logoutOtherDevices($currentPassword);
When the logoutOtherDevices method is invoked, the user's other sessions will be invalidated entirely, meaning they will be "logged out" of all guards they were previously authenticated by.
```

### Authorization

#### Introduction
In addition to providing built-in authentication services, Laravel also provides a simple way to authorize user actions against a given resource. For example, even though a user is authenticated, they may not be authorized to update or delete certain Eloquent models or database records managed by your application. Laravel's authorization features provide an easy, organized way of managing these types of authorization checks.

Laravel provides two primary ways of authorizing actions: gates and policies. Think of gates and policies like routes and controllers. Gates provide a simple, closure-based approach to authorization while policies, like controllers, group logic around a particular model or resource. In this documentation, we'll explore gates first and then examine policies.

You do not need to choose between exclusively using gates or exclusively using policies when building an application. Most applications will most likely contain some mixture of gates and policies, and that is perfectly fine! Gates are most applicable to actions that are not related to any model or resource, such as viewing an administrator dashboard. In contrast, policies should be used when you wish to authorize an action for a particular model or resource.

### Gates
#### Writing Gates

Gates are a great way to learn the basics of Laravel's authorization features; however, when building robust Laravel applications you should consider using policies to organize your authorization rules.

Gates are simply closures that determine if a user is authorized to perform a given action. Typically, gates are defined within the boot method of the``` App\Providers\AuthServiceProvider ```class using the Gate facade. Gates always receive a user instance as their first argument and may optionally receive additional arguments such as a relevant Eloquent model.


Gates are simply closures that determine if a user is authorized to perform a given action. Typically, gates are defined within the boot method of the App\Providers\AuthServiceProvider class using the Gate facade. Gates always receive a user instance as their first argument and may optionally receive additional arguments such as a relevant Eloquent model.

In this example, we'll define a gate to determine if a user can update a given App\Models\Post model. The gate will accomplish this by comparing the user's id against the user_id of the user that created the post:
```
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
 
/**
 * Register any authentication / authorization services.
 *
 * @return void
 */
public function boot()
{
    $this->registerPolicies();
 
    Gate::define('update-post', function (User $user, Post $post) {
        return $user->id === $post->user_id;
    });
}
```

#### Creating Policies

##### Generating Policies

Policies are classes that organize authorization logic around a particular model or resource. For example, if your application is a blog, you may have a App\Models\Post model and a corresponding App\Policies\PostPolicy to authorize user actions such as creating or updating posts.

You may generate a policy using the make:policy Artisan command. The generated policy will be placed in the app/Policies directory. If this directory does not exist in your application, Laravel will create it for you:

```
php artisan make:policy PostPolicy
```

The make:policy command will generate an empty policy class. If you would like to generate a class with example policy methods related to viewing, creating, updating, and deleting the resource, you may provide a --model option when executing the command:
```
php artisan make:policy PostPolicy --model=Post
```

#### Policy Methods
Once the policy class has been registered, you may add methods for each action it authorizes. For example, let's define an update method on our PostPolicy which determines if a given App\Models\User can update a given App\Models\Post instance.

The update method will receive a User and a Post instance as its arguments, and should return true or false indicating whether the user is authorized to update the given Post. So, in this example, we will verify that the user's id matches the user_id on the post:
```
<?php
 
namespace App\Policies;
 
use App\Models\Post;
use App\Models\User;
 
class PostPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return bool
     */
    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}

```


### Encryption

#### Introduction
Laravel's encryption services provide a simple, convenient interface for encrypting and decrypting text via OpenSSL using AES-256 and AES-128 encryption. All of Laravel's encrypted values are signed using a message authentication code (MAC) so that their underlying value can not be modified or tampered with once encrypted.

#### Configuration
Before using Laravel's encrypter, you must set the key configuration option in your config/app.php configuration file. This configuration value is driven by the APP_KEY environment variable. You should use the php artisan key:generate command to generate this variable's value since the key:generate command will use PHP's secure random bytes generator to build a cryptographically secure key for your application. Typically, the value of the APP_KEY environment variable will be generated for you during Laravel's installation.

##### Encrypting A Value
You may encrypt a value using the encryptString method provided by the Crypt facade. All encrypted values are encrypted using OpenSSL and the AES-256-CBC cipher. Furthermore, all encrypted values are signed with a message authentication code (MAC). The integrated message authentication code will prevent the decryption of any values that have been tampered with by malicious users:
```
 $name ="dhiraj";
    $Encryptname = Crypt::encryptString($name);
    echo $name."<br>";
     echo $Encryptname."<br>";

```

##### Decrypting A Value
You may decrypt values using the decryptString method provided by the Crypt facade. If the value can not be properly decrypted, such as when the message authentication code is invalid, an Illuminate\Contracts\Encryption\DecryptException will be thrown:


```
 $decryName = Crypt::decryptString($Encryptname);
echo $decryName;
```

### Hashing

#### Introduction
The Laravel Hash facade provides secure Bcrypt and Argon2 hashing for storing user passwords. If you are using one of the Laravel application starter kits, Bcrypt will be used for registration and authentication by default.

Bcrypt is a great choice for hashing passwords because its "work factor" is adjustable, which means that the time it takes to generate a hash can be increased as hardware power increases. When hashing passwords, slow is good. The longer an algorithm takes to hash a password, the longer it takes malicious users to generate "rainbow tables" of all possible string hash values that may be used in brute force attacks against applications.

#### Configuration
The default hashing driver for your application is configured in your application's config/hashing.php configuration file. There are currently several supported drivers: Bcrypt and Argon2 (Argon2i and Argon2id variants).

##### Basic Usage
###### Hashing Passwords
You may hash a password by calling the make method on the Hash facade:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
 
class PasswordController extends Controller
{
    /**
     * Update the password for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Validate the new password length...
 
        $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();
    }
}
```

##### Adjusting The Bcrypt Work Factor
If you are using the Bcrypt algorithm, the make method allows you to manage the work factor of the algorithm using the rounds option; however, the default work factor managed by Laravel is acceptable for most applications:
```
$hashed = Hash::make('password', [
    'rounds' => 12,
]);
```
##### Adjusting The Argon2 Work Factor
If you are using the Argon2 algorithm, the make method allows you to manage the work factor of the algorithm using the memory, time, and threads options; however, the default values managed by Laravel are acceptable for most applications:
```
$hashed = Hash::make('password', [
    'memory' => 1024,
    'time' => 2,
    'threads' => 2,
]);
```

#### Verifying That A Password Matches A Hash
The check method provided by the Hash facade allows you to verify that a given plain-text string corresponds to a given hash:
```
if (Hash::check('plain-text', $hashedPassword)) {
    // The passwords match...
}
```

#### Determining If A Password Needs To Be Rehashed
The needsRehash method provided by the Hash facade allows you to determine if the work factor used by the hasher has changed since the password was hashed. Some applications choose to perform this check during the application's authentication process:
```
if (Hash::needsRehash($hashed)) {
    $hashed = Hash::make('plain-text');
}
```

### Resetting Passwords

#### Introduction
Most web applications provide a way for users to reset their forgotten passwords. Rather than forcing you to re-implement this by hand for every application you create, Laravel provides convenient services for sending password reset links and secure resetting passwords.



## Database

### Database: Getting Started

#### Introduction
Almost every modern web application interacts with a database. Laravel makes interacting with databases extremely simple across a variety of supported databases using raw SQL, a fluent query builder, and the Eloquent ORM. Currently, Laravel provides first-party support for five databases:

MariaDB 10.2+ (Version Policy)
MySQL 5.7+ (Version Policy)
PostgreSQL 9.6+ (Version Policy)
SQLite 3.8.8+
SQL Server 2017+ (Version Policy)

#### Configuration
The configuration for Laravel's database services is located in your application's config/database.php configuration file
In this file, you may define all of your database connections, as well as specify which connection should be used by default. Most of the configuration options within this file are driven by the values of your application's environment variables. Examples for most of Laravel's supported database systems are provided in this file.

#### Running SQL Queries
Once you have configured your database connection, you may run queries using the DB facade. The DB facade provides methods for each type of query: select, update, insert, delete, and statement.

##### Running A Select Query
To run a basic SELECT query, you may use the select method on the DB facade:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users where active = ?', [1]);
 
        return view('user.index', ['users' => $users]);
    }
}
```

#### Using Named Bindings
Instead of using ? to represent your parameter bindings, you may execute a query using named bindings:
```
$results = DB::select('select * from users where id = :id', ['id' => 1]);
```
##### Running An Insert Statement
To execute an insert statement, you may use the insert method on the DB facade. Like select, this method accepts the SQL query as its first argument and bindings as its second argument:
```
use Illuminate\Support\Facades\DB;
 
DB::insert('insert into users (id, name) values (?, ?)', [1, 'Marc']);
```
#### Running An Update Statement
The update method should be used to update existing records in the database. The number of rows affected by the statement is returned by the method:
```
use Illuminate\Support\Facades\DB;
 
$affected = DB::update(
    'update users set votes = 100 where name = ?',
    ['Anita']
);
```
#### Running A Delete Statement
The delete method should be used to delete records from the database. Like update, the number of rows affected will be returned by the method:
```
use Illuminate\Support\Facades\DB;
 
$deleted = DB::delete('delete from users');
```

#### Running A General Statement
Some database statements do not return any value. For these types of operations, you may use the statement method on the DB facade:
```
DB::statement('drop table users');
```

#### Running An Unprepared Statement
Sometimes you may want to execute an SQL statement without binding any values. You may use the DB facade's unprepared method to accomplish this:
```
DB::unprepared('update users set votes = 100 where name = "Dries"');
```

Since unprepared statements do not bind parameters, they may be vulnerable to SQL injection. You should never allow user controlled values within an unprepared statement.

### Database: Query Builder

#### Introduction
Laravel's database query builder provides a convenient, fluent interface to creating and running database queries. It can be used to perform most database operations in your application and works perfectly with all of Laravel's supported database systems.

The Laravel query builder uses PDO parameter binding to protect your application against SQL injection attacks. There is no need to clean or sanitize strings passed to the query builder as query bindings.


PDO does not support binding column names. Therefore, you should never allow user input to dictate the column names referenced by your queries, including "order by" columns.

#### Running Database Queries

##### Running Database Queries
Retrieving All Rows From A Table
You may use the table method provided by the DB facade to begin a query. The table method returns a fluent query builder instance for the given table, allowing you to chain more constraints onto the query and then finally retrieve the results of the query using the get method:
```
<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
 
        return view('user.index', ['users' => $users]);
    }
}
```

The get method returns an Illuminate\Support\Collection instance containing the results of the query where each result is an instance of the PHP stdClass object. You may access each column's value by accessing the column as a property of the object:
```
use Illuminate\Support\Facades\DB;
 
$users = DB::table('users')->get();
 
foreach ($users as $user) {
    echo $user->name;
}

```

Retrieving A Single Row / Column From A Table
If you just need to retrieve a single row from a database table, you may use the DB facade's first method. This method will return a single stdClass object:
```
$user = DB::table('users')->where('name', 'John')->first();
 
return $user->email;
```

If you don't need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:
```
$email = DB::table('users')->where('name', 'John')->value('email');
To retrieve a single row by its id column value, use the find method:

$user = DB::table('users')->find(3);
```

##### Chunking Results
If you need to work with thousands of database records, consider using the chunk method provided by the DB facade. This method retrieves a small chunk of results at a time and feeds each chunk into a closure for processing. For example, let's retrieve the entire users table in chunks of 100 records at a time:
```
use Illuminate\Support\Facades\DB;
 
DB::table('users')->orderBy('id')->chunk(100, function ($users) {
    foreach ($users as $user) {
        //
    }
});
You may stop further chunks from being processed by returning false from the closure:

DB::table('users')->orderBy('id')->chunk(100, function ($users) {
    // Process the records...
 
    return false;
});
```

#### Aggregates
The query builder also provides a variety of methods for retrieving aggregate values like count, max, min, avg, and sum. You may call any of these methods after constructing your query:
```
use Illuminate\Support\Facades\DB;
 
$users = DB::table('users')->count();
 
$price = DB::table('orders')->max('price');
Of course, you may combine these methods with other clauses to fine-tune how your aggregate value is calculated:

$price = DB::table('orders')
                ->where('finalized', 1)
                ->avg('price');
```


#### Determining If Records Exist
Instead of using the count method to determine if any records exist that match your query's constraints, you may use the exists and doesntExist methods:
```
if (DB::table('orders')->where('finalized', 1)->exists()) {
    // ...
}
 
if (DB::table('orders')->where('finalized', 1)->doesntExist()) {
    // ...
}

```

#### Select Statements
Specifying A Select Clause
You may not always want to select all columns from a database table. Using the select method, you can specify a custom "select" clause for the query:
```
use Illuminate\Support\Facades\DB;
 
$users = DB::table('users')
            ->select('name', 'email as user_email')
            ->get();
The distinct method allows you to force the query to return distinct results:

$users = DB::table('users')->distinct()->get();
If you already have a query builder instance and you wish to add a column to its existing select clause, you may use the addSelect method:

$query = DB::table('users')->select('name');
 
$users = $query->addSelect('age')->get();

```

#### Joins
##### Inner Join Clause
The query builder may also be used to add join clauses to your queries. To perform a basic "inner join", you may use the join method on a query builder instance. The first argument passed to the join method is the name of the table you need to join to, while the remaining arguments specify the column constraints for the join. You may even join multiple tables in a single query:

```
use Illuminate\Support\Facades\DB;
 
$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();

```

Left Join / Right Join Clause
If you would like to perform a "left join" or "right join" instead of an "inner join", use the leftJoin or rightJoin methods. These methods have the same signature as the join method:
```
$users = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
 
$users = DB::table('users')
            ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();

```

#### Basic Where Clauses
##### Where Clauses
You may use the query builder's where method to add "where" clauses to the query. The most basic call to the where method requires three arguments. The first argument is the name of the column. The second argument is an operator, which can be any of the database's supported operators. The third argument is the value to compare against the column's value.

For example, the following query retrieves users where the value of the votes column is equal to 100 and the value of the age column is greater than 35:
```
$users = DB::table('users')
                ->where('votes', '=', 100)
                ->where('age', '>', 35)
                ->get();

```

For convenience, if you want to verify that a column is = to a given value, you may pass the value as the second argument to the where method. Laravel will assume you would like to use the = operator:
```
$users = DB::table('users')->where('votes', 100)->get();
```

As previously mentioned, you may use any operator that is supported by your database system:
```
$users = DB::table('users')
                ->where('votes', '>=', 100)
                ->get();
 
$users = DB::table('users')
                ->where('votes', '<>', 100)
                ->get();
 
$users = DB::table('users')
                ->where('name', 'like', 'T%')
                ->get();

```
You may also pass an array of conditions to the where function. Each element of the array should be an array containing the three arguments typically passed to the where method:
```
$users = DB::table('users')->where([
    ['status', '=', '1'],
    ['subscribed', '<>', '1'],
])->get();
```

Or Where Clauses
When chaining together calls to the query builder's where method, the "where" clauses will be joined together using the and operator. However, you may use the orWhere method to join a clause to the query using the or operator. The orWhere method accepts the same arguments as the where method:
```
$users = DB::table('users')
                    ->where('votes', '>', 100)
                    ->orWhere('name', 'John')
                    ->get();

```

##### whereNotBetween / orWhereNotBetween

The whereNotBetween method verifies that a column's value lies outside of two values:
```
$users = DB::table('users')
                    ->whereNotBetween('votes', [1, 100])
                    ->get();

```                    
###### whereIn / whereNotIn / orWhereIn / orWhereNotIn

The whereIn method verifies that a given column's value is contained within the given array:
```
$users = DB::table('users')
                    ->whereIn('id', [1, 2, 3])
                    ->get();

```

##### The whereNotIn method verifies that the given column's value is not contained in the given array:
```
$users = DB::table('users')
                    ->whereNotIn('id', [1, 2, 3])
                    ->get();
```

If you are adding a large array of integer bindings to your query, the whereIntegerInRaw or whereIntegerNotInRaw methods may be used to greatly reduce your memory usage.

###### whereNull / whereNotNull / orWhereNull / orWhereNotNull

The whereNull method verifies that the value of the given column is NULL:
```
$users = DB::table('users')
                ->whereNull('updated_at')
                ->get();

```                
The whereNotNull method verifies that the column's value is not NULL:
```
$users = DB::table('users')
                ->whereNotNull('updated_at')
                ->get();
```

###### whereDate / whereMonth / whereDay / whereYear / whereTime

The whereDate method may be used to compare a column's value against a date:
```
$users = DB::table('users')
                ->whereDate('created_at', '2016-12-31')
                ->get();

```
The whereMonth method may be used to compare a column's value against a specific month:
```
$users = DB::table('users')
                ->whereMonth('created_at', '12')
                ->get();
```
The whereDay method may be used to compare a column's value against a specific day of the month:
```
$users = DB::table('users')
                ->whereDay('created_at', '31')
                ->get();

```
The whereYear method may be used to compare a column's value against a specific year:
```
$users = DB::table('users')
                ->whereYear('created_at', '2016')
                ->get();
```
The whereTime method may be used to compare a column's value against a specific time:
```
$users = DB::table('users')
                ->whereTime('created_at', '=', '11:20:45')
                ->get();

```

##### whereColumn / orWhereColumn

The whereColumn method may be used to verify that two columns are equal:
```
$users = DB::table('users')
                ->whereColumn('first_name', 'last_name')
                ->get();

```
You may also pass a comparison operator to the whereColumn method:
```
$users = DB::table('users')
                ->whereColumn('updated_at', '>', 'created_at')
                ->get();

```  
You may also pass an array of column comparisons to the whereColumn method. These conditions will be joined using the and operator:
```
$users = DB::table('users')
                ->whereColumn([
                    ['first_name', '=', 'last_name'],
                    ['updated_at', '>', 'created_at'],
                ])->get();

```

#### Ordering, Grouping, Limit & Offset

##### Ordering
The orderBy Method
The orderBy method allows you to sort the results of the query by a given column. The first argument accepted by the orderBy method should be the column you wish to sort by, while the second argument determines the direction of the sort and may be either asc or desc:
```
$users = DB::table('users')
                ->orderBy('name', 'desc')
                ->get();

```
To sort by multiple columns, you may simply invoke orderBy as many times as necessary:
```
$users = DB::table('users')
                ->orderBy('name', 'desc')
                ->orderBy('email', 'asc')
                ->get();
```

##### Random Ordering
The inRandomOrder method may be used to sort the query results randomly. For example, you may use this method to fetch a random user:
```
$randomUser = DB::table('users')
                ->inRandomOrder
```

##### Removing Existing Orderings
The reorder method removes all of the "order by" clauses that have previously been applied to the query:
```
$query = DB::table('users')->orderBy('name');
 
$unorderedUsers = $query->reorder()->get();
```

##### Grouping
The groupBy & having Methods
As you might expect, the groupBy and having methods may be used to group the query results. The having method's signature is similar to that of the where method:
```
$users = DB::table('users')
                ->groupBy('account_id')
                ->having('account_id', '>', 100)
                ->get();

```

##### Limit & Offset
The skip & take Methods
You may use the skip and take methods to limit the number of results returned from the query or to skip a given number of results in the query:
```
$users = DB::table('users')->skip(10)->take(5)->get();
```
Alternatively, you may use the limit and offset methods. These methods are functionally equivalent to the take and skip methods, respectively:
```
$users = DB::table('users')
                ->offset(10)
                ->limit(5)
                ->get();

```

##### Insert Statements
The query builder also provides an insert method that may be used to insert records into the database table. The insert method accepts an array of column names and values:
```
DB::table('users')->insert([
    'email' => 'kayla@example.com',
    'votes' => 0
]);

```
You may insert several records at once by passing an array of arrays. Each array represents a record that should be inserted into the table:
```
DB::table('users')->insert([
    ['email' => 'picard@example.com', 'votes' => 0],
    ['email' => 'janeway@example.com', 'votes' => 0],
]);

```

The insertOrIgnore method will ignore errors while inserting records into the database:
```
DB::table('users')->insertOrIgnore([
    ['id' => 1, 'email' => 'sisko@example.com'],
    ['id' => 2, 'email' => 'archer@example.com'],
]);

```

##### Update Statements
In addition to inserting records into the database, the query builder can also update existing records using the update method. The update method, like the insert method, accepts an array of column and value pairs indicating the columns to be updated. The update method returns the number of affected rows. You may constrain the update query using where clauses:
```
$affected = DB::table('users')
              ->where('id', 1)
              ->update(['votes' => 1]);

```

#### Update Or Insert
Sometimes you may want to update an existing record in the database or create it if no matching record exists. In this scenario, the updateOrInsert method may be used. The updateOrInsert method accepts two arguments: an array of conditions by which to find the record, and an array of column and value pairs indicating the columns to be updated.

The updateOrInsert method will attempt to locate a matching database record using the first argument's column and value pairs. If the record exists, it will be updated with the values in the second argument. If the record can not be found, a new record will be inserted with the merged attributes of both arguments:
```
DB::table('users')
    ->updateOrInsert(
        ['email' => 'john@example.com', 'name' => 'John'],
        ['votes' => '2']
    );
```

#### Debugging
You may use the dd and dump methods while building a query to dump the current query bindings and SQL. The dd method will display the debug information and then stop executing the request. The dump method will display the debug information but allow the request to continue executing:


### Database: Migrations

#### Introduction
Migrations are like version control for your database, allowing your team to define and share the application's database schema definition. If you have ever had to tell a teammate to manually add a column to their local database schema after pulling in your changes from source control, you've faced the problem that database migrations solve.

The Laravel Schema facade provides database agnostic support for creating and manipulating tables across all of Laravel's supported database systems. Typically, migrations will use this facade to create and modify database tables and columns.


#### Generating Migrations
You may use the make:migration Artisan command to generate a database migration. The new migration will be placed in your database/migrations directory. Each migration filename contains a timestamp that allows Laravel to determine the order of the migrations:
```
php artisan make:migration create_flights_table
```

#### Running Migrations
To run all of your outstanding migrations, execute the migrate Artisan command:
```
php artisan migrate
```
If you would like to see which migrations have run thus far, you may use the migrate:status Artisan command:
```
php artisan migrate:status
```

##### Forcing Migrations To Run In Production
Some migration operations are destructive, which means they may cause you to lose data. In order to protect you from running these commands against your production database, you will be prompted for confirmation before the commands are executed. To force the commands to run without a prompt, use the --force flag:
```
php artisan migrate --force
```

#### Rolling Back Migrations
To roll back the latest migration operation, you may use the rollback Artisan command. This command rolls back the last "batch" of migrations, which may include multiple migration files:
```
php artisan migrate:rollback
```

You may roll back a limited number of migrations by providing the step option to the rollback command. For example, the following command will roll back the last five migrations:
```
php artisan migrate:rollback --step=5
```
The migrate:reset command will roll back all of your application's migrations:
```
php artisan migrate:reset
```

#### Roll Back & Migrate Using A Single Command
The migrate:refresh command will roll back all of your migrations and then execute the migrate command. This command effectively re-creates your entire database:
```
php artisan migrate:refresh
 ```
#### Refresh the database and run all database seeds...
```
php artisan migrate:refresh --seed
```

#### Drop All Tables & Migrate
The migrate:fresh command will drop all tables from the database and then execute the migrate command:

php artisan migrate:fresh
 
php artisan migrate:fresh --seed

### Database: Seeding

#### Introduction
Laravel includes the ability to seed your database with data using seed classes. All seed classes are stored in the database/seeders directory. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.

#### Writing Seeders
To generate a seeder, execute the make:seeder Artisan command. All seeders generated by the framework will be placed in the database/seeders directory:
```
php artisan make:seeder UserSeeder
```

A seeder class only contains one method by default: run. This method is called when the db:seed Artisan command is executed. Within the run method, you may insert data into your database however you wish. You may use the query builder to manually insert data or you may use Eloquent model factories.

As an example, let's modify the default DatabaseSeeder class and add a database insert statement to the run method:
```
<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
```

#### Calling Additional Seeders
Within the DatabaseSeeder class, you may use the call method to execute additional seed classes. Using the call method allows you to break up your database seeding into multiple files so that no single seeder class becomes too large. The call method accepts an array of seeder classes that should be executed:
```
/**
 * Run the database seeders.
 *
 * @return void
 */
public function run()
{
    $this->call([
        UserSeeder::class,
        PostSeeder::class,
        CommentSeeder::class,
    ]);
}
```

#### Running Seeders
You may execute the db:seed Artisan command to seed your database. By default, the db:seed command runs the Database\Seeders\DatabaseSeeder class, which may in turn invoke other seed classes. However, you may use the --class option to specify a specific seeder class to run individually:
```
php artisan db:seed
 
php artisan db:seed --class=UserSeeder
```
You may also seed your database using the migrate:fresh command in combination with the --seed option, which will drop all tables and re-run all of your migrations. This command is useful for completely re-building your database:
```
php artisan migrate:fresh --seed
```

##### Forcing Seeders To Run In Production
Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database, you will be prompted for confirmation before the seeders are executed in the production environment. To force the seeders to run without a prompt, use the --force flag:
```
php artisan db:seed --force
```

### Redis
#### Introduction
Redis is an open source, advanced key-value store. It is often referred to as a data structure server since keys can contain strings, hashes, lists, sets, and sorted sets.

Before using Redis with Laravel, we encourage you to install and use the phpredis PHP extension via PECL. The extension is more complex to install compared to "user-land" PHP packages but may yield better performance for applications that make heavy use of Redis. If you are using Laravel Sail, this extension is already installed in your application's Docker container.

If you are unable to install the phpredis extension, you may install the predis/predis package via Composer. Predis is a Redis client written entirely in PHP and does not require any additional extensions:

composer require predis/predis

### Eloquent

#### Eloquent: Getting Started

#### Introduction
Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table. In addition to retrieving records from the database table, Eloquent models allow you to insert, update, and delete records from the table as well.

#### Generating Model Classes
To get started, let's create an Eloquent model. Models typically live in the app\Models directory and extend the Illuminate\Database\Eloquent\Model class. You may use the make:model Artisan command to generate a new model:
```
php artisan make:model Flight
```

If you would like to generate a database migration when you generate the model, you may use the --migration or -m option:
```
php artisan make:model Flight --migration
```
You may generate various other types of classes when generating a model, such as factories, seeders, policies, controllers, and form requests. In addition, these options may be combined to create multiple classes at once:

```
# Generate a model and a FlightFactory class...
php artisan make:model Flight --factory
php artisan make:model Flight -f
 
# Generate a model and a FlightSeeder class...
php artisan make:model Flight --seed
php artisan make:model Flight -s
 
# Generate a model and a FlightController class...
php artisan make:model Flight --controller
php artisan make:model Flight -c
 
# Generate a model, FlightController resource class, and form request classes...
php artisan make:model Flight --controller --resource --requests
php artisan make:model Flight -crR
 
# Generate a model and a FlightPolicy class...
php artisan make:model Flight --policy
 
# Generate a model and a migration, factory, seeder, and controller...
php artisan make:model Flight -mfsc
 
# Shortcut to generate a model, migration, factory, seeder, policy, controller, and form requests...
php artisan make:model Flight --all
 
# Generate a pivot model...
php artisan make:model Member --pivot
```

#### Eloquent Model Conventions
Models generated by the make:model command will be placed in the app/Models directory. Let's examine a basic model class and discuss some of Eloquent's key conventions:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Flight extends Model
{
    //
}

```

#### Retrieving Models
Once you have created a model and its associated database table, you are ready to start retrieving data from your database. You can think of each Eloquent model as a powerful query builder allowing you to fluently query the database table associated with the model. The model's all method will retrieve all of the records from the model's associated database table:
```
use App\Models\Flight;
 
foreach (Flight::all() as $flight) {
    echo $flight->name;
}
```
##### Building Queries
The Eloquent all method will return all of the results in the model's table. However, since each Eloquent model serves as a query builder, you may add additional constraints to queries and then invoke the get method to retrieve the results:
```
$flights = Flight::where('active', 1)
               ->orderBy('name')
               ->take(10)
               ->get();

```

##### Retrieving Single Models / Aggregates
In addition to retrieving all of the records matching a given query, you may also retrieve single records using the find, first, or firstWhere methods. Instead of returning a collection of models, these methods return a single model instance:
```
use App\Models\Flight;
 
// Retrieve a model by its primary key...
$flight = Flight::find(1);
 
// Retrieve the first model matching the query constraints...
$flight = Flight::where('active', 1)->first();
 
// Alternative to retrieving the first model matching the query constraints...
$flight = Flight::firstWhere('active', 1);
```


#### Updates
The save method may also be used to update models that already exist in the database. To update a model, you should retrieve it and set any attributes you wish to update. Then, you should call the model's save method. Again, the updated_at timestamp will automatically be updated, so there is no need to manually set its value:
```
use App\Models\Flight;
 
$flight = Flight::find(1);
 
$flight->name = 'Paris to London';
 
$flight->save();
```

####  Mass Updates
Updates can also be performed against models that match a given query. In this example, all flights that are active and have a destination of San Diego will be marked as delayed:
```
Flight::where('active', 1)
      ->where('destination', 'San Diego')
      ->update(['delayed' => 1]);
The update method expects an array of column and value pairs representing the columns that should be updated. The update method returns the number of affected rows.

```
#### Mass Assignment
You may use the create method to "save" a new model using a single PHP statement. The inserted model instance will be returned to you by the method:
```
use App\Models\Flight;
 
$flight = Flight::create([
    'name' => 'London to Paris',
]);
```

However, before using the create method, you will need to specify either a fillable or guarded property on your model class. These properties are required because all Eloquent models are protected against mass assignment vulnerabilities by default.

A mass assignment vulnerability occurs when a user passes an unexpected HTTP request field and that field changes a column in your database that you did not expect. For example, a malicious user might send an is_admin parameter through an HTTP request, which is then passed to your model's create method, allowing the user to escalate themselves to an administrator.

So, to get started, you should define which model attributes you want to make mass assignable. You may do this using the $fillable property on the model. For example, let's make the name attribute of our Flight model mass assignable:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Flight extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}

```

#### Deleting Models
To delete a model, you may call the delete method on the model instance:
```
use App\Models\Flight;
 
$flight = Flight::find(1);
 
$flight->delete();
You may call the truncate method to delete all of the model's associated database records. The truncate operation will also reset any auto-incrementing IDs on the model's associated table:

Flight::truncate();
```

#### Deleting Models Using Queries
Of course, you may build an Eloquent query to delete all models matching your query's criteria. In this example, we will delete all flights that are marked as inactive. Like mass updates, mass deletes will not dispatch model events for the models that are deleted:
```
$deleted = Flight::where('active', 0)->delete();
```

When executing a mass delete statement via Eloquent, the deleting and deleted model events will not be dispatched for the deleted models. This is because the models are never actually retrieved when executing the delete statement.


#### Soft Deleting
In addition to actually removing records from your database, Eloquent can also "soft delete" models. When models are soft deleted, they are not actually removed from your database. Instead, a deleted_at attribute is set on the model indicating the date and time at which the model was "deleted". To enable soft deletes for a model, add the Illuminate\Database\Eloquent\SoftDeletes trait to the model:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Flight extends Model
{
    use SoftDeletes;
}
```

You should also add the deleted_at column to your database table. The Laravel schema builder contains a helper method to create this column:

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
Schema::table('flights', function (Blueprint $table) {
    $table->softDeletes();
});
 
Schema::table('flights', function (Blueprint $table) {
    $table->dropSoftDeletes();
});


Now, when you call the delete method on the model, the deleted_at column will be set to the current date and time. However, the model's database record will be left in the table. When querying a model that uses soft deletes, the soft deleted models will automatically be excluded from all query results.

To determine if a given model instance has been soft deleted, you may use the trashed method:
```
if ($flight->trashed()) {
    //
}
```

#### Restoring Soft Deleted Models
Sometimes you may wish to "un-delete" a soft deleted model. To restore a soft deleted model, you may call the restore method on a model instance. The restore method will set the model's deleted_at column to null:
```
$flight->restore();
```
You may also use the restore method in a query to restore multiple models. Again, like other "mass" operations, this will not dispatch any model events for the models that are restored:
```
Flight::withTrashed()
        ->where('airline_id', 1)
        ->restore();

```

##### Permanently Deleting Models
Sometimes you may need to truly remove a model from your database. You may use the forceDelete method to permanently remove a soft deleted model from the database table:
```
$flight->forceDelete();

```
### Eloquent: Relationships
#### Introduction
Database tables are often related to one another. For example, a blog post may have many comments or an order could be related to the user who placed it. Eloquent makes managing and working with these relationships easy, and supports a variety of common relationships:
```
One To One
One To Many
Many To Many
Has One Through
Has Many Through
One To One (Polymorphic)
One To Many (Polymorphic)
Many To Many (Polymorphic)
```
#### Defining Relationships
Eloquent relationships are defined as methods on your Eloquent model classes. Since relationships also serve as powerful query builders, defining relationships as methods provides powerful method chaining and querying capabilities. For example, we may chain additional query constraints on this posts relationship:
```
$user->posts()->where('active', 1)->get();
```
But, before diving too deep into using relationships, let's learn how to define each type of relationship supported by Eloquent.


##### One To One
A one-to-one relationship is a very basic type of database relationship. For example, a User model might be associated with one Phone model. To define this relationship, we will place a phone method on the User model. The phone method should call the hasOne method and return its result. The hasOne method is available to your model via the model's Illuminate\Database\Eloquent\Model base class:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class User extends Model
{
    /**
     * Get the phone associated with the user.
     */
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}
```
The first argument passed to the hasOne method is the name of the related model class. Once the relationship is defined, we may retrieve the related record using Eloquent's dynamic properties. Dynamic properties allow you to access relationship methods as if they were properties defined on the model:
```
$phone = User::find(1)->phone;
```


Eloquent determines the foreign key of the relationship based on the parent model name. In this case, the Phone model is automatically assumed to have a user_id foreign key. If you wish to override this convention, you may pass a second argument to the hasOne method:
```
return $this->hasOne(Phone::class, 'foreign_key');
```
Additionally, Eloquent assumes that the foreign key should have a value matching the primary key column of the parent. In other words, Eloquent will look for the value of the user's id column in the user_id column of the Phone record. If you would like the relationship to use a primary key value other than id or your model's $primaryKey property, you may pass a third argument to the hasOne method:
```
return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
```

##### Defining The Inverse Of The Relationship
So, we can access the Phone model from our User model. Next, let's define a relationship on the Phone model that will let us access the user that owns the phone. We can define the inverse of a hasOne relationship using the belongsTo method:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Phone extends Model
{
    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
```
When invoking the user method, Eloquent will attempt to find a User model that has an id which matches the user_id column on the Phone model.

Eloquent determines the foreign key name by examining the name of the relationship method and suffixing the method name with _id. So, in this case, Eloquent assumes that the Phone model has a user_id column. However, if the foreign key on the Phone model is not user_id, you may pass a custom key name as the second argument to the belongsTo method:
```
/**
 * Get the user that owns the phone.
 */
public function user()
{
    return $this->belongsTo(User::class, 'foreign_key');
}
```
If the parent model does not use id as its primary key, or you wish to find the associated model using a different column, you may pass a third argument to the belongsTo method specifying the parent table's custom key:
```
/**
 * Get the user that owns the phone.
 */
public function user()
{
    return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
}
```

#### One To Many
A one-to-many relationship is used to define relationships where a single model is the parent to one or more child models. For example, a blog post may have an infinite number of comments. Like all other Eloquent relationships, one-to-many relationships are defined by defining a method on your Eloquent model:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Post extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
```

Remember, Eloquent will automatically determine the proper foreign key column for the Comment model. By convention, Eloquent will take the "snake case" name of the parent model and suffix it with _id. So, in this example, Eloquent will assume the foreign key column on the Comment model is post_id.


Once the relationship method has been defined, we can access the collection of related comments by accessing the comments property. Remember, since Eloquent provides "dynamic relationship properties", we can access relationship methods as if they were defined as properties on the model:

```
use App\Models\Post;
 
$comments = Post::find(1)->comments;
 
foreach ($comments as $comment) {
    //
}
```
Since all relationships also serve as query builders, you may add further constraints to the relationship query by calling the comments method and continuing to chain conditions onto the query:
```
$comment = Post::find(1)->comments()
                    ->where('title', 'foo')
                    ->first();

```
Like the hasOne method, you may also override the foreign and local keys by passing additional arguments to the hasMany method:
```
return $this->hasMany(Comment::class, 'foreign_key');
 
return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
```

#### One To Many (Inverse) / Belongs To
Now that we can access all of a post's comments, let's define a relationship to allow a comment to access its parent post. To define the inverse of a hasMany relationship, define a relationship method on the child model which calls the belongsTo method:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Comment extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
```
Once the relationship has been defined, we can retrieve a comment's parent post by accessing the post "dynamic relationship property":
```
use App\Models\Comment;
 
$comment = Comment::find(1);
 
return $comment->post->title;
```
In the example above, Eloquent will attempt to find a Post model that has an id which matches the post_id column on the Comment model.

Eloquent determines the default foreign key name by examining the name of the relationship method and suffixing the method name with a _ followed by the name of the parent model's primary key column. So, in this example, Eloquent will assume the Post model's foreign key on the comments table is post_id.

However, if the foreign key for your relationship does not follow these conventions, you may pass a custom foreign key name as the second argument to the belongsTo method:

```
/**
 * Get the post that owns the comment.
 */
public function post()
{
    return $this->belongsTo(Post::class, 'foreign_key');
}
```
If your parent model does not use id as its primary key, or you wish to find the associated model using a different column, you may pass a third argument to the belongsTo method specifying your parent table's custom key:
```
/**
 * Get the post that owns the comment.
 */
public function post()
{
    return $this->belongsTo(Post::class, 'foreign_key', 'owner_key');
}
```
##### Default Models
The belongsTo, hasOne, hasOneThrough, and morphOne relationships allow you to define a default model that will be returned if the given relationship is null. This pattern is often referred to as the Null Object pattern and can help remove conditional checks in your code. In the following example, the user relation will return an empty App\Models\User model if no user is attached to the Post model:
```
/**
 * Get the author of the post.
 */
public function user()
{
    return $this->belongsTo(User::class)->withDefault();
}
```
To populate the default model with attributes, you may pass an array or closure to the withDefault method:
```
/**
 * Get the author of the post.
 */
public function user()
{
    return $this->belongsTo(User::class)->withDefault([
        'name' => 'Guest Author',
    ]);
}
 
/**
 * Get the author of the post.
 */
public function user()
{
    return $this->belongsTo(User::class)->withDefault(function ($user, $post) {
        $user->name = 'Guest Author';
    });
}
```
#### Has One Of Many
Sometimes a model may have many related models, yet you want to easily retrieve the "latest" or "oldest" related model of the relationship. For example, a User model may be related to many Order models, but you want to define a convenient way to interact with the most recent order the user has placed. You may accomplish this using the hasOne relationship type combined with the ofMany methods:
```
/**
 * Get the user's most recent order.
 */
public function latestOrder()
{
    return $this->hasOne(Order::class)->latestOfMany();
}
```
Likewise, you may define a method to retrieve the "oldest", or first, related model of a relationship:
```
/**
 * Get the user's oldest order.
 */
public function oldestOrder()
{
    return $this->hasOne(Order::class)->oldestOfMany();
}
```
By default, the latestOfMany and oldestOfMany methods will retrieve the latest or oldest related model based on the model's primary key, which must be sortable. However, sometimes you may wish to retrieve a single model from a larger relationship using a different sorting criteria.

For example, using the ofMany method, you may retrieve the user's most expensive order. The ofMany method accepts the sortable column as its first argument and which aggregate function (min or max) to apply when querying for the related model:
```
/**
 * Get the user's largest order.
 */
public function largestOrder()
{
    return $this->hasOne(Order::class)->ofMany('price', 'max');
}
```

#### Has One Of Many
Sometimes a model may have many related models, yet you want to easily retrieve the "latest" or "oldest" related model of the relationship. For example, a User model may be related to many Order models, but you want to define a convenient way to interact with the most recent order the user has placed. You may accomplish this using the hasOne relationship type combined with the ofMany methods:
```
/**
 * Get the user's most recent order.
 */
public function latestOrder()
{
    return $this->hasOne(Order::class)->latestOfMany();
}
```
Likewise, you may define a method to retrieve the "oldest", or first, related model of a relationship:
```
/**
 * Get the user's oldest order.
 */
public function oldestOrder()
{
    return $this->hasOne(Order::class)->oldestOfMany();
}
```
By default, the latestOfMany and oldestOfMany methods will retrieve the latest or oldest related model based on the model's primary key, which must be sortable. However, sometimes you may wish to retrieve a single model from a larger relationship using a different sorting criteria.

For example, using the ofMany method, you may retrieve the user's most expensive order. The ofMany method accepts the sortable column as its first argument and which aggregate function (min or max) to apply when querying for the related model:
```
/**
 * Get the user's largest order.
 */
public function largestOrder()
{
    return $this->hasOne(Order::class)->ofMany('price', 'max');
}
```

#### Has One Through
The "has-one-through" relationship defines a one-to-one relationship with another model. However, this relationship indicates that the declaring model can be matched with one instance of another model by proceeding through a third model.

For example, in a vehicle repair shop application, each Mechanic model may be associated with one Car model, and each Car model may be associated with one Owner model. While the mechanic and the owner have no direct relationship within the database, the mechanic can access the owner through the Car model. Let's look at the tables necessary to define this relationship:
```
mechanics
    id - integer
    name - string
 
cars
    id - integer
    model - string
    mechanic_id - integer
 
owners
    id - integer
    name - string
    car_id - integer
```    
Now that we have examined the table structure for the relationship, let's define the relationship on the Mechanic model:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Mechanic extends Model
{
    /**
     * Get the car's owner.
     */
    public function carOwner()
    {
        return $this->hasOneThrough(Owner::class, Car::class);
    }
}
```
The first argument passed to the hasOneThrough method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.

#### Key Conventions
Typical Eloquent foreign key conventions will be used when performing the relationship's queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the hasOneThrough method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model:
```
class Mechanic extends Model
{
    /**
     * Get the car's owner.
     */
    public function carOwner()
    {
        return $this->hasOneThrough(
            Owner::class,
            Car::class,
            'mechanic_id', // Foreign key on the cars table...
            'car_id', // Foreign key on the owners table...
            'id', // Local key on the mechanics table...
            'id' // Local key on the cars table...
        );
    }
}
```
#### Has Many Through
The "has-many-through" relationship provides a convenient way to access distant relations via an intermediate relation. For example, let's assume we are building a deployment platform like Laravel Vapor. A Project model might access many Deployment models through an intermediate Environment model. Using this example, you could easily gather all deployments for a given project. Let's look at the tables required to define this relationship:
```
projects
    id - integer
    name - string
 
environments
    id - integer
    project_id - integer
    name - string
 
deployments
    id - integer
    environment_id - integer
    commit_hash - string

```
Now that we have examined the table structure for the relationship, let's define the relationship on the Project model:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Project extends Model
{
    /**
     * Get all of the deployments for the project.
     */
    public function deployments()
    {
        return $this->hasManyThrough(Deployment::class, Environment::class);
    }
}
```
The first argument passed to the hasManyThrough method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.

Though the Deployment model's table does not contain a project_id column, the hasManyThrough relation provides access to a project's deployments via $project->deployments. To retrieve these models, Eloquent inspects the project_id column on the intermediate Environment model's table. After finding the relevant environment IDs, they are used to query the Deployment model's table.

##### Key Conventions
Typical Eloquent foreign key conventions will be used when performing the relationship's queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the hasManyThrough method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model:

```
class Project extends Model
{
    public function deployments()
    {
        return $this->hasManyThrough(
            Deployment::class,
            Environment::class,
            'project_id', // Foreign key on the environments table...
            'environment_id', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }
}

```
#### Many To Many Relationships
Many-to-many relations are slightly more complicated than hasOne and hasMany relationships. An example of a many-to-many relationship is a user that has many roles and those roles are also shared by other users in the application. For example, a user may be assigned the role of "Author" and "Editor"; however, those roles may also be assigned to other users as well. So, a user has many roles and a role has many users.

Model Structure
Many-to-many relationships are defined by writing a method that returns the result of the belongsToMany method. The belongsToMany method is provided by the Illuminate\Database\Eloquent\Model base class that is used by all of your application's Eloquent models. For example, let's define a roles method on our User model. The first argument passed to this method is the name of the related model class:
```
<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class User extends Model
{
    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
```

if You want to fillter data inside a relation then we can do this by using add callback function inside function .
see follow 
```
$allDetails =  PostPhotos::orderBy('created_at','DESC')->with(['postcomment' =>function($q) use ($id){
        $q->where('id' , 1);
    } ])
    ->get();
```    

#### Eloquent: Collections

#### Introduction
All Eloquent methods that return more than one model result will return instances of the Illuminate\Database\Eloquent\Collection class, including results retrieved via the get method or accessed via a relationship. The Eloquent collection object extends Laravel's base collection, so it naturally inherits dozens of methods used to fluently work with the underlying array of Eloquent models. Be sure to review the Laravel collection documentation to learn all about these helpful methods!

All collections also serve as iterators, allowing you to loop over them as if they were simple PHP arrays:
```
use App\Models\User;
 
$users = User::where('active', 1)->get();
 
foreach ($users as $user) {
    echo $user->name;
}
```

#### Available Methods
All Eloquent collections extend the base Laravel collection object; therefore, they inherit all of the powerful methods provided by the base collection class.

In addition, the Illuminate\Database\Eloquent\Collection class provides a superset of methods to aid with managing your model collections. Most methods return Illuminate\Database\Eloquent\Collection instances; however, some methods, like modelKeys, return an ```Illuminate\Support\Collection``` instance.
```
contains
diff
except
find
fresh
intersect
load
loadMissing
modelKeys
makeVisible
makeHidden
only
toQuery
unique

```

method use you can find here https://laravel.com/docs/9.x/eloquent-collections
#### Custom Collections
If you would like to use a custom Collection object when interacting with a given model, you may define a newCollection method on your model:
```
<?php
 
namespace App\Models;
 
use App\Support\UserCollection;
use Illuminate\Database\Eloquent\Model;
 
class User extends Model
{
    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array  $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new UserCollection($models);
    }
}

```
### 1 what is Dispatcher 
It facilitates interaction between objects in Node. A Dispatcher is a service object that is used to ensure that the Event is passed to all relevant Listeners

### 2 Lazy-loading feature modules
By default, NgModules are eagerly loaded, which means that as soon as the application loads, so do all the NgModules, whether or not they are immediately necessary. For large applications with lots of routes, consider lazy loading —a design pattern that loads NgModules as needed. Lazy loading helps keep initial bundle sizes smaller, which in turn helps decrease load times.

### 3 How to Use Buffers in Node.js

#### Why Buffers?
Pure JavaScript, while great with unicode-encoded strings, does not handle straight binary data very well. This is fine on the browser, where most data is in the form of strings. However, Node.js servers have to also deal with TCP streams and reading and writing to the filesystem, both of which make it necessary to deal with purely binary streams of data.

#### What Are Buffers?
The Buffer class in Node.js is designed to handle raw binary data. Each buffer corresponds to some raw memory allocated outside V8. Buffers act somewhat like arrays of integers, but aren't resizable and have a whole bunch of methods specifically for binary data


##### Where You See Buffers:
In the wild, buffers are usually seen in the context of binary data coming from streams, such as fs.createReadStream.


### 4 what is event emiter 

EventEmitter class, which we'll use to handle our events
You initialize that using
```
const EventEmitter = require('events');

const eventEmitter = new EventEmitter();
```

This object exposes, among many others, the on and emit methods.

emit is used to trigger an event
on is used to add a callback function that's going to be executed when the event is triggered

```
eventEmitter.on('start', () => {
  console.log('started');
});
```
```
eventEmitter.emit('start');
```

### 4 how to create node js server without express 
```
var http = require('http'); // 1 - Import Node.js core module

var server = http.createServer(function (req, res) {   // 2 - creating server

    //handle incomming requests here..

});

server.listen(5000); 
```

##### with express 
```
const express  = require('express');
const app = express();
app.listen(port,()=>{
    console.log(`server Running on http://localhost:${port}`);
});

```


#### turio 
Turio™ system management server


### what is cluster  in nodejs 

Clusters of Node.js processes can be used to run multiple instances of Node.js that can distribute workloads among their application threads. When process isolation is not needed, use the worker_threads module instead, which allows running multiple application threads within a single Node.js instance.

The cluster module allows easy creation of child processes that all share server ports.


###  waht is worker_threads 

worker_threads module instead, which allows running multiple application threads within a single Node.js instance.
The node:worker_threads module enables the use of threads that execute JavaScript in parallel. To access it:


```
const worker = require('node:worker_threads');

```
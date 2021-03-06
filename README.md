
Session module - A session handler that acts as a wrapper
=======================================
[![StyleCI](https://styleci.io/repos/107491606/shield?branch=master)](https://styleci.io/repos/107491606) [![PHPVersion](https://img.shields.io/badge/PHP-%3E%3D%207.0.0-blue.svg?style=flat-square)](https://secure.php.net/) [![License](https://img.shields.io/badge/License-GPL--3.0-orange.svg?style=flat-square)](https://choosealicense.com/licenses/gpl-3.0/)

This module was designed as a wrapper so it could be injected into the pimple. It can also be used another way. For example, you can call the class directly and call any function statically to achieve the same result. It uses the native `$_SESSION[]` session variable array. We suggest you use this through pimple's dependency injector.

Install
-------

There are two ways you can install this module. By using composer or by downloading directly, but if you download it directly and requires more steps you can view all the available downloads at https://github.com/Awixe/Session/releases so we recommend you use composer to make it simple.

With composer:
```sh
composer require awixe/session
```
Usage
-----
If you are using the awixe module adapter than you can access it through the app function else if you are not use the awixe adapter then you have to declare a new object to use it.

Example #1:

```php
<?php
// Require composer
require __DIR__ . '/vendor/autoload.php';

// Not required if the bootstrap file is required
session_start();

// Set a new session variable
app('session')->set('hello', 'world');

// Get a session variable
if (app('session')->get('hello')) {

    // Save result
    $output = [
        app('session')->get('hello')
    ];
}

// Delete a session variable
app('session')->del('hello');

// Print the result
print_r($output);

if (app('session')->get('hello')) {
    print(app('session')->get('hello'));
} else {
    var_dump(app('session')->get('hello'));
}

?>
```

Example #2:

```php
<?php
// Require composer
require __DIR__ . '/vendor/autoload.php';
use Awixe\Module\Session\Handler;

// Not required if the bootstrap file is required
session_start();

// Declare a new object
$session = new Handler();

// Set a new session variable
$session->set('hello', 'world');

// Get a session variable
if ($session->get('hello')) {

    // Save result
    $output = [
        $session->get('hello')
    ];
}

// Delete a session variable
$session->del('hello');

// Print the result
print_r($output);

if ($session->get('hello')) {
    print($session->get('hello'));
} else {
    var_dump($session->get('hello'));
}

?>
```

Conclusion
-----
  - Framework: https://github.com/Awixe/Framework
  - Issues: https://github.com/Awixe/Session/issues
  

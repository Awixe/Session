
Session module - A session handler that acts as a wrapper
=======================================
[![StyleCI](https://styleci.io/repos/107491606/shield?branch=master)](https://styleci.io/repos/107491606) [![PHPVersion](https://img.shields.io/badge/PHP-%3E%3D%207.0.0-blue.svg?style=flat-square)](https://secure.php.net/) [![License](https://img.shields.io/badge/License-GPL--3.0-orange.svg?style=flat-square)](https://choosealicense.com/licenses/gpl-3.0/)

This module was designed as a wrapper so it could be injected into the pimple. It can also be used another way. For example, you can call the class directly and call any function statically to achieve the same result. It uses the native `$_SESSION[]` session variable array. We suggest you use this through pimple's dependency injector.

Install
-------

There are two ways you can install this module. By using composer or by downloading directly, but if you download it directly and requires more steps so we recommend you use composer to make it simple.

With composer:
```sh
composer require awixe/session
```
Direct download:

1. Goto the release page and choose a download and download it
https://github.com/Awixe/Session/releases

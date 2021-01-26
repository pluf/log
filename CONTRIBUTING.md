# Contributing

Pluf Log is licensed under the GNU Public License V3.


## Set up

* Check out the sources using git or download them

```bash
$ git clone https://github.com/pluf/log.git
```

* Install the libraries using composer:

```bash
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
```

If you are running Windows or are having trouble, read [the official documentation](http://getcomposer.org/doc/00-intro.md#installation).


## Run the tests

The tests are run with [PHPUnit](http://www.phpunit.de/manual/current/en/installation.html):

```bash
$ vendor/bin/phpunit 
```


## Learning the internals

Read the [How it works](doc/how-it-works.md) documentation.


## What to do?

- Resolve issues: [issue list](https://github.com/pluf/log/issues)
- Improve the documentation
- Add example and support
- ...


## Coding style

The code follows PSR0, PSR1 and [PSR2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

Also, do not hesitate to add your name to the author list of a class in the docblock if you improve it.

## License

Add the following note on the top of all source codes:


    Pluf, the light and fast PHP SaaS framework
    Copyright (C) 2020 pluf.ir

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.


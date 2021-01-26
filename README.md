# Pluf Log

Many PHP logging libraries offer the most common functionality that any application might need; however, some libraries have advantages over others and some have taken a unique approach to logging. To standardize the solution, the PHP-FIG (PHP Framework Interop Group) recommended a logging interface that Pluf Log use as their logging API and build a custom logging system using it.

## PSR-3 Logging Standard

The PSR-3 (PHP Standards Recommendation) logging standard defines a logging interface with eight methods (debug, info, notice, warning, error, critical, alert, emergency). The message passed to those functions should be a string or an object with a __toString method to cast it into a string. You can read more about the PSR-3 logging standard in the [official documentation](https://www.php-fig.org/psr/psr-3/).


## How to use

It is so simple to use the Pluf logger. Here is a simple example:

```php
use Pluf\Log\Logger;

// create a log channel
$loggger = Logger::get('logger name');

// add records to the log
$loggger->warning('Foo');
```


## Internals

* [Contribute](CONTRIBUTING.md)
* [How Pluf Log works](doc/how-it-works.md)

## License

This project is released under the GNU GENERAL PUBLIC LICENSE V3 license. For more information see the [License file](LICENSE).

This documentation is also embedded in [Pluf DI's git repository](https://github.com/pluf/di/tree/master/doc)
so you can read it offline (in the `doc/` folder).

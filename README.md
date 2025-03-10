# PHP Basic Structure

CHECK LEA PLATFORM FOR ASSIGNMENTS 

## DW3 LaSalle

- Web Server Application course

```
/php-basic-structure
|
|--- /app (main logic)
|    |--- /controllers (handling the HTTP request, interact with models and views)
|    |--- /models (class that represents the data and interact with database)
|    |--- /views (html templates that will rendering to user )
|    |--- /core (base class, the "core" of application, like: App, Controller, Model and Database class)
|    |--- /config (configurations file)
|--- /public (the public files, index.php, asstes (css, img, fonts ... ) )
|    |--- index.php
|--- /vendor (dependecies)
|--- /test (unit test)
|
|--- .htaccess (apache configuratuion)
|--- php.ini (php configuration)
|--- composer.json (package management)
|--- README.md  (project documentation )
|___ .gitignore (specify wich files will be ignored by git push, another words I will not send to git repository)
```


### Not in Exam
- Composer
- Git


## Composer: [Composer - Dependency Management](https://getcomposer.org/)

### To Start a new
```shell
composer init
```

### To install the dependencies
```shell
composer install
```

### To add a new dependency
```shell
composer require <DEPENDENCY NAME>
```

## Functions

### ucfirst


Make a string's first character uppercase

```php
<?php
function ucfirst(string $string): string { }
@param string $string — The input string.
@return string — the resulting string.
@link https://php.net/manual/en/function.ucfirst.php
```

Make a string's first character uppercase

```php
ucfirst( string $str ): string
```

### extract(Array())
```php
$array = ['users' = > []]
extract($array);

// The extract will create variable with the keys of array
// $users = []
```
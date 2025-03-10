# PHP Basic Structure

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
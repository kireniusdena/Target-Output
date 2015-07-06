Target Output
=============
Aplikasi Pencatatan output dari RKAKL dalam bentuk Module Ekstension Framework Yii 2


ER Master Database
------------

https://to.local-server.link/perancangan/


Dependencies
------------

```php
"mdmsoft/yii2-admin": "*",
"dektrium/yii2-user":"0.9.*@dev",
"kartik-v/yii2-widgets": "*",
"kartik-v/yii2-grid": "*",
"kartik-v/yii2-mpdf": "@dev",
"kartik-v/yii2-editable": "@dev",
"2amigos/yii2-tinymce-widget" : "~1.1",
"wbraganca/yii2-dynamicform": "*"
```

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kemdikbud/yii2-target-output "dev-master"
```

or add

```
"kemdikbud/yii2-target-output": "dev-master"
```

to the require section of your `composer.json` file.

run migration for database

```php
./yii migrate --migrationPath=@kemdikbud/to/Module/migrations
```

add in modules section of main config

```php
'modules' => [
        'to' => [
            'class' => 'kemdikbud\to\Module',
        ],
    ],
```

Usage
-----

Once the extension is installed, check the url: [your application base url]/index.php/to

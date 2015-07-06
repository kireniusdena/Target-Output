Target Output
=============
Aplikasi Pencatatan output dari RKAKL dalam bentuk Module Ekstension Framework Yii 2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kemendikbud-subag-data/yii2-target-output "*"
```

or add

```
"kemendikbud-subag-data/yii2-target-output": "*"
```

to the require section of your `composer.json` file.

run migration for database

```php
./yii migrate --migrationPath=@kemendikbud-subag-data/yii2-target-output/Module/migrations
```

add in modules section of main config

```php
'modules' => [
        'to' => [
            'class' => 'kemendikbud-subag-data\yii2-target-output\Module',
        ],
    ],
```

Usage
-----

Once the extension is installed, check the url: [your application base url]/index.php/to

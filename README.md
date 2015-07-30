yii2-viewGrid
========
Вывод массива элементов в виде таблицы, где ключи - это названия колонок,
а значения - это сам колонки. На данный момент не учитывается пагинация.

Инсталяция
------------

Необходимо установить [composer](http://getcomposer.org/download/).

Затем выполнить

```
php composer.phar require axiles89/yii2-viewgrid:dev-master
```

или включить файл сразу в зависимости `composer.json` файла

```
"axiles89/yii2-viewgrid": "dev-master"
```

и обновить composer

```
php composer.phar update
```


Использование
-----

Виджету необходимо передавать название компонента базы данных (по умолчанию db) и
таблицу по которой нужно осуществить вывод:

```php
<?= \axiles89\viewgrid\Axiles89Grid::widget(['db' => 'db', 'table' => 'Country']); ?>```
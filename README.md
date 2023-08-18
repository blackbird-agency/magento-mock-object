Magento Mock Object

This module is a simple repository to use on require-dev to have available objects that implements DataObject methods.

Since almost every object in magento extends from DataObject, mocking object with PHPUnit can be painful as you have to
handle popular methods like ```getData()``` or ```setData()``` manually on every object you mock.

More objects will be added.

## Setup

### Get the package

**Composer Package:**


```
composer require-dev blackbird/magento-mock-object
```

### Install the module

Go to your Magento root directory and run the following magento command:

```
php bin/magento setup:upgrade
```

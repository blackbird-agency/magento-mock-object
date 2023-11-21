<div align="center">
  
# magento-mock-object

[![Latest Stable Version](https://img.shields.io/badge/version-1.1.0-blue)](https://packagist.org/packages/blackbird/magento-mock-object)
[![License: MIT](https://img.shields.io/github/license/blackbird-agency/magento-mock-object.svg)](./LICENSE)


This module is a simple repository to use on require-dev to have available objects that implements DataObject methods.

Since almost every object in magento extends from DataObject,<br>
mocking object with PHPUnit can be painful as you have to handle popular methods<br>
like ```getData()``` or ```setData()``` manually on every object you mock.

More objects will be added.

</div>

## Setup

### Get the package

**Composer Package:**


```
composer require --dev blackbird/magento-mock-object
```

### Install the module

Go to your Magento root directory and run the following magento command:

```
php bin/magento setup:upgrade
```

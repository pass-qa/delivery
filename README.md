<p align="center"><img src="./socialcard.jpg" alt="Social Card of Pass Delivery API"></p>

# <a href="https://www.pass.qa/" target="_blank">Pass Delivery</a>: Api package library


## About API

See the <a href="https://www.pass.qa/integration" target="_blank">integration page</a> for description of pass delivery api.


## Documentation

See the <a href="https://passdelivery.readme.io/" target="_blank">documentation</a> for pass delivery api documentation.


## Installation

```console
composer require pass-qa/delivery
```


## Usage Instructions

### First Step

You must generate a token. See [this page](https://passdelivery.readme.io/reference/get-api-token-1) to learn how to create a token.

#### create new object

```php
use PassQa\Delivery\Orders;

$order = new Orders('Your token')
```

#### use facade

you must create a key in .env file by name "PASS_DELIVERY_API" for pass delivery api token
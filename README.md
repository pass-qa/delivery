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

### calculate order price before create order

Request a quote to receive your exact delivery fee for an order by using the origin address and destination addresses.

This endpoint retrieves calculation information in the format of for a pair of {latitude, longitude} coordinates.

```php
$priceData = [
        "pickup" =>[
            "lat" =>"25.275047",
            "long" => "51.535141"
        ],
        "dropoffs" => [
            [
                "lat" =>"25.277007", 
                "long" => "51.530034"
            ],
                 [
                "lat" =>"25.277005", 
                "long" => "51.530039"
                 ],
                 [
                "lat" =>"25.277001", 
                "long" => "51.530030"
                 ]
        ]
    ];
```

use object

```php
use PassQa\Delivery\Orders;

$order = new Orders('Your token');

$response = $order->Price($priceData);
```

or use facade

```php
use PassQa\Delivery\Facades\PassOrder;

$response = PassOrder::Price($priceData);
```
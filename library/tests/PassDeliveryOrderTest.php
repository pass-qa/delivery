<?php

namespace PassQa\Delivery\Library\Tests;

use PassQa\Delivery\PassOrder;


class PassDeliveryOrderTest extends PassTestCase
{

    public function testList()
    {
        $order = new PassOrder();
        $orders = $order->list();
        $this->assertTrue($orders['status'] === "success");
    }

    public function testCreate()
    {
        $order = new PassOrder();
        $orderData = $this->prepareCreateOrderData();
        $order = $order->create($orderData);
        $this->assertTrue($order['status'] === "success");
    }

    private function prepareCreateOrderData(): array
    {
        return [
            "addresses"=> [
                "pickup" =>[
                    "lat"=> "25.275047",
                    "long"=> "51.535141",
                    "name"=> "majva",
                    "phone"=> "+97466661234",
                    "address"=> "this street",
                    "description"=> "it is a sample description"
                ],
                "dropoffs" => [
                    [
                        "lat"=> "25.277007",
                        "long"=> "51.530034",
                        "name"=> "majva",
                        "phone"=> "+97466661234",
                        "address"=> "that street",
                        "description"=> "it is a sample description"
                    ],
                    [
                        "lat"=> "25.277007",
                        "long"=> "51.530034",
                        "name"=> "majva",
                        "phone"=> "+97466661234",
                        "address"=> "other street",
                        "description"=> "it is a sample description"
                    ],
                    [
                        "lat"=> "25.277007",
                        "long"=> "51.530034",
                        "name"=> "majva",
                        "phone"=> "+97466661234",
                        "address"=> "another street",
                        "description"=> "it is a sample description"
                    ]
                ]
            ]
        ];
    }
}
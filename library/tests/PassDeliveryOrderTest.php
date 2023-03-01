<?php

namespace PassQa\Delivery\Library\Tests;

use PassQa\Delivery\PassOrder;


class PassDeliveryOrderTest extends PassTestCase
{

    public function testList()
    {
        $order = new PassOrder();
        $orders = $order->List();
        $this->assertTrue($orders['status'] === "success");

    }
}
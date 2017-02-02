<?php

use PHPUnit\Framework\TestCase;
use SwaggerPetstore\Order;

final class StoreTest extends TestCase
{
    public function testGetInventory()
    {
        $store = PetTest::createPetStore();
        $inventory = $store->getInventory();
    }

    public function testPlaceOrder()
    {
        $store = PetTest::createPetStore();
        $order = $store->placeOrder(Order::create()
            ->id(0)
            ->petId(0)
            ->quantity(0)
            ->shipDate(new DateTime('2017-01-18T18:23:32.708Z'))
            ->status('placed')
            ->complete(false)
        );
    }

    public function testDeleteOrder()
    {
        $store = PetTest::createPetStore();
        $store->deleteOrder('0');
    }

    public function testGetOrderById()
    {
        $store = PetTest::createPetStore();
        $order = $store->placeOrder(Order::create()
            ->id(0)
            ->petId(0)
            ->quantity(0)
            ->shipDate(new DateTime('2017-01-18T18:23:32.708Z'))
            ->status('placed')
            ->complete(false)
        );
        $order = $store->getOrderById('0');
    }
}

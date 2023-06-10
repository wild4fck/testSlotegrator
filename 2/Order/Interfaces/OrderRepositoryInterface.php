<?php

declare(strict_types=1);

namespace Order\Interfaces;

use Order\Order;

/**
 * @author Wild4fck <wild4fck@yandex.ru>
 */
interface OrderRepositoryInterface
{
    public function getById($id);
    public function save(Order $order);
    public function update(Order $order);
    public function delete(Order $order);
}

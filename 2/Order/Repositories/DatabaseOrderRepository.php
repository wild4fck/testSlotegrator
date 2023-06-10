<?php

declare(strict_types=1);

namespace Order\Repositories;

use Order\Order;
use Order\Interfaces\OrderRepositoryInterface;

/**
 * @author Wild4fck <wild4fck@yandex.ru>
 */
class DatabaseOrderRepository implements OrderRepositoryInterface
{
    
    public function getById($id)
    {
        // Получение заказа по идентификатору из базы данных
        // ...
    }
    
    public function save(Order $order)
    {
        // Сохранение заказа в базе данных
        // ...
    }
    
    public function update(Order $order)
    {
        // Обновление информации о заказе в базе данных
        // ...
    }
    
    public function delete(Order $order)
    {
        // Удаление заказа из базы данных
        // ...
    }
}

<?php

declare(strict_types=1);

namespace Order\Repositories;

use Order\Order;
use Order\Interfaces\OrderRepositoryInterface;

/**
 * @author Wild4fck <wild4fck@yandex.ru>
 */
class FileOrderRepository implements OrderRepositoryInterface
{
    
    public function getById($id)
    {
        // Получение заказа по идентификатору из файла
        // ...
    }
    
    public function save(Order $order)
    {
        // Сохранение заказа в файле
        // ...
    }
    
    public function update(Order $order)
    {
        // Обновление информации о заказе в файле
        // ...
    }
    
    public function delete(Order $order)
    {
        // Удаление заказа из файла
        // ...
    }
}

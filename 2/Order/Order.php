<?php

declare(strict_types=1);

namespace Order;

use Order\Interfaces\OrderRepositoryInterface;

/**
 * @author Wild4fck <wild4fck@yandex.ru>
 */
class Order
{
    private OrderRepositoryInterface $repository;
    
    public function __construct(OrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function getById($id)
    {
        return $this->repository->getById($id);
    }
    
    public function save()
    {
        return $this->repository->save($this);
    }
    
    public function update()
    {
        return $this->repository->update($this);
    }
    
    public function delete()
    {
        return $this->repository->delete($this);
    }
    
    public function calculateTotalSum(): int
    {
        $items = $this->getItems(); // Получаем список товаров заказа
    
        $totalSum = 0;
        foreach ($items as $item) {
            $totalSum += $item->getPrice(); // Предполагается, что у товара есть метод getPrice()
        }
    
        return $totalSum;
    }
    
    public function getItems(): array
    {
        // По хорошему должна быть коллекция
        $items = [];
        // Получение товаров заказа
        return $items;
    }
    
    public function getItemsCount()
    {
        // Получение количества товаров заказа
        // ...
    }
    
    public function addItem($item)
    {
        // Добавление товара в заказ (добавляем, возможно используем update)
        // ...
    }
    
    public function deleteItem($item)
    {
        // Удаление товара из заказа
        // ...
    }
    
    public function printOrder()
    {
        // Печать заказа
        // ...
    }
    
    public function showOrder()
    {
        // Отображение информации о заказе
        // ...
    }
}

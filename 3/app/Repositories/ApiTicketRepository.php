<?php

declare(strict_types=1);

namespace Repositories;

use TicketRepositoryInterface;

/**
 * @author Wild4fck <wild4fck@yandex.ru>
 */
class ApiTicketRepository implements TicketRepositoryInterface
{
    public function load($ticketId)
    {
        // Необходимо реализовать сервис с интеграцией (для примера выбран простой запрос)
        $response = Http::get('https://api.example.com/tickets/' . $ticketId);
    
        if ($response->ok()) {
            return $response->json();
        }
    
        return null;
    }
    
    public function save($ticket)
    {
        // TODO: Implement save() method.
    }
    
    public function update($ticket)
    {
        // TODO: Implement update() method.
    }
    
    public function delete($ticket)
    {
        // TODO: Implement delete() method.
    }
}

<?php

declare(strict_types=1);

namespace Repositories;

/**
 * @author Wild4fck <wild4fck@yandex.ru>
 */
class DbTicketRepository implements \TicketRepositoryInterface
{
    
    public function load($ticketId)
    {
        return Ticket::find($ticketId);
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

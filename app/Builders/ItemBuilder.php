<?php

namespace App\Builders;

use App\Dto\ItemDTO;
use App\Models\Item;

class ItemBuilder
{
    public function buildDto(array $item)
    {
        $itemDto = new ItemDTO();
        $itemDto->setTitle($item['title']);
        $itemDto->setNote($item['note']);
        $itemDto->setQuantity($item['quantity']);
        $itemDto->setPrice($item['price']);

        return $itemDto;
    }

    public function buildEntity(array $itens, $shiporderId)
    {
        if (is_countable($itens) && !isset($itens['item']['title'])) {
            foreach ($itens['item'] as $item) {
                Item::create([
                    'title' => $item['title'],
                    'note' => $item['note'],
                    'quantity' => (int) $item['quantity'],
                    'price' => (float) $item['price'],
                    'shiporder_id' => $shiporderId
                ]);
            }
        } else {
            Item::create([
                'title' => $itens['item']['title'],
                'note' => $itens['item']['note'],
                'quantity' => (int) $itens['item']['quantity'],
                'price' => (float) $itens['item']['price'],
                'shiporder_id' => $shiporderId
            ]);
        }
    }
}

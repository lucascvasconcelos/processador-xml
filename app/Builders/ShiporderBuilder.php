<?php


namespace App\Builders;


use App\Dto\ShiporderDTO;
use App\Models\Shiporder;

class ShiporderBuilder
{
    public function buildDto(array $shiporder, $shiptoId)
    {
        $shiporderDto = new ShiporderDTO();
        $shiporderDto->setId((int) $shiporder['orderid']);
        $shiporderDto->setPessoa((int) $shiporder['orderperson']);
        $shiporderDto->setShipto((int) $shiptoId);

        return $shiporderDto;
    }

    public function buildEntity(ShiporderDTO $shiporderDTO)
    {
        $shiporder = new Shiporder();
        $shiporder->id = $shiporderDTO->getId();
        $shiporder->pessoa = $shiporderDTO->getPessoa();
        $shiporder->shipto_id = $shiporderDTO->getShipto();
        $shiporder->save();

//        dd($shiporder->id);

//        $test = Shiporder::create([
//            'id' => $shiporderDTO->getId(),
//            'pessoa' => $shiporderDTO->getPessoa(),
//            'shipto_id' => $shiporderDTO->getShipto()
//        ]);
//
//        $test->id;
    }
}

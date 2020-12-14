<?php

namespace App\Services;

use App\Builders\ItemBuilder;
use App\Builders\ShiporderBuilder;
use App\Builders\ShiptoBuilder;
use App\Repositorys\ShiporderRepository;

class ShiporderService extends CrudService
{
    private $shiporderBuilder;

    private $itemBuilder;

    private $shiptoBuilder;

    /**
     * ShiporderService constructor.
     * @param ShiporderBuilder $shiporderBuilder
     * @param ItemBuilder $itemBuilder
     * @param ShiptoBuilder $shiptoBuilder
     * @param ShiporderRepository $repository
     */
    public function __construct(
        ShiporderBuilder $shiporderBuilder,
        ItemBuilder $itemBuilder,
        ShiptoBuilder $shiptoBuilder,
        ShiporderRepository $repository
    ) {
        parent::__construct($repository);
        $this->shiporderBuilder = $shiporderBuilder;
        $this->itemBuilder = $itemBuilder;
        $this->shiptoBuilder = $shiptoBuilder;
    }

    public function populateShiporders(array $shiporders) {

        foreach ($shiporders['shiporder'] as $shiporder) {
            $shipto = $this->shiptoBuilder->buildEntity($shiporder['shipto']);
            $shipordersDto = $this->shiporderBuilder->buildDto($shiporder, $shipto->id);
            $this->shiporderBuilder->buildEntity($shipordersDto);
            $this->itemBuilder->buildEntity($shiporder['items'], $shiporder['orderid']);
        }
    }
}

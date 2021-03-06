<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\ShipmentOrder;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ShipmentOrderDataRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments/orders';
    public const METHOD = 'POST';

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $shop;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $delivery;

    /**
     * @Serializer\SerializedName("orderId")
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $orderId;

    /**
     * @Serializer\SerializedName("type")
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $type;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $data;

    public function getShop(): string
    {
        return $this->shop;
    }

    public function getDelivery(): string
    {
        return $this->delivery;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}

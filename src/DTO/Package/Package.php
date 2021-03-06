<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Package;

use JMS\Serializer\Annotation as Serializer;
/**
 * Class Package
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Package
 */
class Package
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("barcode")
     */
    public $barcode;
}

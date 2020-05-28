<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableCulturesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetAvailableCulturesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The AvailableCultures
     * @var \Ews\ArrayType\EwsArrayOfAvailableCulturesType
     */
    public $AvailableCultures;
    /**
     * Constructor method for GetAvailableCulturesResponseMessageType
     * @uses EwsGetAvailableCulturesResponseMessageType::setAvailableCultures()
     * @param \Ews\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures = null)
    {
        $this
            ->setAvailableCultures($availableCultures);
    }
    /**
     * Get AvailableCultures value
     * @return \Ews\ArrayType\EwsArrayOfAvailableCulturesType|null
     */
    public function getAvailableCultures()
    {
        return $this->AvailableCultures;
    }
    /**
     * Set AvailableCultures value
     * @param \Ews\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures
     * @return \Ews\StructType\EwsGetAvailableCulturesResponseMessageType
     */
    public function setAvailableCultures(\Ews\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures = null)
    {
        $this->AvailableCultures = $availableCultures;
        return $this;
    }
}

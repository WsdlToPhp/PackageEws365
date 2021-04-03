<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfAvailableCulturesType|null
     */
    protected ?\ArrayType\EwsArrayOfAvailableCulturesType $AvailableCultures = null;
    /**
     * Constructor method for GetAvailableCulturesResponseMessageType
     * @uses EwsGetAvailableCulturesResponseMessageType::setAvailableCultures()
     * @param \ArrayType\EwsArrayOfAvailableCulturesType $availableCultures
     */
    public function __construct(?\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures = null)
    {
        $this
            ->setAvailableCultures($availableCultures);
    }
    /**
     * Get AvailableCultures value
     * @return \ArrayType\EwsArrayOfAvailableCulturesType|null
     */
    public function getAvailableCultures(): ?\ArrayType\EwsArrayOfAvailableCulturesType
    {
        return $this->AvailableCultures;
    }
    /**
     * Set AvailableCultures value
     * @param \ArrayType\EwsArrayOfAvailableCulturesType $availableCultures
     * @return \StructType\EwsGetAvailableCulturesResponseMessageType
     */
    public function setAvailableCultures(?\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures = null): self
    {
        $this->AvailableCultures = $availableCultures;
        
        return $this;
    }
}

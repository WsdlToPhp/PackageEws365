<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServerTimeZonesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetServerTimeZonesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The TimeZoneDefinitions
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    protected \ArrayType\EwsArrayOfTimeZoneDefinitionType $TimeZoneDefinitions;
    /**
     * Constructor method for GetServerTimeZonesResponseMessageType
     * @uses EwsGetServerTimeZonesResponseMessageType::setTimeZoneDefinitions()
     * @param \ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions
     */
    public function __construct(\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions)
    {
        $this
            ->setTimeZoneDefinitions($timeZoneDefinitions);
    }
    /**
     * Get TimeZoneDefinitions value
     * @return \ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    public function getTimeZoneDefinitions(): \ArrayType\EwsArrayOfTimeZoneDefinitionType
    {
        return $this->TimeZoneDefinitions;
    }
    /**
     * Set TimeZoneDefinitions value
     * @param \ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions
     * @return \StructType\EwsGetServerTimeZonesResponseMessageType
     */
    public function setTimeZoneDefinitions(\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions): self
    {
        $this->TimeZoneDefinitions = $timeZoneDefinitions;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeZoneContextType StructType
 * Meta information extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTimeZoneContextType extends AbstractStructBase
{
    /**
     * The TimeZoneDefinition
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\EwsTimeZoneDefinitionType
     */
    protected \StructType\EwsTimeZoneDefinitionType $TimeZoneDefinition;
    /**
     * Constructor method for TimeZoneContextType
     * @uses EwsTimeZoneContextType::setTimeZoneDefinition()
     * @param \StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     */
    public function __construct(\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition)
    {
        $this
            ->setTimeZoneDefinition($timeZoneDefinition);
    }
    /**
     * Get TimeZoneDefinition value
     * @return \StructType\EwsTimeZoneDefinitionType
     */
    public function getTimeZoneDefinition(): \StructType\EwsTimeZoneDefinitionType
    {
        return $this->TimeZoneDefinition;
    }
    /**
     * Set TimeZoneDefinition value
     * @param \StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     * @return \StructType\EwsTimeZoneContextType
     */
    public function setTimeZoneDefinition(\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition): self
    {
        $this->TimeZoneDefinition = $timeZoneDefinition;
        
        return $this;
    }
}

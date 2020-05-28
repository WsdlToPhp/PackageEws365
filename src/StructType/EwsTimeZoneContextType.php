<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
    /**
     * Constructor method for TimeZoneContextType
     * @uses EwsTimeZoneContextType::setTimeZoneDefinition()
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     */
    public function __construct(\Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition = null)
    {
        $this
            ->setTimeZoneDefinition($timeZoneDefinition);
    }
    /**
     * Get TimeZoneDefinition value
     * @return \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public function getTimeZoneDefinition()
    {
        return $this->TimeZoneDefinition;
    }
    /**
     * Set TimeZoneDefinition value
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     * @return \Ews\StructType\EwsTimeZoneContextType
     */
    public function setTimeZoneDefinition(\Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition = null)
    {
        $this->TimeZoneDefinition = $timeZoneDefinition;
        return $this;
    }
}

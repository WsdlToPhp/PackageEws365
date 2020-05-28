<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    public $TimeZoneDefinitions;
    /**
     * Constructor method for GetServerTimeZonesResponseMessageType
     * @uses EwsGetServerTimeZonesResponseMessageType::setTimeZoneDefinitions()
     * @param \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions = null)
    {
        $this
            ->setTimeZoneDefinitions($timeZoneDefinitions);
    }
    /**
     * Get TimeZoneDefinitions value
     * @return \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    public function getTimeZoneDefinitions()
    {
        return $this->TimeZoneDefinitions;
    }
    /**
     * Set TimeZoneDefinitions value
     * @param \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions
     * @return \Ews\StructType\EwsGetServerTimeZonesResponseMessageType
     */
    public function setTimeZoneDefinitions(\Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions = null)
    {
        $this->TimeZoneDefinitions = $timeZoneDefinitions;
        return $this;
    }
}

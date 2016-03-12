<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertIdType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Converts the passed source ids into the destination format. Change keys are not returned.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConvertIdType extends EwsBaseRequestType
{
    /**
     * The SourceIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;
    /**
     * The DestinationFormat
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DestinationFormat;
    /**
     * Constructor method for ConvertIdType
     * @uses EwsConvertIdType::setSourceIds()
     * @uses EwsConvertIdType::setDestinationFormat()
     * @param \Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType $sourceIds
     * @param string $destinationFormat
     */
    public function __construct(\Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType $sourceIds = null, $destinationFormat = null)
    {
        $this
            ->setSourceIds($sourceIds)
            ->setDestinationFormat($destinationFormat);
    }
    /**
     * Get SourceIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public function getSourceIds()
    {
        return $this->SourceIds;
    }
    /**
     * Set SourceIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType $sourceIds
     * @return \Ews\StructType\EwsConvertIdType
     */
    public function setSourceIds(\Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType $sourceIds = null)
    {
        $this->SourceIds = $sourceIds;
        return $this;
    }
    /**
     * Get DestinationFormat value
     * @return string
     */
    public function getDestinationFormat()
    {
        return $this->DestinationFormat;
    }
    /**
     * Set DestinationFormat value
     * @uses \Ews\EnumType\EwsIdFormatType::valueIsValid()
     * @uses \Ews\EnumType\EwsIdFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $destinationFormat
     * @return \Ews\StructType\EwsConvertIdType
     */
    public function setDestinationFormat($destinationFormat = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsIdFormatType::valueIsValid($destinationFormat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $destinationFormat, implode(', ', \Ews\EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->DestinationFormat = $destinationFormat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConvertIdType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}

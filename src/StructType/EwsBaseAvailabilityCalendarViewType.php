<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAvailabilityCalendarViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsBaseAvailabilityCalendarViewType extends AbstractStructBase
{
    /**
     * The FreeBusyViewType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $FreeBusyViewType;
    /**
     * Constructor method for BaseAvailabilityCalendarViewType
     * @uses EwsBaseAvailabilityCalendarViewType::setFreeBusyViewType()
     * @param string[] $freeBusyViewType
     */
    public function __construct($freeBusyViewType = null)
    {
        $this
            ->setFreeBusyViewType($freeBusyViewType);
    }
    /**
     * Get FreeBusyViewType value
     * @return string[]
     */
    public function getFreeBusyViewType()
    {
        return $this->FreeBusyViewType;
    }
    /**
     * Set FreeBusyViewType value
     * @uses \Ews\EnumType\EwsFreeBusyViewType::valueIsValid()
     * @uses \Ews\EnumType\EwsFreeBusyViewType::getValidValues()
     * @param string[] $freeBusyViewType
     * @return \Ews\StructType\EwsBaseAvailabilityCalendarViewType
     */
    public function setFreeBusyViewType($freeBusyViewType = null)
    {
        if (!\Ews\EnumType\EwsFreeBusyViewType::valueIsValid($freeBusyViewType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freeBusyViewType, implode(', ', \Ews\EnumType\EwsFreeBusyViewType::getValidValues())), __LINE__);
        }
        $this->FreeBusyViewType = $freeBusyViewType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseAvailabilityCalendarViewType
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

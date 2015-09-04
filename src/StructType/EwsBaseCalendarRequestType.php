<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCalendarRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
abstract class EwsBaseCalendarRequestType extends EwsBaseRequestType
{
    /**
     * The CalendarId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $CalendarId;
    /**
     * Constructor method for BaseCalendarRequestType
     * @uses EwsBaseCalendarRequestType::setCalendarId()
     * @param \Ews\StructType\EwsTargetFolderIdType $calendarId
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $calendarId = null)
    {
        $this
            ->setCalendarId($calendarId);
    }
    /**
     * Get CalendarId value
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function getCalendarId()
    {
        return $this->CalendarId;
    }
    /**
     * Set CalendarId value
     * @param \Ews\StructType\EwsTargetFolderIdType $calendarId
     * @return \Ews\StructType\EwsBaseCalendarRequestType
     */
    public function setCalendarId(\Ews\StructType\EwsTargetFolderIdType $calendarId = null)
    {
        $this->CalendarId = $calendarId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseCalendarRequestType
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

<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCalendarRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseCalendarRequestType extends EwsBaseRequestType
{
    /**
     * The CalendarId
     * Meta information extracted from the WSDL
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
}

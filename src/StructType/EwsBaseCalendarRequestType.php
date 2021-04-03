<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsTargetFolderIdType
     */
    protected \StructType\EwsTargetFolderIdType $CalendarId;
    /**
     * Constructor method for BaseCalendarRequestType
     * @uses EwsBaseCalendarRequestType::setCalendarId()
     * @param \StructType\EwsTargetFolderIdType $calendarId
     */
    public function __construct(\StructType\EwsTargetFolderIdType $calendarId)
    {
        $this
            ->setCalendarId($calendarId);
    }
    /**
     * Get CalendarId value
     * @return \StructType\EwsTargetFolderIdType
     */
    public function getCalendarId(): \StructType\EwsTargetFolderIdType
    {
        return $this->CalendarId;
    }
    /**
     * Set CalendarId value
     * @param \StructType\EwsTargetFolderIdType $calendarId
     * @return \StructType\EwsBaseCalendarRequestType
     */
    public function setCalendarId(\StructType\EwsTargetFolderIdType $calendarId): self
    {
        $this->CalendarId = $calendarId;
        
        return $this;
    }
}

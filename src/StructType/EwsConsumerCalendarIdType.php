<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerCalendarIdType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifier for a consumer calendar. This is reserved for a select number of server-2-server calls.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConsumerCalendarIdType extends EwsBaseFolderIdType
{
    /**
     * The OwnerPuid
     * Meta informations extracted from the WSDL
     * - use: required
     * @var long
     */
    public $OwnerPuid;
    /**
     * The CalendarGuid
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $CalendarGuid;
    /**
     * The OwnerCid
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var long
     */
    public $OwnerCid;
    /**
     * Constructor method for ConsumerCalendarIdType
     * @uses EwsConsumerCalendarIdType::setOwnerPuid()
     * @uses EwsConsumerCalendarIdType::setCalendarGuid()
     * @uses EwsConsumerCalendarIdType::setOwnerCid()
     * @param long $ownerPuid
     * @param string $calendarGuid
     * @param long $ownerCid
     */
    public function __construct($ownerPuid = null, $calendarGuid = null, $ownerCid = null)
    {
        $this
            ->setOwnerPuid($ownerPuid)
            ->setCalendarGuid($calendarGuid)
            ->setOwnerCid($ownerCid);
    }
    /**
     * Get OwnerPuid value
     * @return long
     */
    public function getOwnerPuid()
    {
        return $this->OwnerPuid;
    }
    /**
     * Set OwnerPuid value
     * @param long $ownerPuid
     * @return \Ews\StructType\EwsConsumerCalendarIdType
     */
    public function setOwnerPuid($ownerPuid = null)
    {
        $this->OwnerPuid = $ownerPuid;
        return $this;
    }
    /**
     * Get CalendarGuid value
     * @return string
     */
    public function getCalendarGuid()
    {
        return $this->CalendarGuid;
    }
    /**
     * Set CalendarGuid value
     * @param string $calendarGuid
     * @return \Ews\StructType\EwsConsumerCalendarIdType
     */
    public function setCalendarGuid($calendarGuid = null)
    {
        $this->CalendarGuid = $calendarGuid;
        return $this;
    }
    /**
     * Get OwnerCid value
     * @return long|null
     */
    public function getOwnerCid()
    {
        return $this->OwnerCid;
    }
    /**
     * Set OwnerCid value
     * @param long $ownerCid
     * @return \Ews\StructType\EwsConsumerCalendarIdType
     */
    public function setOwnerCid($ownerCid = null)
    {
        $this->OwnerCid = $ownerCid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConsumerCalendarIdType
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

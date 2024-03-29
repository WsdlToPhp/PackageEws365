<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerCalendarIdType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifier for a consumer calendar. This is reserved for a select number of server-2-server calls.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConsumerCalendarIdType extends EwsBaseFolderIdType
{
    /**
     * The OwnerPuid
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $OwnerPuid;
    /**
     * The CalendarGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * - use: required
     * @var string
     */
    protected string $CalendarGuid;
    /**
     * The OwnerCid
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $OwnerCid = null;
    /**
     * Constructor method for ConsumerCalendarIdType
     * @uses EwsConsumerCalendarIdType::setOwnerPuid()
     * @uses EwsConsumerCalendarIdType::setCalendarGuid()
     * @uses EwsConsumerCalendarIdType::setOwnerCid()
     * @param int $ownerPuid
     * @param string $calendarGuid
     * @param int $ownerCid
     */
    public function __construct(int $ownerPuid, string $calendarGuid, ?int $ownerCid = null)
    {
        $this
            ->setOwnerPuid($ownerPuid)
            ->setCalendarGuid($calendarGuid)
            ->setOwnerCid($ownerCid);
    }
    /**
     * Get OwnerPuid value
     * @return int
     */
    public function getOwnerPuid(): int
    {
        return $this->OwnerPuid;
    }
    /**
     * Set OwnerPuid value
     * @param int $ownerPuid
     * @return \StructType\EwsConsumerCalendarIdType
     */
    public function setOwnerPuid(int $ownerPuid): self
    {
        // validation for constraint: int
        if (!is_null($ownerPuid) && !(is_int($ownerPuid) || ctype_digit($ownerPuid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ownerPuid, true), gettype($ownerPuid)), __LINE__);
        }
        $this->OwnerPuid = $ownerPuid;
        
        return $this;
    }
    /**
     * Get CalendarGuid value
     * @return string
     */
    public function getCalendarGuid(): string
    {
        return $this->CalendarGuid;
    }
    /**
     * Set CalendarGuid value
     * @param string $calendarGuid
     * @return \StructType\EwsConsumerCalendarIdType
     */
    public function setCalendarGuid(string $calendarGuid): self
    {
        // validation for constraint: string
        if (!is_null($calendarGuid) && !is_string($calendarGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarGuid, true), gettype($calendarGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($calendarGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $calendarGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($calendarGuid, true)), __LINE__);
        }
        $this->CalendarGuid = $calendarGuid;
        
        return $this;
    }
    /**
     * Get OwnerCid value
     * @return int|null
     */
    public function getOwnerCid(): ?int
    {
        return $this->OwnerCid;
    }
    /**
     * Set OwnerCid value
     * @param int $ownerCid
     * @return \StructType\EwsConsumerCalendarIdType
     */
    public function setOwnerCid(?int $ownerCid = null): self
    {
        // validation for constraint: int
        if (!is_null($ownerCid) && !(is_int($ownerCid) || ctype_digit($ownerCid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ownerCid, true), gettype($ownerCid)), __LINE__);
        }
        $this->OwnerCid = $ownerCid;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotifyOneDriveSyncType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNotifyOneDriveSyncType extends EwsBaseRequestType
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $UserID;
    /**
     * The TenantID
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $TenantID;
    /**
     * The Timestamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Timestamp;
    /**
     * Constructor method for NotifyOneDriveSyncType
     * @uses EwsNotifyOneDriveSyncType::setUserID()
     * @uses EwsNotifyOneDriveSyncType::setTenantID()
     * @uses EwsNotifyOneDriveSyncType::setTimestamp()
     * @param string $userID
     * @param string $tenantID
     * @param string $timestamp
     */
    public function __construct(string $userID, string $tenantID, string $timestamp)
    {
        $this
            ->setUserID($userID)
            ->setTenantID($tenantID)
            ->setTimestamp($timestamp);
    }
    /**
     * Get UserID value
     * @return string
     */
    public function getUserID(): string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \StructType\EwsNotifyOneDriveSyncType
     */
    public function setUserID(string $userID): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($userID) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($userID, true)), __LINE__);
        }
        $this->UserID = $userID;
        
        return $this;
    }
    /**
     * Get TenantID value
     * @return string
     */
    public function getTenantID(): string
    {
        return $this->TenantID;
    }
    /**
     * Set TenantID value
     * @param string $tenantID
     * @return \StructType\EwsNotifyOneDriveSyncType
     */
    public function setTenantID(string $tenantID): self
    {
        // validation for constraint: string
        if (!is_null($tenantID) && !is_string($tenantID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tenantID, true), gettype($tenantID)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($tenantID) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $tenantID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($tenantID, true)), __LINE__);
        }
        $this->TenantID = $tenantID;
        
        return $this;
    }
    /**
     * Get Timestamp value
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \StructType\EwsNotifyOneDriveSyncType
     */
    public function setTimestamp(string $timestamp): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        
        return $this;
    }
}

<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $UserID;
    /**
     * The TenantID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $TenantID;
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Timestamp;
    /**
     * Constructor method for NotifyOneDriveSyncType
     * @uses EwsNotifyOneDriveSyncType::setUserID()
     * @uses EwsNotifyOneDriveSyncType::setTenantID()
     * @uses EwsNotifyOneDriveSyncType::setTimestamp()
     * @param string $userID
     * @param string $tenantID
     * @param string $timestamp
     */
    public function __construct($userID = null, $tenantID = null, $timestamp = null)
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
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \Ews\StructType\EwsNotifyOneDriveSyncType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: pattern
        if (!is_null($userID) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($userID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get TenantID value
     * @return string
     */
    public function getTenantID()
    {
        return $this->TenantID;
    }
    /**
     * Set TenantID value
     * @param string $tenantID
     * @return \Ews\StructType\EwsNotifyOneDriveSyncType
     */
    public function setTenantID($tenantID = null)
    {
        // validation for constraint: pattern
        if (!is_null($tenantID) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $tenantID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($tenantID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($tenantID) && !is_string($tenantID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tenantID)), __LINE__);
        }
        $this->TenantID = $tenantID;
        return $this;
    }
    /**
     * Get Timestamp value
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \Ews\StructType\EwsNotifyOneDriveSyncType
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNotifyOneDriveSyncType
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

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
     * @var dateTime
     */
    public $Timestamp;
    /**
     * Constructor method for NotifyOneDriveSyncType
     * @uses EwsNotifyOneDriveSyncType::setUserID()
     * @uses EwsNotifyOneDriveSyncType::setTenantID()
     * @uses EwsNotifyOneDriveSyncType::setTimestamp()
     * @param string $userID
     * @param string $tenantID
     * @param dateTime $timestamp
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
        $this->TenantID = $tenantID;
        return $this;
    }
    /**
     * Get Timestamp value
     * @return dateTime
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param dateTime $timestamp
     * @return \Ews\StructType\EwsNotifyOneDriveSyncType
     */
    public function setTimestamp($timestamp = null)
    {
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

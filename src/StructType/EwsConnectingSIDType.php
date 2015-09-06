<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectingSIDType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConnectingSIDType extends AbstractStructBase
{
    /**
     * The PrincipalName
     * @var \Ews\StructType\EwsPrincipalNameType
     */
    public $PrincipalName;
    /**
     * The SID
     * @var \Ews\StructType\EwsSIDType
     */
    public $SID;
    /**
     * The PrimarySmtpAddress
     * @var \Ews\StructType\EwsPrimarySmtpAddressType
     */
    public $PrimarySmtpAddress;
    /**
     * The SmtpAddress
     * @var \Ews\StructType\EwsSmtpAddressType
     */
    public $SmtpAddress;
    /**
     * Constructor method for ConnectingSIDType
     * @uses EwsConnectingSIDType::setPrincipalName()
     * @uses EwsConnectingSIDType::setSID()
     * @uses EwsConnectingSIDType::setPrimarySmtpAddress()
     * @uses EwsConnectingSIDType::setSmtpAddress()
     * @param \Ews\StructType\EwsPrincipalNameType $principalName
     * @param \Ews\StructType\EwsSIDType $sID
     * @param \Ews\StructType\EwsPrimarySmtpAddressType $primarySmtpAddress
     * @param \Ews\StructType\EwsSmtpAddressType $smtpAddress
     */
    public function __construct(\Ews\StructType\EwsPrincipalNameType $principalName = null, \Ews\StructType\EwsSIDType $sID = null, \Ews\StructType\EwsPrimarySmtpAddressType $primarySmtpAddress = null, \Ews\StructType\EwsSmtpAddressType $smtpAddress = null)
    {
        $this
            ->setPrincipalName($principalName)
            ->setSID($sID)
            ->setPrimarySmtpAddress($primarySmtpAddress)
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get PrincipalName value
     * @return \Ews\StructType\EwsPrincipalNameType|null
     */
    public function getPrincipalName()
    {
        return $this->PrincipalName;
    }
    /**
     * Set PrincipalName value
     * @param \Ews\StructType\EwsPrincipalNameType $principalName
     * @return \Ews\StructType\EwsConnectingSIDType
     */
    public function setPrincipalName(\Ews\StructType\EwsPrincipalNameType $principalName = null)
    {
        $this->PrincipalName = $principalName;
        return $this;
    }
    /**
     * Get SID value
     * @return \Ews\StructType\EwsSIDType|null
     */
    public function getSID()
    {
        return $this->SID;
    }
    /**
     * Set SID value
     * @param \Ews\StructType\EwsSIDType $sID
     * @return \Ews\StructType\EwsConnectingSIDType
     */
    public function setSID(\Ews\StructType\EwsSIDType $sID = null)
    {
        $this->SID = $sID;
        return $this;
    }
    /**
     * Get PrimarySmtpAddress value
     * @return \Ews\StructType\EwsPrimarySmtpAddressType|null
     */
    public function getPrimarySmtpAddress()
    {
        return $this->PrimarySmtpAddress;
    }
    /**
     * Set PrimarySmtpAddress value
     * @param \Ews\StructType\EwsPrimarySmtpAddressType $primarySmtpAddress
     * @return \Ews\StructType\EwsConnectingSIDType
     */
    public function setPrimarySmtpAddress(\Ews\StructType\EwsPrimarySmtpAddressType $primarySmtpAddress = null)
    {
        $this->PrimarySmtpAddress = $primarySmtpAddress;
        return $this;
    }
    /**
     * Get SmtpAddress value
     * @return \Ews\StructType\EwsSmtpAddressType|null
     */
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param \Ews\StructType\EwsSmtpAddressType $smtpAddress
     * @return \Ews\StructType\EwsConnectingSIDType
     */
    public function setSmtpAddress(\Ews\StructType\EwsSmtpAddressType $smtpAddress = null)
    {
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConnectingSIDType
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

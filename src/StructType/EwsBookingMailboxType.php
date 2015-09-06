<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBookingMailboxType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * Constructor method for BookingMailboxType
     * @uses EwsBookingMailboxType::setName()
     * @uses EwsBookingMailboxType::setDisplayName()
     * @uses EwsBookingMailboxType::setSmtpAddress()
     * @param string $name
     * @param string $displayName
     * @param string $smtpAddress
     */
    public function __construct($name = null, $displayName = null, $smtpAddress = null)
    {
        $this
            ->setName($name)
            ->setDisplayName($displayName)
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsBookingMailboxType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsBookingMailboxType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsBookingMailboxType
     */
    public function setSmtpAddress($smtpAddress = null)
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
     * @return \Ews\StructType\EwsBookingMailboxType
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

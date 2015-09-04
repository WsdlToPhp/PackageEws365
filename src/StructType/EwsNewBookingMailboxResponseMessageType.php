<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NewBookingMailboxResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNewBookingMailboxResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SmtpAddress;
    /**
     * Constructor method for NewBookingMailboxResponseMessageType
     * @uses EwsNewBookingMailboxResponseMessageType::setSmtpAddress()
     * @param string $smtpAddress
     */
    public function __construct($smtpAddress = null)
    {
        $this
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get SmtpAddress value
     * @return string
     */
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsNewBookingMailboxResponseMessageType
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
     * @return \Ews\StructType\EwsNewBookingMailboxResponseMessageType
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

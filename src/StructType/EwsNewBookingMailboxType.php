<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NewBookingMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNewBookingMailboxType extends EwsBaseRequestType
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
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
     * The Alias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The Culture
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Culture;
    /**
     * The TimeZone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TimeZone;
    /**
     * The ReplyToAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReplyToAddress;
    /**
     * The BookingServiceName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BookingServiceName;
    /**
     * Constructor method for NewBookingMailboxType
     * @uses EwsNewBookingMailboxType::setName()
     * @uses EwsNewBookingMailboxType::setDisplayName()
     * @uses EwsNewBookingMailboxType::setAlias()
     * @uses EwsNewBookingMailboxType::setCulture()
     * @uses EwsNewBookingMailboxType::setTimeZone()
     * @uses EwsNewBookingMailboxType::setReplyToAddress()
     * @uses EwsNewBookingMailboxType::setBookingServiceName()
     * @param string $name
     * @param string $displayName
     * @param string $alias
     * @param string $culture
     * @param string $timeZone
     * @param string $replyToAddress
     * @param string $bookingServiceName
     */
    public function __construct($name = null, $displayName = null, $alias = null, $culture = null, $timeZone = null, $replyToAddress = null, $bookingServiceName = null)
    {
        $this
            ->setName($name)
            ->setDisplayName($displayName)
            ->setAlias($alias)
            ->setCulture($culture)
            ->setTimeZone($timeZone)
            ->setReplyToAddress($replyToAddress)
            ->setBookingServiceName($bookingServiceName);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsNewBookingMailboxType
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
     * @return \Ews\StructType\EwsNewBookingMailboxType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \Ews\StructType\EwsNewBookingMailboxType
     */
    public function setAlias($alias = null)
    {
        $this->Alias = $alias;
        return $this;
    }
    /**
     * Get Culture value
     * @return string|null
     */
    public function getCulture()
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \Ews\StructType\EwsNewBookingMailboxType
     */
    public function setCulture($culture = null)
    {
        $this->Culture = $culture;
        return $this;
    }
    /**
     * Get TimeZone value
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param string $timeZone
     * @return \Ews\StructType\EwsNewBookingMailboxType
     */
    public function setTimeZone($timeZone = null)
    {
        $this->TimeZone = $timeZone;
        return $this;
    }
    /**
     * Get ReplyToAddress value
     * @return string|null
     */
    public function getReplyToAddress()
    {
        return $this->ReplyToAddress;
    }
    /**
     * Set ReplyToAddress value
     * @param string $replyToAddress
     * @return \Ews\StructType\EwsNewBookingMailboxType
     */
    public function setReplyToAddress($replyToAddress = null)
    {
        $this->ReplyToAddress = $replyToAddress;
        return $this;
    }
    /**
     * Get BookingServiceName value
     * @return string|null
     */
    public function getBookingServiceName()
    {
        return $this->BookingServiceName;
    }
    /**
     * Set BookingServiceName value
     * @param string $bookingServiceName
     * @return \Ews\StructType\EwsNewBookingMailboxType
     */
    public function setBookingServiceName($bookingServiceName = null)
    {
        $this->BookingServiceName = $bookingServiceName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNewBookingMailboxType
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

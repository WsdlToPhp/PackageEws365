<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PinInfoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPinInfoType extends AbstractStructBase
{
    /**
     * The IsValid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsValid;
    /**
     * The PinExpired
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $PinExpired;
    /**
     * The LockedOut
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $LockedOut;
    /**
     * The FirstTimeUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $FirstTimeUser;
    /**
     * The PIN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PIN;
    /**
     * Constructor method for PinInfoType
     * @uses EwsPinInfoType::setIsValid()
     * @uses EwsPinInfoType::setPinExpired()
     * @uses EwsPinInfoType::setLockedOut()
     * @uses EwsPinInfoType::setFirstTimeUser()
     * @uses EwsPinInfoType::setPIN()
     * @param boolean $isValid
     * @param boolean $pinExpired
     * @param boolean $lockedOut
     * @param boolean $firstTimeUser
     * @param string $pIN
     */
    public function __construct($isValid = null, $pinExpired = null, $lockedOut = null, $firstTimeUser = null, $pIN = null)
    {
        $this
            ->setIsValid($isValid)
            ->setPinExpired($pinExpired)
            ->setLockedOut($lockedOut)
            ->setFirstTimeUser($firstTimeUser)
            ->setPIN($pIN);
    }
    /**
     * Get IsValid value
     * @return boolean
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }
    /**
     * Set IsValid value
     * @param boolean $isValid
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function setIsValid($isValid = null)
    {
        $this->IsValid = $isValid;
        return $this;
    }
    /**
     * Get PinExpired value
     * @return boolean
     */
    public function getPinExpired()
    {
        return $this->PinExpired;
    }
    /**
     * Set PinExpired value
     * @param boolean $pinExpired
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function setPinExpired($pinExpired = null)
    {
        $this->PinExpired = $pinExpired;
        return $this;
    }
    /**
     * Get LockedOut value
     * @return boolean
     */
    public function getLockedOut()
    {
        return $this->LockedOut;
    }
    /**
     * Set LockedOut value
     * @param boolean $lockedOut
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function setLockedOut($lockedOut = null)
    {
        $this->LockedOut = $lockedOut;
        return $this;
    }
    /**
     * Get FirstTimeUser value
     * @return boolean
     */
    public function getFirstTimeUser()
    {
        return $this->FirstTimeUser;
    }
    /**
     * Set FirstTimeUser value
     * @param boolean $firstTimeUser
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function setFirstTimeUser($firstTimeUser = null)
    {
        $this->FirstTimeUser = $firstTimeUser;
        return $this;
    }
    /**
     * Get PIN value
     * @return string|null
     */
    public function getPIN()
    {
        return $this->PIN;
    }
    /**
     * Set PIN value
     * @param string $pIN
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function setPIN($pIN = null)
    {
        $this->PIN = $pIN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPinInfoType
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

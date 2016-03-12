<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PinInfoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPinInfoType extends AbstractStructBase
{
    /**
     * The IsValid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsValid;
    /**
     * The PinExpired
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $PinExpired;
    /**
     * The LockedOut
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $LockedOut;
    /**
     * The FirstTimeUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
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
     * @param bool $isValid
     * @param bool $pinExpired
     * @param bool $lockedOut
     * @param bool $firstTimeUser
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
     * @return bool
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }
    /**
     * Set IsValid value
     * @param bool $isValid
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function setIsValid($isValid = null)
    {
        $this->IsValid = $isValid;
        return $this;
    }
    /**
     * Get PinExpired value
     * @return bool
     */
    public function getPinExpired()
    {
        return $this->PinExpired;
    }
    /**
     * Set PinExpired value
     * @param bool $pinExpired
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function setPinExpired($pinExpired = null)
    {
        $this->PinExpired = $pinExpired;
        return $this;
    }
    /**
     * Get LockedOut value
     * @return bool
     */
    public function getLockedOut()
    {
        return $this->LockedOut;
    }
    /**
     * Set LockedOut value
     * @param bool $lockedOut
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function setLockedOut($lockedOut = null)
    {
        $this->LockedOut = $lockedOut;
        return $this;
    }
    /**
     * Get FirstTimeUser value
     * @return bool
     */
    public function getFirstTimeUser()
    {
        return $this->FirstTimeUser;
    }
    /**
     * Set FirstTimeUser value
     * @param bool $firstTimeUser
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
        // validation for constraint: string
        if (!is_null($pIN) && !is_string($pIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pIN)), __LINE__);
        }
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

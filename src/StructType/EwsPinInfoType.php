<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsValid;
    /**
     * The PinExpired
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $PinExpired;
    /**
     * The LockedOut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $LockedOut;
    /**
     * The FirstTimeUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $FirstTimeUser;
    /**
     * The PIN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PIN = null;
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
    public function __construct(bool $isValid, bool $pinExpired, bool $lockedOut, bool $firstTimeUser, ?string $pIN = null)
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
    public function getIsValid(): bool
    {
        return $this->IsValid;
    }
    /**
     * Set IsValid value
     * @param bool $isValid
     * @return \StructType\EwsPinInfoType
     */
    public function setIsValid(bool $isValid): self
    {
        // validation for constraint: boolean
        if (!is_null($isValid) && !is_bool($isValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isValid, true), gettype($isValid)), __LINE__);
        }
        $this->IsValid = $isValid;
        
        return $this;
    }
    /**
     * Get PinExpired value
     * @return bool
     */
    public function getPinExpired(): bool
    {
        return $this->PinExpired;
    }
    /**
     * Set PinExpired value
     * @param bool $pinExpired
     * @return \StructType\EwsPinInfoType
     */
    public function setPinExpired(bool $pinExpired): self
    {
        // validation for constraint: boolean
        if (!is_null($pinExpired) && !is_bool($pinExpired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pinExpired, true), gettype($pinExpired)), __LINE__);
        }
        $this->PinExpired = $pinExpired;
        
        return $this;
    }
    /**
     * Get LockedOut value
     * @return bool
     */
    public function getLockedOut(): bool
    {
        return $this->LockedOut;
    }
    /**
     * Set LockedOut value
     * @param bool $lockedOut
     * @return \StructType\EwsPinInfoType
     */
    public function setLockedOut(bool $lockedOut): self
    {
        // validation for constraint: boolean
        if (!is_null($lockedOut) && !is_bool($lockedOut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lockedOut, true), gettype($lockedOut)), __LINE__);
        }
        $this->LockedOut = $lockedOut;
        
        return $this;
    }
    /**
     * Get FirstTimeUser value
     * @return bool
     */
    public function getFirstTimeUser(): bool
    {
        return $this->FirstTimeUser;
    }
    /**
     * Set FirstTimeUser value
     * @param bool $firstTimeUser
     * @return \StructType\EwsPinInfoType
     */
    public function setFirstTimeUser(bool $firstTimeUser): self
    {
        // validation for constraint: boolean
        if (!is_null($firstTimeUser) && !is_bool($firstTimeUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($firstTimeUser, true), gettype($firstTimeUser)), __LINE__);
        }
        $this->FirstTimeUser = $firstTimeUser;
        
        return $this;
    }
    /**
     * Get PIN value
     * @return string|null
     */
    public function getPIN(): ?string
    {
        return $this->PIN;
    }
    /**
     * Set PIN value
     * @param string $pIN
     * @return \StructType\EwsPinInfoType
     */
    public function setPIN(?string $pIN = null): self
    {
        // validation for constraint: string
        if (!is_null($pIN) && !is_string($pIN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pIN, true), gettype($pIN)), __LINE__);
        }
        $this->PIN = $pIN;
        
        return $this;
    }
}

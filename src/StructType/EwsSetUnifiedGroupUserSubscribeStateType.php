<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupUserSubscribeStateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupUserSubscribeStateType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The IsSubscribed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsSubscribed;
    /**
     * Constructor method for SetUnifiedGroupUserSubscribeStateType
     * @uses EwsSetUnifiedGroupUserSubscribeStateType::setIsSubscribed()
     * @param bool $isSubscribed
     */
    public function __construct(bool $isSubscribed)
    {
        $this
            ->setIsSubscribed($isSubscribed);
    }
    /**
     * Get IsSubscribed value
     * @return bool
     */
    public function getIsSubscribed(): bool
    {
        return $this->IsSubscribed;
    }
    /**
     * Set IsSubscribed value
     * @param bool $isSubscribed
     * @return \StructType\EwsSetUnifiedGroupUserSubscribeStateType
     */
    public function setIsSubscribed(bool $isSubscribed): self
    {
        // validation for constraint: boolean
        if (!is_null($isSubscribed) && !is_bool($isSubscribed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubscribed, true), gettype($isSubscribed)), __LINE__);
        }
        $this->IsSubscribed = $isSubscribed;
        
        return $this;
    }
}

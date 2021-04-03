<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupUserSubscribeStateResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupUserSubscribeStateResponseMessageType extends EwsResponseMessageType
{
    /**
     * The IsSubscribed
     * Meta information extracted from the WSDL
     * - ref: t:IsSubscribed
     * @var bool|null
     */
    protected ?bool $IsSubscribed = null;
    /**
     * Constructor method for SetUnifiedGroupUserSubscribeStateResponseMessageType
     * @uses EwsSetUnifiedGroupUserSubscribeStateResponseMessageType::setIsSubscribed()
     * @param bool $isSubscribed
     */
    public function __construct(?bool $isSubscribed = null)
    {
        $this
            ->setIsSubscribed($isSubscribed);
    }
    /**
     * Get IsSubscribed value
     * @return bool|null
     */
    public function getIsSubscribed(): ?bool
    {
        return $this->IsSubscribed;
    }
    /**
     * Set IsSubscribed value
     * @param bool $isSubscribed
     * @return \StructType\EwsSetUnifiedGroupUserSubscribeStateResponseMessageType
     */
    public function setIsSubscribed(?bool $isSubscribed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSubscribed) && !is_bool($isSubscribed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubscribed, true), gettype($isSubscribed)), __LINE__);
        }
        $this->IsSubscribed = $isSubscribed;
        
        return $this;
    }
}

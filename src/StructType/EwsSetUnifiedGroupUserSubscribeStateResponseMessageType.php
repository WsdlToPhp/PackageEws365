<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var bool
     */
    public $IsSubscribed;
    /**
     * Constructor method for SetUnifiedGroupUserSubscribeStateResponseMessageType
     * @uses EwsSetUnifiedGroupUserSubscribeStateResponseMessageType::setIsSubscribed()
     * @param bool $isSubscribed
     */
    public function __construct($isSubscribed = null)
    {
        $this
            ->setIsSubscribed($isSubscribed);
    }
    /**
     * Get IsSubscribed value
     * @return bool|null
     */
    public function getIsSubscribed()
    {
        return $this->IsSubscribed;
    }
    /**
     * Set IsSubscribed value
     * @param bool $isSubscribed
     * @return \Ews\StructType\EwsSetUnifiedGroupUserSubscribeStateResponseMessageType
     */
    public function setIsSubscribed($isSubscribed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSubscribed) && !is_bool($isSubscribed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubscribed, true), gettype($isSubscribed)), __LINE__);
        }
        $this->IsSubscribed = $isSubscribed;
        return $this;
    }
}
